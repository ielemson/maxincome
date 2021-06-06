<?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
            <!-- Pro Tier -->
            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center"><?php echo e($package->package_name); ?></h5>
                  <h6 class="card-price text-center"><?php echo e($package->currency); ?> <?php echo e($package->max); ?><span class="period">/Price</span></h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span><strong><?php echo e($package->period); ?> days period </strong></li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span><?php echo e($package->days_interval); ?> days payment interval</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Referral bonus <?php echo e($package->ref_bonus); ?></li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Daily ROI <?php echo e($package->daily_interest); ?>%</li>
                  </ul>
                  <a href="<?php echo e(route('login')); ?>" class="btn btn-block btn-primary ">Click Here To Purchase Package</a>
                </div>
              </div>
            </div>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php /**PATH C:\Users\ielemson\Desktop\Apps\Laravel\maxincome\resources\views/partials/packages.blade.php ENDPATH**/ ?>