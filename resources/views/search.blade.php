@extends('.master')
@section('content')

<div class="container custom-product">
      <div class="col-sm-4">
          <a href="$">Filter</a>
      </div>
      <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result</h4>
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="searched-item">
                      <a href="{{ route('detail', $item->id) }}">
                        <img class="trending-img" src="{{ $item['gallery'] }}">
                        <div class="">
                            <h2>{{ $item->name }}</h2>
                            <h5>{{ $item->description }}</h5>
                        </div>
                      </a>
                    </div>
                @endforeach
            </div>
          </div>
      </div>
</div>
@endsection