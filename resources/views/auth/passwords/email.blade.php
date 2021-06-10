<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/globex/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 13:08:59 GMT -->
<head>
<meta charset="utf-8">
<title>Maxincome | Reset Password</title>
<!-- Stylesheets -->
<link href="/landing-assets/css/bootstrap.css" rel="stylesheet">
<link href="/landing-assets/css/style.css" rel="stylesheet">
<link href="/landing-assets/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@300;600;700;800;900&amp;display=swap" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="/landing-assets/css/color-switcher-design.css" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="/landing-assets/css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="/landing-assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="/lading-assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="/landing-assets/js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	<!-- Main Header-->
	<!-- Main Header-->
	@include('landing-partials.header')
    <!-- End Main Header -->
	
	<!-- Sidebar Cart Item -->
	@include('landing-partials.sidebar')
	<!-- END sidebar widget item -->
	
	<!--Page Title-->
    <section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(/landing-assets/images/background/pattern-16.png)"></div>
    	<div class="auto-container">
			<h2>Reset Password</h2>
			<ul class="page-breadcrumb">
				<li><a href="{{url('/')}}">home</a></li>
				<li>Reset Passwprd</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	


    
	<!--Register Section-->
  <section class="register-section">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Form Column-->
            <div class="form-column column col-lg-6 col-md-12 col-sm-12 mx-auto">
            
                <div class="sec-title">
                    <h2>Reset Your Password</h2>
        <div class="separate"></div>
                </div>
                
                <!--Login Form-->
                <div class="styled-form login-form">
                  @include('partials._alerts')
                  <form method="POST" action="{{route('reset_password')}}">
                    @csrf
                    
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                            <input type="email" name="email" value="" placeholder="Emai Address*" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert alert-danger" >
                                {{ $message }}
                            </span>
                        @enderror
                        </div>
                        <div class="clearfix">
                            <div class="form-group pull-left">
                                <button type="submit" class="theme-btn btn-style-three"><span class="txt">Reset Password</span></button>
                            </div>
                            
                        </div>
                        
                        {{-- <div class="clearfix">
                            <div class="pull-left">
                                <input type="checkbox" id="remember-me"><label class="remember-me" for="remember-me">&nbsp; Remember Me</label>
                            </div>
                        </div> --}}
                        
                    </form>
                </div>
                
            </div>
            
           
            
        </div>
    </div>
</section>
<!--End Register Section-->
	
	<!-- Main Footer -->
    <footer class="main-footer style-three">
		<div class="pattern-layer-three" style="background-image: url(/landing-assets/images/background/pattern-14.png)"></div>
		<div class="pattern-layer-four" style="background-image: url(/landing-assets/images/background/pattern-15.png)"></div>
		<!--Waves end-->
    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
					<!-- Footer Column -->
					<div class="footer-column col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget logo-widget">
							<h5>About Globex</h5>
							<div class="text">We are the best investment organization. Providing the highest quality investment services in Nigeria with years of experience and innovative achievements.</div>
						</div>
					</div>
					
					<!-- Footer Column -->
					<div class="footer-column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget links-widget">
							<h5>Quick Links</h5>
							<ul class="list-link">
								<li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('contact-us')}}">Contact <span class="ai-user"></span></a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="{{url('about')}}">About Us</a></li>
							</ul>
						</div>
					</div>
					
                    <!-- Footer Column -->
					<div class="footer-column col-lg-5 col-md-6 col-sm-12">
						<div class="footer-widget subscribe-widget">
							<h5>Subscribe Newsletter</h5>
							<div class="text">Sign up today for hints, tips and <br> the latest product news</div>
							<!--Emailed Form-->
							<div class="emailed-form">
								<form method="post" action="">
									<div class="form-group">
										<input type="email" name="email" value="" placeholder="Enter Your Email" required>
										<button type="submit" class="theme-btn">Subscribe Now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<div class="copyright">Copyright &copy; {{Date('Y')}} by maxincome ltd. All Rights Reserved.</div>
					</div>
					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<ul class="footer-nav">
							<li><a href="{{url('about')}}">About Us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Privacy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	
	
</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="/landing-assets/js/jquery.js"></script>
<script src="/landing-assets/js/popper.min.js"></script>
<script src="/landing-assets/js/bootstrap.min.js"></script>
<script src="/landing-assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/landing-assets/js/jquery.fancybox.js"></script>
<script src="/landing-assets/js/appear.js"></script>
<script src="/landing-assets/js/parallax.min.js"></script>
<script src="/landing-assets/js/tilt.jquery.min.js"></script>
<script src="/landing-assets/js/jquery.paroller.min.js"></script>
<script src="/landing-assets/js/owl.js"></script>
<script src="/landing-assets/js/wow.js"></script>
<script src="/landing-assets/js/validate.js"></script>
<script src="/landing-assets/js/nav-tool.js"></script>
<script src="/landing-assets/js/jquery-ui.js"></script>
<script src="/landing-assets/js/script.js"></script>
<script src="/landing-assets/js/color-settings.js"></script>

</body>

</html>