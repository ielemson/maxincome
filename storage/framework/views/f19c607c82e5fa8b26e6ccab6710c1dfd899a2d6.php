<!DOCTYPE html>
<html>
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maincome - Register</title>
    <meta name="description" content="maincome investment register page">
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
                  
                  <form method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                            <input id="register-name" type="text" name="Fname" required  class="input-material <?php $__errorArgs = ['Fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <label for="register-name" class="label-material">First Name</label>

                            <?php $__errorArgs = ['Fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert alert-danger">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <input id="reg-lname" type="text" name="Lname" required  class="input-material <?php $__errorArgs = ['Lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <label for="reg-lname" class="label-material">Last Name</label>

                            <?php $__errorArgs = ['Lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert alert-danger">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                

                    <div class="form-group">
                            <input id="reg-username" type="text" name="username" required  class="input-material <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <label for="reg-username" class="label-material">Username</label>
                            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert alert-danger">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <input id="register-email" type="text" name="email" required  class="input-material <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <label for="register-email" class="label-material">Email</label>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert alert-danger">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    

                    

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input id="register-password" type="password" name="password" required  class="input-material <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <label for="register-password" class="label-material">Password</label>

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert alert-danger">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-sm-12">
                            <input id="password_confirmation" type="password" name="password_confirmation" required  class="input-material <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <label for="password_confirmation" class="label-material">Confirm Password</label>

                            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert alert-danger">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
    

                    <div class="form-group">
                        <?php $usn = App\User::where('username', Session::get('ref'))->get(); ?>

                                <div class="row">
                                    <div class="">
                                        <input id="ref" type="hidden" class="form-control form-control-lg" name="ref"
                                            value="<?php if(count($usn)> 0): ?> <?php echo e(Session::get('ref')); ?> <?php endif; ?>" >
                                    </div>
                                </div>

                                <div class="">
                                    <div class="" align="center">
                                        <?php if($settings->user_reg == 1): ?>
                                            <div class="btn-group">
                                                <button class="btn btn-primary submit-btn ">Register</button>
                                                &nbsp;
                                                <a class="btn btn-warning submit-btn " href="/">Go back</a>
                                            </div>
                                        <?php else: ?>
                                            <div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i>
                                                Registration disabled by admin.</div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <br/>
                                <small>Already have an account? </small><a href="<?php echo e(route('login')); ?>" class="signup">Login</a>
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

</html><?php /**PATH C:\Users\ielemson\Desktop\Apps\Laravel\maxincome\resources\views/auth/register.blade.php ENDPATH**/ ?>