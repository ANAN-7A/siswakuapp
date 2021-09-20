<?php if(isset($siswa)): ?>
    <?php echo Form::hidden('id', $siswa->id); ?>

<?php endif; ?>

<?php if($errors->any()): ?>
<div class="form-group <?php echo e($errors->has('nisn') ? 'has-error' : 'has-success'); ?>">
<?php else: ?>
<div class="form-group">
<?php endif; ?>
     <?php echo Form::label('nisn', 'NISN:', ['class' => 'control-label']); ?>

     <?php echo Form::text('nisn', null, ['class' => 'form-control']); ?>

     <?php if($errors->has('nisn')): ?>
        <span class="help-block"><?php echo e($errors->first('nisn')); ?></span>
     <?php endif; ?>
</div>

<?php if($errors->any()): ?>
<div class="form-group <?php echo e($errors->has('nama_siswa') ? 'has-error' : 'has-success'); ?>">
<?php else: ?>
<div class="form-group">
<?php endif; ?>
     <?php echo Form::label('nama_siswa', 'Nama:', ['class' => 'control-label']); ?>

     <?php echo Form::text('nama_siswa', null, ['class' => 'form-control']); ?>

     <?php if($errors->has('nama_siswa')): ?>
        <span class="help-block"><?php echo e($errors->first('nama_siswa')); ?></span>
     <?php endif; ?>
</div>

<?php if($errors->any()): ?>
<div class="form-group <?php echo e($errors->has('tanggal_lahir') ? 'has-error' : 'has-success'); ?>">
<?php else: ?>
<div class="form-group">
<?php endif; ?>
    <?php echo Form::label('tanggal_lahir', 'Tanggal Lahir:', ['class' => 'control-label']); ?>

    <?php echo Form::date('tanggal_lahir', !empty($siswa) ? $siswa->tanggal_lahir->format('Y-m-d'): null, ['class' => 'form-control', 'id' => 'tanggal_lahir']); ?>

    <?php if($errors->has('tanggal_lahir')): ?>
        <span class="help-block"><?php echo e($errors->first('tanggal_lahir')); ?></span>
    <?php endif; ?>
</div>

<?php if($errors->any()): ?>
    <div class="form-group <?php echo e($errors->has('id_kelas') ? 'has-error' : 'has-success'); ?>">
<?php else: ?>
    <div class="form-group">
<?php endif; ?>
    <?php echo Form::label('id_kelas', 'Kelas:', ['class' => 'control-label']); ?>

    <?php if(count($list_kelas) > 0): ?>
        <?php echo Form::select('id_kelas', $list_kelas, null, ['class' => 'form-control', 'id' => 'id_kelas', 'placeholder' => 'Pilih Kelas']); ?>

     <?php else: ?>
       <p>Tidak ada pilihan kelas, buat dulu ya...!</p>
   <?php endif; ?>
   <?php if($errors->has('id_kelas')): ?>
       <span class="help-block"><?php echo e($errors->first('id_kelas')); ?></span>
   <?php endif; ?>
</div>

<?php if($errors->any()): ?>
<div class="form-group <?php echo e($errors->has('jenis_kelamin') ? 'has-error' : 'has-success'); ?>">
<?php else: ?>
<div class="form-group">
<?php endif; ?>
    <?php echo Form::label('jenis_kelamin', 'Jenis Kelamin:', ['class' => 'control-label']); ?>

    <div class="radio">
        <label><?php echo Form::radio('jenis_kelamin', 'L'); ?> Laki-laki</label>
    </div>
    <div class="radio">
        <label><?php echo Form::radio('jenis_kelamin', 'P'); ?> Perempuan</label>
    </div>
    <?php if($errors->has('jenis_kelamin')): ?>
        <span class="help-block"><?php echo e($errors->first('jenis_kelamin')); ?></span>
     <?php endif; ?>
</div>

<?php if($errors->any()): ?>
<div class="form-group <?php echo e($errors->has('nomor_telepon') ? 'has-error' : 'has-success'); ?>">
<?php else: ?>
<div class="form-group">
<?php endif; ?>
    <?php echo Form::label('nomor_telepon', 'Telepon:', ['class' => 'control-label']); ?>

    <?php echo Form::text('nomor_telepon', null, ['class' => 'form-control']); ?>

    <?php if($errors->has('nomor_telepon')): ?>
    <span class="help-block"><?php echo e($errors->first('nomor_telepon')); ?></span>
    <?php endif; ?>
</div>

<?php if($errors->any()): ?>
<div class="form-group <?php echo e($errors->has('hobi_siswa') ? 'has-error' : 'has-success'); ?>">
<?php else: ?>
<div class="form-group">
<?php endif; ?>
<?php echo Form::label('hobi_siswa', 'Hobi:', ['class' => 'control-label']); ?>

<?php if(count($list_hobi) > 0): ?>
    <?php $__currentLoopData = $list_hobi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="checkbox">
            <label><?php echo Form::checkbox('hobi_siswa[]', $key, null); ?> <?php echo e($value); ?></label>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <p>Tidak ada pilihan hobi, buat dulu ya...!</p>
<?php endif; ?>
</div>

<div class="form-group">
	<?php echo Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']); ?>

</div>
<?php /**PATH C:\xampp\htdocs\siswaku\resources\views/siswa/form.blade.php ENDPATH**/ ?>