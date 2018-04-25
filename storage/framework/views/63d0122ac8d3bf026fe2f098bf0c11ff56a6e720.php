<?php $__env->startSection('header'); ?>
<link href="<?php echo e(URL::asset('css/lib/sweetalert/sweetalert.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('css/lib/font-awesome/fontawesome-all.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php
$directory = 'Kategori';
?>
<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-primary"><?php echo e($directory); ?></h3> </div>
		<div class="col-md-7 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active"><?php echo e($directory); ?></li>
			</ol>
		</div>
	</div>
	<!-- End Bread crumb -->
	<!-- Container fluid  -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php if(session('message')): ?>
					<div class="alert alert-<?php echo e(session('status')); ?> alert-dismissible fade show text-dark" role="alert">
						<strong >Pesan : </strong> <?php echo e(session('message')); ?>

						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
				
			</div>
		</div>
		<div class="row">
			<?php echo $__env->yieldContent('kategori-content'); ?>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-title">
						Data Nama Kategori
					</div>
					<div class="card-body">
						<table class="table">
							<thead class="thead-default">
								<tr>
									<td>No</td>
									<td>Nama Kategori</td>
									<td width="100">Menu</td>
								</tr>
								<?php
								$no = 0;
								?>
								<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($no = $no + 1); ?></td>
									<td><?php echo e($data->nama_kategori); ?></td>
									<td>
										<?php if($data->as_menu): ?>
										<a href="<?php echo e(url('db_menu/change')); ?>/<?php echo e($data->id); ?>" class="btn btn-danger">Sembunyikan sebagai menu</a>
										<?php else: ?>
										<a href="<?php echo e(url('db_menu/change')); ?>/<?php echo e($data->id); ?>" class="btn btn-primary">Tampilkan sebagai menu</a>
										<?php endif; ?>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>