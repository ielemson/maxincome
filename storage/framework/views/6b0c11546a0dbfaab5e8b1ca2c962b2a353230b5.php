<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo e($settings->site_title); ?> - <?php echo e($settings->site_descr); ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/img/<?php echo e($settings->site_logo); ?>" type="image/x-icon"/>
	<!-- Fonts and icons -->
	<script src="/atlantis/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/atlantis/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="/atlantis/css/bootstrap.min.css">
	<link rel="stylesheet" href="/atlantis/css/atlantis.min.css">
	<link rel="stylesheet" href="/atlantis/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="/atlantis/css/demo.css">
	<!-- jquery lib -->
	<script src="/atlantis/js/core/jquery.3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script>

$(document).ready(function(){
$("#AuthenticateModal").modal({
show:true,
backdrop:'static'
});
});

</script>


</head>

<body>

<?php echo $__env->make('layouts.atlantis.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layouts.atlantis.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html><?php /**PATH C:\Users\ielemson\Desktop\Apps\Laravel\maxincome\resources\views/layouts/atlantis/layout.blade.php ENDPATH**/ ?>