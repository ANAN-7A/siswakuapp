<?php $__env->startSection('main'); ?>
	<div id="homepage">
		<h2>Homepage</h2>
		<p>Selamat belajar Laravel!</p>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
	<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Siswaku\resources\views/pages/homepage.blade.php ENDPATH**/ ?>