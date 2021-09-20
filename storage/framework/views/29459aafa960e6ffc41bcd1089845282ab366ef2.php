<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">
	<meta name="viewport" content="width=device-width,  initial-scale=1">

	<title>SiswakuApp</title>
	
	<link href="<?php echo e(asset('bootstrap_3_3_6/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

</head>
<body>
	<div class="container">
		<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->yieldContent('main'); ?>
	</div>
		<?php echo $__env->yieldContent('footer'); ?>
 <script src="<?php echo e(asset('js/jquery_2_2_1.min.js')); ?>"></script>
 <script src="<?php echo e(asset('bootstrap_3_3_6/js/bootstrap.min.js')); ?>"></script>
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\siswaku\resources\views/template.blade.php ENDPATH**/ ?>