<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Maxincome - Register</title>
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
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                <div class="row w-100 mx-auto">
                    <div class="col-lg-6 mx-auto">
                        <div class="auto-form-wrapper">
                            <?php echo $__env->make('partials._alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <form method="POST" action="<?php echo e(route('register')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="Fname"
                                            class=" col-form-label text-md-right"><?php echo e(__('First Name')); ?></label>
                                        <input id="Fname" type="text"
                                            class="form-control form-control-lg <?php $__errorArgs = ['Fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> regTxtBox"
                                            name="Fname" value="<?php echo e(old('Fname')); ?>" required autocomplete="Fname"
                                            autofocus placeholder="First name">

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
                                    <div class="col-sm-6">
                                        <label for="Lname"
                                            class=" col-form-label text-md-right"><?php echo e(__('Last Name')); ?></label>
                                        <input id="Lname" type="text"
                                            class="form-control form-control-lg <?php $__errorArgs = ['Lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> regTxtBox"
                                            name="Lname" value="<?php echo e(old('Lname')); ?>" required autocomplete="Lname"
                                            autofocus placeholder="Last name">

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
                                </div>


                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <label for="email"
                                            class=" col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>
                                        <input id="email" type="email"
                                            class="form-control form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> regTxtBox"
                                            name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email"
                                            placeholder="Email">

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
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <label for="username"
                                            class=" col-form-label text-md-right"><?php echo e(__('Username')); ?></label>
                                        <input id="username" type="username"
                                            class="form-control form-control-lg <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> regTxtBox"
                                            name="username" value="<?php echo e(old('username')); ?>" required
                                            autocomplete="username" placeholder="Username">

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
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="password"
                                            class=" col-form-label text-md-right"><?php echo e(__('Password')); ?></label>
                                        <input id="password" type="password"
                                            class="form-control form-control-lg <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> regTxtBox"
                                            name="password" required autocomplete="new-password" placeholder="Password">

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
                                    <div class="col-sm-6">
                                        <label for="password-confirm"
                                            class=" col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>
                                        <input id="password-confirm" type="password"
                                            class="form-control form-control-lg" name="password_confirmation" required
                                            autocomplete="new-password" placeholder="Confirm password">
                                    </div>

                                </div>


                                <?php $usn = App\User::where('username', Session::get('ref'))->get(); ?>

                                <div class="row">
                                    <div class="">
                                        <input id="ref" type="hidden" class="form-control form-control-lg" name="ref"
                                            value="<?php if(count($usn)> 0): ?> <?php echo e(Session::get('ref')); ?> <?php endif; ?>" >
                                    </div>
                                </div>

                                <div class="">
                                    <div class="" align="center">
                                        <br><br>
                                        <?php if($settings->user_reg == 1): ?>
                                            <div class="btn-group">
                                                <button class="btn btn-primary submit-btn ">Register</button>
                                                &nbsp;
                                                <a class="btn btn-info submit-btn " href="/">Go back</a>
                                            </div>
                                        <?php else: ?>
                                            <div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i>
                                                Registration disabled by admin.</div>
                                        <?php endif; ?>
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
                        <p class="footer-text text-center">copyright © <?php echo e(date('Y')); ?> MaxIncome Investment. All
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
    <script src="<?php echo e(asset('login_css/vendors/js/vendor.bundle.base.js')); ?>"></script>
    <script src="<?php echo e(asset('login_css/vendors/js/vendor.bundle.addons.js')); ?>"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="<?php echo e(asset('login_css/js/template.js')); ?>"></script>
    <!-- endinject -->
</body>



</html>
<?php /**PATH C:\Users\ielemson\Desktop\Apps\Laravel\maxincome\resources\views/auth/register.blade.php ENDPATH**/ ?>