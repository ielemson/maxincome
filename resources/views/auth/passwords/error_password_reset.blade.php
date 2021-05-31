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

              <div class="mb-3 mx-auto" align="center">
                <img src="/img/fav-icon.png" alt="{{$settings->site_title}}" class="img-responsive" style="width: 10%"> 
                <br>
       
            </div>

            @include('partials._alerts')
    
       <div class="alert alert-danger mb-3" role="alert">
        {{'Error! Your token is invalid,contact admin'}}
        </div>
        <a class="btn btn-warning submit-btn btn-block mb-4" href="{{route('login')}}">{{ __('Back to Login') }}</a>
       
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
