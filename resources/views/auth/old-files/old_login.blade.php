<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Maxincome - Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('login_css/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('login_css/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('login_css/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('login_css/vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('login_css/css/style.css')}}">
  <!-- endinject -->
  <link href="/img/fav-icon.png" rel="icon">
  <link href="img/fav-icon.png" rel="apple-touch-icon">
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
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100 mx-auto">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">

              <div class="mx-auto mb-3" align="center">
                <img src="/img/fav-icon.png" alt="{{$settings->site_title}}" class="img-responsive" style="width: 10%"> 
                <br>
                {{-- <h3><i class="fa fa-key"></i> Password Recovery</h3> --}}
            </div>

            
              @include('partials._alerts')

              <form method="POST" action="{{route('user_auth')}}" > 
                @csrf
                {{-- <div class="form-group">
                  <label for="email">{{ __('E-Mail Address') }}</label>
                  <div class="input-group">
                    <input id="email" type="email" class="form-control  form-control-lg @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail Address">

                    @error('email')
                        <span class="invalid-feedback" role="alert alert-danger" >
                            {{ $message }}
                        </span>
                    @enderror
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="icon-check"></i></span>
                    </div>
                  </div>
                </div> --}}

                <div class="form-group">
                  <label for="email">{{ __('E-Mail Address') }}</label>
                  <input id="email" type="email" class="form-control  form-control-lg @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail Address">

                  @error('email')
                      <span class="invalid-feedback" role="alert alert-danger" >
                          {{ $message }}
                      </span>
                  @enderror
                </div>


                <div class="form-group">
                  <label class="label">Password</label>
                    <input id="password" type="password" class="form-control  form-control-lg @error('password') is-invalid @enderror " name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert alert-danger" >
                            {{ $message }}
                        </span>
                    @enderror
                    
                </div>
                <div class="form-group">
            <div class="btn-group">
              <button class="btn btn-primary submit-btn ">Login</button>
              &nbsp;
              <a class="btn btn-warning submit-btn " href="/">Go back</a>
            </div>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked>
                      Keep me signed in
                    </label>
                  </div>
                  <a href="{{ route('password.request') }}" class="text-small forgot-password text-black">Forgot Password</a>
                </div>
                {{-- <div class="form-group">
                  <button class="btn btn-block g-login_css"><img class="mr-3" src="/login_css/images/file-icons/icon-google.svg" alt="">Log in with Google</button>
                </div> --}}
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Not a member ?</span>
               
                  <strong>   <a href="{{route('register')}}" class=" text-small">Create new account</a></strong>
                </div>
              </form>
            </div>
            <ul class="auth-footer">
              <li><a href="#">Conditions</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Terms</a></li>
            </ul>
            <p class="footer-text text-center">copyright © {{date('Y')}} MaxIncome Investment. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  {{-- <script src="{{asset('login_css/vendors/js/vendor.bundle.base.js')}}"></script> --}}
  {{-- <script src="{{asset('login_css/vendors/js/vendor.bundle.addons.js')}}"></script> --}}
  <!-- endinject -->
  <!-- inject:js -->
  {{-- <script src="{{asset('login_css/js/template.js')}}"></script> --}}
  <!-- endinject -->

  <script>
    $(window).on('load',function(){
    setTimeout(function(){ // allowing 3 secs to fade out loader
    $('.preloader').fadeOut('slow');
    },2000);
    });
    </script>
</body>



</html>
