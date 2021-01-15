@extends('.master')
@section('content')
<div class="container">
    <a href="{{ route('create.post') }}" class="make-post"><h2 class='psc'>Post Here</h2></a> <br>
  <div class="well">
      <div class="media">

        @foreach ($posts as $post)

            <div class="media-body">
                <h4 class="media-heading">{{ $post->title }}</h4>
            <p class="text-right">By Francisco</p>
            <p>{{ $post->body }}</p>
            <ul class="list-inline list-unstyled">
                <li><span><i class="glyphicon glyphicon-calendar"></i> 2 days, 8 hours </span></li>
                <li>|</li>
                <span><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i></a>{{ $post->likes }}</span>
                <li>|</li>
                <li>
                <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
                <span><i class="fa fa-facebook-square"></i></span>
                <span><i class="fa fa-twitter-square"></i></span>
                <span><i class="fa fa-google-plus-square"></i></span>
                </li>
                </ul>
            </div>
        @endforeach
    </div>
  </div>
</div>
@endsection