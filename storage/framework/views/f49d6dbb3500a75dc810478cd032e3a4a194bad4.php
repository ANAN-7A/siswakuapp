<?php $__env->startSection('main'); ?>
<div id="siswa">
	<h2>Siswa</h2>

	<?php if(!empty($siswa_list)): ?>
		<table class="table">
			<thead>
				<tr>
					<th>NISN</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Tgl Lahir</th>
					<th>JK</th>
					<th>Telepon</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($siswa_list as $siswa): ?>
					<tr>
						<td><?php echo e($siswa->nisn); ?></td>
						<td><?php echo e($siswa->nama_siswa); ?></td>
						<td><?php echo e($siswa->kelas->nama_kelas); ?></td>
						<td><?php echo e($siswa->tanggal_lahir->format('d-m-Y')); ?></td>
						<td><?php echo e($siswa->jenis_kelamin); ?></td>
						<td><?php echo e(!empty($siswa->telepon->nomor_telepon) ? $siswa->telepon->nomor_telepon : '-'); ?></td>
						<td>
							<div class="box-button">
								<?php echo e(link_to('siswa/' . $siswa->id, 'detail', ['class' => 'btn btn-success btn-sm'])); ?>

							</div>
						</td>
						<td>
							<div class="box-button">
								<?php echo e(link_to('siswa/' . $siswa->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm'])); ?>

							</div>
						</td>
						<td>
							<div class="box-button">
								<?php echo Form::open(['method' => 'DELETE', 'action' => ['SiswaController@destroy', $siswa->id]]); ?>

								<?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']); ?>

								<?php echo Form::close(); ?>

							</div>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	<?php else: ?>
		<p>Tidak ada data siswa</p>
	<?php endif; ?>

	<div class="table-nav">
		<div class="jumlah-data">
			<strong>Jumlah Siswa : <?php echo e($jumlah_siswa); ?></strong>
		</div>
		<div class="paging">
			<?php echo e($siswa_list->links()); ?>

		</div>	
	</div>

	<div class="tombol-nav">
			<a href="siswa/create" class="btn btn-primary">Tambah Siswa</a>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
	<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Siswaku\resources\views/siswa/index.blade.php ENDPATH**/ ?>