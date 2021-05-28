<div class="col-md-12">                            
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">
                <div class="card-title"><?php echo e(__('Complete Verification')); ?></div>
                <div class="card-tools">                                            
                </div>
            </div>
        </div>
        <div class="card-body pb-0 mb-5">
            <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                <p class="text-danger">
                   <strong> Please note: Make to upload clear copies of the requested documents.</strong>
                </p>
              <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('verify_user_id')); ?>">
                  <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo e(__('Valid ID Card')); ?></label>
                            <input id="id_card" type="file" class="form-control <?php $__errorArgs = ['id_card'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="id_card" value="<?php echo e(old('id_card')); ?>" required autocomplete="id_card" autofocus placeholder="E-Mail Address">

                            <?php $__errorArgs = ['id_card'];
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
                    </div>  
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo e(__('Proof Of Address')); ?></label>
                            <input id="adr" type="file" value="addres_proof" class="form-control" name="addres_proof" required>
                            <input id="addres_proof" type="file" class="form-control  <?php $__errorArgs = ['addres_proof'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="addres_proof" value="<?php echo e(old('addres_proof')); ?>" required autocomplete="addres_proof" autofocus placeholder="E-Mail Address">

                            <?php $__errorArgs = ['addres_proof'];
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
                    </div>                               
                    
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo e(__('Passport Picture')); ?></label>
                            <div class="input-group">                                                       
                                <input id="passport" type="file" class="form-control <?php $__errorArgs = ['passport'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="passport" value="<?php echo e(old('passport')); ?>" required autocomplete="passport" autofocus placeholder="E-Mail Address">

                                <?php $__errorArgs = ['passport'];
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
                            
                        </div>
                    </div>     
                                             
                    
                </div>   
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>     
                                             
                    
                </div>   

              </form>
                
            </div>                                
        </div>
    </div>
  </div><?php /**PATH C:\Users\ielemson\Desktop\Apps\Laravel\maxincome\resources\views/user/authenticate/authform.blade.php ENDPATH**/ ?>