<?php $__env->startSection('main'); ?>
	<div id="siswa">
		<h2>Edit siswa</h2>

		<?php echo Form::model($siswa, ['method' => 'PATCH', 'action' => ['SiswaController@update', $siswa->id]]); ?>

			<?php echo $__env->make('siswa.form', ['submitButtonText' => 'Update'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo Form::close(); ?>

	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
	<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\siswaku\resources\views/siswa/edit.blade.php ENDPATH**/ ?>