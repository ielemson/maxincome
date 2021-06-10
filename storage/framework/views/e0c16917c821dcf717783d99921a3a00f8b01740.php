<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/globex/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 13:08:59 GMT -->
<head>
<meta charset="utf-8">
<title>Maxincome | Contact</title>
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
	<?php echo $__env->make('landing-partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Main Header -->
	
	<!-- Sidebar Cart Item -->
	<?php echo $__env->make('landing-partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- END sidebar widget item -->
	
	<!--Page Title-->
    <section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(/landing-assets/images/background/pattern-16.png)"></div>
    	<div class="auto-container">
			<h2>Contact us</h2>
			<ul class="page-breadcrumb">
				<li><a href="<?php echo e(url('/')); ?>">home</a></li>
				<li>Contact us</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Info Section -->
	<section class="contact-info-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="title-box">
				<div class="title">GET IN TOUCH</div>
				<h2>We will be <br> glad to hear from you</h2>
				<div class="text">For genereal enquires you can touch with our front desk supporting team <br> at <a href="mailto:info@maxincome.org">info@maxincome.org</a> or call on <a href="tel: +234809 950 0028"> +234809 950 0028</a></div>
			</div>
			
			<div class="row clearfix">
			
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="content">
							<div class="icon-box"><span class="flaticon-pin"></span></div>
							<ul>
								<li><strong>Address</strong></li>
								<li>11 Ojulowo lmoshe St, Ikeja.</li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="content">
							<div class="icon-box"><span class="flaticon-phone-call"></span></div>
							<ul>
								<li><strong>Phone</strong></li>
								<li>+234809 950 0028</li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="content">
							<div class="icon-box"><span class="flaticon-email-1"></span></div>
							<ul>
								<li><strong>E-Mail</strong></li>
								<li>support@maxincome.org</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="lower-text">You can locate us using google map</div>
		</div>
	</section>
	<!-- End Contact Info Section -->
	
	<!-- Map Section -->
	<section class="contact-map-section">
		<div class="auto-container">
			<!-- Map Boxed -->
			<div class="map-boxed">
				<!--Map Outer-->
				<div class="map-outer">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3972604440173!2d3.334216914863423!3d6.597450524129364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b91885887dc95%3A0xe09b2eab70194a4f!2s11%20Ojulowo%20Imoshe%20St%2C%20Ikeja!5e0!3m2!1sen!2sng!4v1622734231828!5m2!1sen!2sng"  frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- End Map Section -->
	
	<!-- Contact Map Section -->
	<section class="contact-map-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">SEND YOUR MESSAGE</div>
						<h2>Send Your Message</h2>
					</div>
					<div class="pull-right">
						<div class="text">Our goal is to help our companies maintain or achieve best- in-class <br> positions in their respective industries and our team works.</div>
					</div>
				</div>
			</div>
			
			<!-- Contact Form -->
			<div class="contact-form">
					
				<!-- Contact Form -->
				<form method="post" action="" id="contact-form">
					<div class="row clearfix">
					
						<div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label>Your name *</label>
							<input type="text" name="username" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label>Email address *</label>
							<input type="text" name="email" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label>Phone number *</label>
							<input type="text" name="phone" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label>Website</label>
							<input type="text" name="subject" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-12 col-md-12 col-sm-12">
							<label>Your Message *</label>
							<textarea name="message" placeholder=""></textarea>
						</div>
						
						<div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
							<button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Send Now</span></button>
						</div>
						
					</div>
				</form>
			</div>
			<!-- End Contact Form -->
			
		</div>
	</section>
	<!-- End Contact Map Section -->
	
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
								<li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                    <li><a href="<?php echo e(url('contact-us')); ?>">Contact <span class="ai-user"></span></a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="<?php echo e(url('about-us')); ?>">About Us</a></li>
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
						<div class="copyright">Copyright &copy; <?php echo e(Date('Y')); ?> by maxincome ltd. All Rights Reserved.</div>
					</div>
					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<ul class="footer-nav">
							<li><a href="<?php echo e(url('about-us')); ?>">About Us</a></li>
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

</html><?php /**PATH C:\Users\ielemson\Desktop\Apps\Laravel\maxincome\resources\views/contactus.blade.php ENDPATH**/ ?>