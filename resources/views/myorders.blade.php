<?php
use App\Http\Controllers\ProductController;
$total =0;
if(Session::has('user')){
  $total = ProductController::cardItem();
}

?>
@extends('.master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3 class="brown">List of My Orders</h3>
            @if(!$orders)
                <p color=''>Nothing added to the card</p>
            @endif
            <div class="carousel-inner">
                @foreach ($orders as $item)
                    <div class="row searched-item card-list-devider">
                        <div class="col-sm-2">
                            <a href="{{ route('detail', $item->id) }}">
                                <img class="trending-img" width="150px" src="{{ $item->gallery }}">
                              </a>
                        </div>
                        <div class="col-sm-5">
                            <div class="cardlist-text">
                                <h2 style="color: rgb(230, 130, 0)">{{ $item->name }}</h2>
                                <h5>Delivery Status : {{ $item->status }}</h5>
                                <h5>Address : {{ $item->address }}</h5>
                                <h5>Payment Status : {{ $item->payment_status }}</h5>
                                <h5>Payment Method : {{ $item->payment_method }}</h5>
                            </div>
                        </div>      
                    </div>
                @endforeach
            </div>
          </div>
      </div>
</div>
@endsection