<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Maxincome - Register</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('login_css/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('login_css/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('login_css/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('login_css/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('login_css/css/style.css') }}">
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
                    <div class="col-lg-6 mx-auto">
                        <div class="auto-form-wrapper">

                            <div class=" mb-3 mx-auto" align="center">
                                <img src="/img/fav-icon.png" alt="{{$settings->site_title}}" class="img-responsive" style="width: 10%"> 
                                <br>
                                {{-- <h3><i class="fa fa-key"></i> Password Recovery</h3> --}}
                            </div>
                

                            @include('partials._alerts')

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="Fname"
                                            class=" col-form-label text-md-right">{{ __('First Name') }}</label>
                                        <input id="Fname" type="text"
                                            class="form-control form-control-lg @error('Fname') is-invalid @enderror regTxtBox"
                                            name="Fname" value="{{ old('Fname') }}" required autocomplete="Fname"
                                            autofocus placeholder="First name">

                                        @error('Fname')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="Lname"
                                            class=" col-form-label text-md-right">{{ __('Last Name') }}</label>
                                        <input id="Lname" type="text"
                                            class="form-control form-control-lg @error('Lname') is-invalid @enderror regTxtBox"
                                            name="Lname" value="{{ old('Lname') }}" required autocomplete="Lname"
                                            autofocus placeholder="Last name">

                                        @error('Lname')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <label for="email"
                                            class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror regTxtBox"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <label for="username"
                                            class=" col-form-label text-md-right">{{ __('Username') }}</label>
                                        <input id="username" type="username"
                                            class="form-control form-control-lg @error('username') is-invalid @enderror regTxtBox"
                                            name="username" value="{{ old('username') }}" required
                                            autocomplete="username" placeholder="Username">

                                        @error('username')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="password"
                                            class=" col-form-label text-md-right">{{ __('Password') }}</label>
                                        <input id="password" type="password"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror regTxtBox"
                                            name="password" required autocomplete="new-password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="password-confirm"
                                            class=" col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password"
                                            class="form-control form-control-lg" name="password_confirmation" required
                                            autocomplete="new-password" placeholder="Confirm password">
                                    </div>

                                </div>


                                <?php $usn = App\User::where('username', Session::get('ref'))->get(); ?>

                                <div class="row">
                                    <div class="">
                                        <input id="ref" type="hidden" class="form-control form-control-lg" name="ref"
                                            value="@if (count($usn)> 0) {{ Session::get('ref') }} @endif" >
                                    </div>
                                </div>

                                <div class="">
                                    <div class="" align="center">
                                        <br><br>
                                        @if ($settings->user_reg == 1)
                                            <div class="btn-group">
                                                <button class="btn btn-primary submit-btn ">Register</button>
                                                &nbsp;
                                                <a class="btn btn-warning submit-btn " href="/">Go back</a>
                                            </div>
                                        @else
                                            <div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i>
                                                Registration disabled by admin.</div>
                                        @endif
                                        <br><br>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="" align="center">
                                        <p>
                                            <strong>Already have an account? <a href="/login">Login</a></strong>
                                        </p>
                                    </div>
                                </div>

                            </form>

                        </div>
                        <ul class="auth-footer">
                            <li><a href="#">Conditions</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                        <p class="footer-text text-center">copyright © {{ date('Y') }} MaxIncome Investment. All
                            rights reserved.</p>
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
    <script>
        $(window).on('load',function(){
        setTimeout(function(){ // allowing 3 secs to fade out loader
        $('.preloader').fadeOut('slow');
        },2000);
        });
        </script>
</body>


</html>
