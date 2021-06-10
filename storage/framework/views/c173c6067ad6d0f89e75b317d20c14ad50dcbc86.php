<header class="main-header header-style-one">
    	
    <!-- Header Top -->
 
    
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container clearfix">
            
            <div class="pull-left logo-box">
                <div class="logo"><a href="<?php echo e(url('/')); ?>"><img src="/landing-assets/images/logo.png" alt="" title=""></a></div>
            </div>
            
            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                        <!-- Toggle Button -->    	
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="<?php echo e((request()->is('/')) ? 'current' : ''); ?>"><a href="#">Home</a>
                            </li>
                            <li class="<?php echo e((request()->is('about-us')) ? 'current' : ''); ?>"><a href="<?php echo e(url('about-us')); ?>">About</a>
                            </li>
                            <li class=""><a href="#">Services</a>
                                
                            </li>
                            <li class="dropdown <?php echo e((request()->is(['login','register'])) ? 'current' : ''); ?>"><a href="#">Account</a>
                                <ul>
                                    <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                                    <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                                </ul>
                            </li>
                            
                            <li class="<?php echo e((request()->is('contact-us')) ? 'current' : ''); ?>"><a href="<?php echo e(url('contact-us')); ?>">Contact us</a></li>
                        </ul>
                    </div>
                </nav>

                	<!-- Main Menu End-->
					<div class="outer-box clearfix">
					
						<!-- Nav Btn -->
						<div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>
						
						
							
					</div>
            </div>
            
        </div>
    </div>
    <!--End Header Upper-->
    
    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="<?php echo e(url('/')); ?>" title=""><img src="/landing-assets/images/logo-small.png" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
                
                <!-- Main Menu End-->
              
                
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="<?php echo e(url('/')); ?>"><img src="/landing-assets/images/logo.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header><?php /**PATH C:\Users\ielemson\Desktop\Apps\Laravel\maxincome\resources\views/landing-partials/header.blade.php ENDPATH**/ ?>