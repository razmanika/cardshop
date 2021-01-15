@extends('.master')
@section('content')
<div class="container">
    <div class="row">
        {{-- სურათის სექცია --}}
        <div class="col-sm-6">
            <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
        </div>
        {{-- დეტალების სექცია --}}
        <div class="col-sm-6">
            <a href="/"><button class="btn btn-default">Go Back</button></a>
            <h2 class='prod-title'>{{ $product->name }}</h2>
            <h4>Category : {{ $product->category }}</h4>
            <h3>Price : {{ $product->price }} GEL</h3>
            <br>
            <h4>Details : {{ $product->description }}</h4>
            <br><br>
            <form action="/add_to_card" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button class="btn btn-primary">Add to Card</button>

            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>
@endsection