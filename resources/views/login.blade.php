<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('form_login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('form_login/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('form_login/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('form_login/css/style.css')}}">

    <title>Login #6</title>
</head>
<body>


<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url({{asset('form_login/images/2000_1500.jpg')}});"></div>
    <div class="contents order-2 order-md-1">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <div class="mb-4">
                        <h3 style="color: pink">Sign In</h3>
                        @if(\Illuminate\Support\Facades\Session::has('error_login'))
                            <div class="form-group">
                                <p class="text-danger">
                                    <i class="fa fa-check"
                                       aria-hidden="true"></i>{{\Illuminate\Support\Facades\Session::get('error_login')}}
                                </p>
                            </div>
                        @endif
                    </div>
                    <form action="{{route('submitLogin')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group first">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="email">
                        </div>
                        <div class="form-group last mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="d-flex mb-5 align-items-center">
                            <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                <input type="checkbox" checked="checked"/>
                                <div class="control__indicator"></div>
                            </label>
                            <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                        </div>

                        <input type="submit" value="Log In" class="btn btn-block btn-primary">

                        <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>

                        <div class="social-login">
                            <a href="#" class="facebook btn d-flex justify-content-center align-items-center">
                                <span class="icon-facebook mr-3"></span> Login with Facebook
                            </a>
                            <a href="#" class="google btn d-flex justify-content-center align-items-center">
                                <span class="icon-google mr-3"></span> Login with  Google
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('form_login/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('form_login/js/popper.min.js')}}"></script>
<script src="{{asset('form_login/js/bootstrap.min.js')}}"></script>
<script src="{{asset('form_login/js/main.js')}}"></script>
</body>
</html>
