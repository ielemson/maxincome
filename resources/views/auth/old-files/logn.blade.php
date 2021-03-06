<!DOCTYPE html>
<html>
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maxincome - Login</title>
    <meta name="description" content="maincome investment login page">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/login-assets/vendors/bootstrap/css/bootstrap.min.css">

        <!-- theme stylesheet-->
        <link rel="stylesheet" href="/login-assets/css/premium.css" id="theme-stylesheet">
        <link rel="stylesheet" href="{{asset('login-assets/css/auth.css')}}">
        <link href="/img/fav-icon.png" rel="icon">
        <link href="img/fav-icon.png" rel="apple-touch-icon">
  
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav-icon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>

        <!--====== PREALOADER  START ======-->
        <div class="preloader">
          <div class="preloader-body">
              <div class="cssload-container">
              <div class="cssload-speeding-wheel"></div>
              </div>
              <p>Loading...</p>
          </div>
      </div>
      <!--====== PREALOADER  ENDS  ======-->

    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <img src="/img/maxincome-logo.png"/>
                  </div>
                  {{-- <p>Login or to start investing with us...</p> --}}
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              
             
              <div class="form d-flex align-items-center">
                
                <div class="content">
                  {{-- ALERT MESSAGE SESSION --}}
                  @include('partials._alerts')
                  <form method="POST" action="{{route('user_auth')}}" > 
                    @csrf
                    
                    <div class="form-group">
                      <input id="login-username" type="email" name="email" required data-msg="Email" class="input-material @error('email') is-invalid @enderror" value="{{ old('email') }}">
                      <label for="login-username" class="label-material">E-Mail Address</label>
                      @error('email')
                      <span class="invalid-feedback" role="alert alert-danger" >
                          {{ $message }}
                      </span>
                  @enderror
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                      @error('password')
                      <span class="invalid-feedback" role="alert alert-danger" >
                          {{ $message }}
                      </span>
                  @enderror
                    </div>
                    
                    <button  class="btn btn-primary" type="submit">Login</button>
                    <a href="{{url('/')}}"  class="btn btn-warning">Go Back</a>

                  </form>
                  <br/>
                  <a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="{{route('register')}}" class="signup">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
  <!-- JavaScript files-->
  <script src="/login-assets/vendors/jquery/jquery.min.js"></script>
  <script src="/login-assets/vendors/popper.js/umd/popper.min.js"> </script>
  <script src="/login-assets/vendors/bootstrap/js/bootstrap.min.js"></script>
  <script src="/login-assets/vendors/jquery.cookie/jquery.cookie.js"> </script>
  <script src="/login-assets/vendors/chart.js/Chart.min.js"></script>
  <script src="/login-assets/vendors/jquery-validation/jquery.validate.min.js"></script>
  <!-- Main File-->
  <script src="/login-assets/js/front.js"></script>
  <script>
    $(window).on('load',function(){
    setTimeout(function(){ // allowing 3 secs to fade out loader
    $('.preloader').fadeOut('slow');
    },2000);
    });
    </script>
  </body>

</html>