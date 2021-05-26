<div class="panel-header " style="background-color: <?php echo e($settings->header_color); ?>">
	<div class="page-inner py-5" style="background-color: <?php echo e($settings->header_color); ?>">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">
					<?php echo e($breadcome); ?>

				</h2>				
			</div>
			<div class="ml-md-auto py-2 py-md-0">
				<a href="/<?php echo e($user->username); ?>/investments" class="btn btn-white btn-border btn-round mr-2" style="<?php echo e($user->verification->status == true ? '' : ' pointer-events: none;'); ?>">Investments</a>
				<a href="/<?php echo e($user->username); ?>/wallet" class="btn btn-secondary btn-round" style="<?php echo e($user->verification->status == true ? '' : ' pointer-events: none;'); ?>">Deposit</a>
			</div>
		</div>
	</div>
</div<?php /**PATH C:\Users\ielemson\Desktop\Apps\Laravel\maxincome\resources\views/user/atlantis/main_bar.blade.php ENDPATH**/ ?>