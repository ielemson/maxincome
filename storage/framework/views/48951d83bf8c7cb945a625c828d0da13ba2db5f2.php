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
  <link rel="shortcut icon" href="<?php echo e(asset('login_css/images/favicon.png')); ?>" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="content-wrapper auth p-0 theme-two">
            <div class="row d-flex align-items-stretch">
              <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
                <div class="slide-content bg-1">
                </div>
              </div>
              <div class="col-12 col-md-8 h-100 bg-white">
                <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
                  <div class="nav-get-started">
                    <p><?php echo e($settings->site_title); ?></p>
                    <a class="btn get-started-btn" href="<?php echo e(url('/')); ?>">Home</a>
                  </div>
                  <form method="POST" action="/dhadmin/login">                        
                    <?php echo csrf_field(); ?>
                        <?php echo $__env->make('partials._alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                   
                    <h3 class="mr-auto"><?php echo e(__('Admin Login')); ?></h3>
                    <p class="mb-5 mr-auto"><?php echo e(__('Login to manage website')); ?></p>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="icon-user"></i></span>
                        </div>
                        <input id="email" type="email" class="form-control form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Email">

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback text-danger" role="alert" >
                                <?php echo e($message); ?>

                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="icon-lock"></i></span>
                        </div>
                        <input id="password" type="password" class="form-control form-control-lg <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="Password">

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback text-danger" role="alert" >
                                <?php echo e($message); ?>

                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary submit-btn">SIGN IN</button>
                    </div>
                    <div class="wrapper mt-5 text-gray">
                      <p class="footer-text">Copyright © <?php echo e(Date('Y')); ?> Maxincome. All rights reserved.</p>
                      <ul class="auth-footer text-gray">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                      </ul>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo e(asset('login_css/vendors/js/vendor.bundle.base.js')); ?>"></script>
  <script src="<?php echo e(asset('login_css/vendors/js/vendor.bundle.addons.js')); ?>"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo e(asset('login_css/js/template.js')); ?>"></script>
  <!-- endinject -->
</body>



</html>
<?php /**PATH C:\Users\ielemson\Desktop\Apps\Laravel\maxincome\resources\views/admin/login.blade.php ENDPATH**/ ?>