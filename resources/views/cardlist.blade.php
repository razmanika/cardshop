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
            <h3 class="brown">List of Added Products</h3>
            <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
            @if($total == 0)
                <p color=''>Nothing added to the card</p>
            @endif
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="row searched-item card-list-devider">
                        <div class="col-sm-2">
                            <a href="{{ route('detail', $item->id) }}">
                                <img class="trending-img" width="150px" src="{{ $item->gallery }}">
                              </a>
                        </div>
                        <div class="col-sm-5">
                            <div class="cardlist-text">
                                <h2>{{ $item->name }}</h2>
                                <h5>{{ $item->description }}</h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{ route('remove_Product', $item->card_id) }}"><button class="btn btn-warning" >Remove</button></a>
                        </div>         
                    </div>
                @endforeach
            </div>
            <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
          </div>
      </div>
</div>
@endsection