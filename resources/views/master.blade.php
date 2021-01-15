<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Card-Shop</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
    
    <style>

        body {
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            background-color: #fff;
            margin: revert;
        }

        .psc:hover {
            color: rgb(87, 248, 114);
            text-decoration: none;
        }

        .form-control{
            border-radius: 10px;
        }
        .psc {
            color: #66AFE9
        }

        .login-form {
            width: 340px;
            margin: 50px auto;
              font-size: 15px;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 50px;
        }
        .btn {        
            font-size: 15px;
            font-weight: bold;
        }

        .custom-login{
            height: 600px;
            padding-top: 50px;
        }
        
        .panel{
            /* position:fixed; */
            margin-top: 190px;
            clear: both;
            /* right: 0;
            left: 0; */
        }

        img.slider-img{
            height: 400px !important;
            /* image-orientation: flip */

        }

        .custom-product{
            height: 600px;
        }

        .slider-text{
            background-color: #000000ad;
            color: #fff;
        }

        .trending-img{
            height: 100px;
        }

        .trending-item{
            float: left;
            width: 20%
        }

        .trending-wrapper{
            margin: 30px;
        }

        .detail-img{
            height: 200px;
        }

        .prod-title{
            color: #7d2200;

        }

        .search-box{
            width: 500px !important;
        }

        .btn-warning{
            color: #fff;
            background-color: #af0000;
            border-color: #900707;
            margin-top: 40px;
        }

        .card-list-devider{
            border-bottom: 1px solid rgb(8, 53, 53);
            margin-bottom: 15px;
            padding-bottom: 25px
        }

        .cardlist-text{
            margin-left: 40px;
            padding-left: 20px
        }

        .brown{
            color: brown
        }

        .navbar-brand{
            background: rgb(0, 255, 255);
        }
        </style>


</head>
<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
    
</body>
</html>