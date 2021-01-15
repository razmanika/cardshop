<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('product')->with('product', $product);
    }

    public function detail(Product $product)
    {
        return view('detail', ['product' => $product]);
    }

    public function search(Request $request)
    {
        $data = Product::where('name', 'Like', '%'.$request->input('query').'%')->get();
        return view('search', ['products'=>$data]);
    }

    public function addToCard(Request $request)
    {
        if ($request->session()->has('user')) {
            $card= new Card;
            $card->user_id=$request->session()->get('user')['id'];
            $card->product_id=$request->product_id;
            $card->save();
            return redirect()->back();
        }
        else
        {
            return redirect('/login');
        }
    }

    static function cardItem()
    {
        $userId=Session::get('user')['id'];
        return Card::where('user_id', $userId)->count();
    }

    public function cardList()
    {
        
        $userId=Session::get('user')['id'];

        $products = DB::table('card')
        ->join('products','card.product_id','=','products.id')
        ->where('card.user_id', $userId)
        ->select('products.*', 'card.id as card_id')
        ->get();

        return view('cardlist',['products'=>$products]);
    }

    function removeProduct($id)
    {
        Card::destroy($id);
        return redirect()->back();
    }

    public function orderNow()
    {
        $userId=Session::get('user')['id'];

        $total = $products = DB::table('card')
        ->join('products','card.product_id','=','products.id')
        ->where('card.user_id', $userId)
        ->select('products.*', 'card.id as card_id')
        ->sum('products.price');

        return view('order',['total'=>$total]);
    }

    public function orderPlace(Request $request)
    {
        $userId=Session::get('user')['id'];
        $allCard = Card::where('user_id', $userId)->get();
        foreach($allCard as $card){
            $order = new Order;
            $order->product_id=$card['product_id'];
            $order->user_id=$card['user_id'];
            $order->status="pending";
            $order->payment_method=$request->payment;
            $order->payment_status="pending";
            $order->address=$request->address;
            $order->save();
            Card::where('user_id', $userId)->delete();
        }
        $request->input();
        return redirect('/'); 
    }

    public function myOrders()
    {
        $userId=Session::get('user')['id'];

        $orders= DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id', $userId)
        ->get();

        return view('myorders',['orders'=>$orders]);
    }
    
}
