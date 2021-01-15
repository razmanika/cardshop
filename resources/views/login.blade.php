@extends('.master')
@section('content')
<div class="login-form custom-login">
    <form action="login" method="post">
        @csrf
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        <div class="clearfix">
            <a href="#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    <a class="btn btn-default btn-block" href="/register" >
        Create an Account
    </a>
</div>
@endsection