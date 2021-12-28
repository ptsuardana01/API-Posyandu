<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset_login/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('asset_login/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('asset_login/css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('asset_login/css/style.css') }}">

    <title>Login</title>
  </head>
  <body class="bg-white">
  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('img/Breastfeeding (2).gif') }}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center bg-gray-100">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Selamat datang di Pos Layanan Terpadu</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-group first">
                <label for="email">Email</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus >
              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input id="password" class="form-control"
                type="password"
                name="password"
                required autocomplete="current-password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                @if (Route::has('password.request'))
                <span class="ml-auto"><a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password</a>
                </span> 
                @endif
              </div>
              <button type="submit" class="btn btn-block btn-primary"> Login </button>
              <a href="{{ route('register') }}" style="display: flex; align-items:center; justify-content:center; text-decoration:none" class="btn btn-block btn-primary text-white"> Register </a>

            </form>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
    <script src="{{ asset('asset_login/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('asset_login/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset_login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset_login/js/main.js') }}"></script>
  </body>
</html>