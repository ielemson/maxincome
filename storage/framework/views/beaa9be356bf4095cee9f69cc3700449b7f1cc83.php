<?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-3 col-md-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
  <div class="icon-box">
    <div class="icon"><i class="bx bxl-dribbble"></i></div>
    <h4><a href=""><?php echo e($package->package_name); ?></a></h4>
    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
    <a href="" class="btn btn-primary mx-auto">Purchase Package</a>
  </div>
</div>

      
     
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php /**PATH C:\Users\ielemson\Desktop\Apps\Laravel\maxincome\resources\views/partials/packages.blade.php ENDPATH**/ ?>