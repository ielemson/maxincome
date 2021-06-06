<!DOCTYPE html>
<html>
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maincome - Reset Password</title>
    <meta name="description" content="maincome investment login page">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/login-assets/vendors/bootstrap/css/bootstrap.min.css">

        <!-- theme stylesheet-->
        <link rel="stylesheet" href="/login-assets/css/premium.css" id="theme-stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('login-assets/css/auth.css')); ?>">
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
                  
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              
             
              <div class="form d-flex align-items-center">
                
                <div class="content">
                  
                  <?php echo $__env->make('partials._alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <form >
                    <?php echo csrf_field(); ?>
                    
                    <div class="form-group">
                      <div class="alert alert-danger mb-3" role="alert">
                        <?php echo e('Error! Your token is invalid,contact admin'); ?>

                        </div>
                        <a class="btn btn-warning submit-btn btn-block mb-4" href="<?php echo e(route('login')); ?>"><?php echo e(__('Back to Login')); ?></a>
                    </div>
                   
                   
              
                  </form>
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

</html><?php /**PATH C:\Users\ielemson\Desktop\Apps\Laravel\maxincome\resources\views/auth/passwords/error_password_reset.blade.php ENDPATH**/ ?>