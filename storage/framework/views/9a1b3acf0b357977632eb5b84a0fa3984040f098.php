<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Maxincome - Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo e(asset('login_css/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('login_css/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('login_css/vendors/css/vendor.bundle.base.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('login_css/vendors/css/vendor.bundle.addons.css')); ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo e(asset('login_css/css/style.css')); ?>">
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
                <img src="/img/fav-icon.png" alt="<?php echo e($settings->site_title); ?>" class="img-responsive" style="width: 10%"> 
                <br>
                
            </div>

            
              <?php echo $__env->make('partials._alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

              <form method="POST" action="<?php echo e(route('user_auth')); ?>" > 
                <?php echo csrf_field(); ?>
                

                <div class="form-group">
                  <label for="email"><?php echo e(__('E-Mail Address')); ?></label>
                  <input id="email" type="email" class="form-control  form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="E-Mail Address">

                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert alert-danger" >
                          <?php echo e($message); ?>

                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div class="form-group">
                  <label class="label">Password</label>
                    <input id="password" type="password" class="form-control  form-control-lg <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="password" required autocomplete="current-password" placeholder="Password">

                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert alert-danger" >
                            <?php echo e($message); ?>

                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    
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
                  <a href="<?php echo e(route('password.request')); ?>" class="text-small forgot-password text-black">Forgot Password</a>
                </div>
                
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Not a member ?</span>
               
                  <strong>   <a href="<?php echo e(route('register')); ?>" class=" text-small">Create new account</a></strong>
                </div>
              </form>
            </div>
            <ul class="auth-footer">
              <li><a href="#">Conditions</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Terms</a></li>
            </ul>
            <p class="footer-text text-center">copyright © <?php echo e(date('Y')); ?> MaxIncome Investment. All rights reserved.</p>
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
  
  
  <!-- endinject -->
  <!-- inject:js -->
  
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
<?php /**PATH C:\Users\ielemson\Desktop\Apps\Laravel\maxincome\resources\views/auth/login.blade.php ENDPATH**/ ?>