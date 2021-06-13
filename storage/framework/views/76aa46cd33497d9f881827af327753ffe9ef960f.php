<section class="pricing-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">Our Package Plans</div>
            <h2>A Monthly Package <br> Price Plans</h2>
        </div>
        
        <div class="row clearfix">
            <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Price Block -->
            <div class="price-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <h3><?php echo e($package->package_name); ?></h3>
                    <div class="text">Designed for monthly investment plans</div>
                    <div class="price"><?php echo e($package->currency); ?> <?php echo e($package->max); ?></div>
                    <ul class="price-list">
                        <li><?php echo e($package->period); ?> day period</li>
                        <li><?php echo e($package->ref_bonus); ?> Referall bonus</li>
                        <li>Daily ROI <?php echo e($package->daily_interest); ?></li>
                        
                    </ul>
                    <div class="btn-box">
                        <a href="<?php echo e(route('login')); ?>" class="theme-btn btn-style-one"><span class="txt">Get Started</span></a>
                    </div>
                </div>
            </div>
            
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
        
    </div>
</section><?php /**PATH C:\Users\ielemson\Desktop\Apps\Laravel\maxincome\resources\views/landing-partials/packages.blade.php ENDPATH**/ ?>