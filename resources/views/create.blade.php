@extends('.master')
@section('content')
<div class="psc">
    <h1 class='psc'>Create Ticket</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('save.post') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Title <small>(require)</small></label>
            <input type="text" class="form-control" style="width:600px" name="title" placeholder="Post Title"/>
        </div>

        <div class="form-group">
            <label for="description">Type here <small>(require)</small></label>
            <textarea rows="3" class="form-control" style="border-radius:10px; height: 100px; width: 600px;" name="body" placeholder="Say..."></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Create
            </button>
            <a href="{{ route('posts') }}" class="btn btn-default">Cancle</a>
        </div>

    </form>
</div>
@endsection