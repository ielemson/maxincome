<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/globex/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 13:07:18 GMT -->
<head>
<meta charset="utf-8">
<title>Maxincome | Home</title>
<!-- Stylesheets -->
<link href="/landing-assets/css/bootstrap.css" rel="stylesheet">
<link href="/landing-assets/css/style.css" rel="stylesheet">
<link href="/landing-assets/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@300;600;700;800;900&amp;display=swap" rel="stylesheet">

<!-- Color Switcher Mockup -->
{{-- <link href="/landing-assets/css/color-switcher-design.css" rel="stylesheet"> --}}

<!-- Color Themes -->
<link id="theme-color-file" href="/landing-assets/css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="/landing-assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="/landing-assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	<!-- Main Header-->
   @include('landing-partials.header')
    <!-- End Main Header -->
	
	<!-- Sidebar Cart Item -->
@include('landing-partials.sidebar')
	<!-- END sidebar widget item -->
	
	<!-- Banner Section -->
   @include('landing-partials.banner')
	<!-- End Banner Section -->
	
	<!-- About Section -->
@include('landing-partials.aboutus')
	<!-- End About Section -->
	

	<!-- Call To Action Section -->
	<section class="call-to-action-section" style="background-image: url(/landing-assets/images/background/pattern-3.png)">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Heading Column -->
				<div class="heading-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Preparing For Your Business <br> Success With our investment Solution</h2>
					</div>
				</div>
				<!-- Button Column -->
				<div class="button-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Meet With Us</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Call To Action Section -->
	
		<!-- Pricing Section -->
	@if (count($packages)>0)
	@include('landing-partials.packages')
	@endif
	<!-- End Pricing Section -->

	<!--Sponsors Section-->
	<section class="sponsors-section">
		<div class="auto-container">
			
			
		</div>
	</section>
	<!--End Sponsors Section-->
	

	
	<!-- Main Footer -->
  	<!-- Info Section -->
	<section class="info-section" style="background-image: url(/landing-assets/images/background/6.jpg)">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Logo Column -->
				<div class="logo-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="logo">
							<a href="{{url('/')}}"><img src="/landing-assets/images/logo-small.png" alt="" /></a>
						</div>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="icon-box"><span class="flaticon-pin"></span></div>
						<ul>
							<li><strong>Address</strong></li>
							<li>
								11 Ojulowo lmoshe Street Ikeja, Lagos Nigeria.</li>
						</ul>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="icon-box"><span class="flaticon-phone-call"></span></div>
						<ul>
							<li><strong>Phone</strong></li>
							<li>+234809 950 0028</li>
						</ul>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="icon-box"><span class="flaticon-email-1"></span></div>
						<ul>
							<li><strong>E-Mail</strong></li>
							<li>support@maxincome.org</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Info Section -->
	
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
							<h5>About Maxincome</h5>
							<div class="text">
								We are the best investment organization. Providing the highest quality investment services in Nigeria with years of experience and innovative achievements.
							</div>
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
								<li><a href="{{url('about-us')}}">About Us</a></li>
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
								<form method="post" >
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
						<div class="copyright">Copyright &copy; {{Date('Y')}} by maxincome. All Rights Reserved.</div>
					</div>
					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<ul class="footer-nav">
							<li><a href="#">About Us</a></li>
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

<!-- Color Palate / Color Switcher -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="/landing-assets/js//jquery.js"></script>
<script src="/landing-assets/js//popper.min.js"></script>
<script src="/landing-assets/js//bootstrap.min.js"></script>
<script src="/landing-assets/js//jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/landing-assets/js//jquery.fancybox.js"></script>
<script src="/landing-assets/js//appear.js"></script>
<script src="/landing-assets/js//parallax.min.js"></script>
<script src="/landing-assets/js//tilt.jquery.min.js"></script>
<script src="/landing-assets/js//jquery.paroller.min.js"></script>
<script src="/landing-assets/js//owl.js"></script>
<script src="/landing-assets/js//wow.js"></script>
<script src="/landing-assets/js//nav-tool.js"></script>
<script src="/landing-assets/js//jquery-ui.js"></script>
<script src="/landing-assets/js//script.js"></script>
<script src="/landing-assets/js//color-settings.js"></script>

</body>

</html>