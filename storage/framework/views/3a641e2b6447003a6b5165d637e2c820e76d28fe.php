<?php $__env->startSection('iklan-content'); ?>
<div class="col-md-12">
	<div class="card">
		<div class="card-title">
			<h4>Input Iklan</h4>
			<hr>
		</div>
		<div class="card-body">
			<div class="basic-form">
				<form action="<?php echo e(url('db_iklan/add')); ?>" method="post" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label >Nama Iklan</label>
								<input type="text" name="nama" class="form-control input-flat"onkeyup="gurl()">
							</div>
							<div class="form-group">
								<label >Banner</label>
								<div class="custom-file input-flat">
									<input type="file" name="gambar" class="form-control input-flat">
								</div>
							</div>
							<div class="form-group">
								<label >Kadaluarsa</label>
								<div class="custom-file input-flat">
									<input type="date" name="expired" class="form-control input-flat">
								</div>
							</div>
							<div class="form-group">
								<label >Keterangan</label>
								<div class="custom-file input-flat">
									<input type="text" name="keterangan" class="form-control input-flat">
								</div>
							</div>
							<div class="form-group">
								<label >Penempatan</label>
								<div class="custom-file input-flat">
									<select name="position" class="form-control">
										<option value="iklan1">Iklan 1</option>
										<option value="iklan2">Iklan 2</option>
										<option value="iklan3">Iklan 3</option>
										<option value="iklan4">Iklan 4</option>
										<option value="iklan5">Iklan 5</option>
										<option value="iklan6">Iklan 6</option>
										<option value="iklan7">Iklan 7</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<label for="">Penempatan iklan</label>
							<img src="<?php echo e(asset('images/mnews/ads-position.png')); ?>" style="width: 100%" alt="">
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.iklan.iklan_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>