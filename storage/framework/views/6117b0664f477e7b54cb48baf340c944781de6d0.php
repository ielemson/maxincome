<?php if($message = Session::get('success')): ?>
<div class="alert alert-success" role="alert">
 <?php echo e($message); ?>

  </div>
<?php endif; ?>

<?php if($message = Session::get('error')): ?>
<div class="alert alert-danger" role="alert">
  <?php echo e($message); ?>

  </div>
<?php endif; ?>

<?php if($message = Session::get('warning')): ?>
<div class="alert alert-warning" role="alert">
    <?php echo e($message); ?>

    </div>
<?php endif; ?>

<?php if($message = Session::get('info')): ?>
<div class="alert alert-info" role="alert">
    <?php echo e($message); ?>

    </div>
<?php endif; ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger" role="alert">
    <?php echo e('An error has occured, please contact support if it persists!'); ?>

    </div>
<?php endif; ?>

<?php /**PATH C:\Users\ielemson\Desktop\Apps\Laravel\maxincome\resources\views/partials/_alerts.blade.php ENDPATH**/ ?>