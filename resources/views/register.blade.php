@extends('.master')
@section('content')
<div class="login-form custom-login">
    <form action="register" method="POST">
        @csrf
        <h2 class="text-center">Register</h2> 
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="User name" required="required">
        </div>      
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>     
    </form>
</div>
@endsection