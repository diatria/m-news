<?php $__env->startSection('berita-content'); ?>
<div class="col-md-12">
	<div class="card">
		<div class="card-title">
			<h4>Edit Berita</h4>
			<hr>
		</div>
		<div class="card-body">
			<div class="basic-form">
				<form action="<?php echo e(url('db_berita/change')); ?>/<?php echo e($change->id); ?>" method="post" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Judul</label>
								<input type="text" name="judul" value="<?php echo e($change->judul); ?>" class="form-control input-flat" placeholder="Judul" required="">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Konten Berita</label>
								<textarea class="text-editor" name="konten"><?php echo e($change->konten); ?></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Kategori</label>
								<select name="kategori" class="form-control input-flat">
									<option value="<?php echo e($change->id_kategori); ?>" selected="">Pilih kategori</option>
									<?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori_r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($kategori_r->id); ?>"><?php echo e($kategori_r->nama_kategori); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Upload</label>
								<p class="text-muted m-b-15 f-s-12">Tipe yang didukung hanya <code>gambar atau video</code> pililhlah salah satu metode yang akan anda gunakan <code>upload atau menggunakan link</code></p>
								<div class="row">
									<div class="col-md-6">
										<div class="custom-file input-flat">
											<input type="file" name="source" class="form-control input-flat">
										</div>
									</div>
									<div class="col-md-6">
										<div class="custom-file input-flat">
											<input type="text" name="source_link" class="form-control input-flat" placeholder="https://example.com">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
										<textarea name="source_embed" class="input-flat" id="" style="width: 100%;" rows="5" placeholder="Embed Code"></textarea>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Tipe Upload</label>
								<select name="s_type" class="form-control input-flat" required="">
									<option value="gambar">Gambar</option>
									<option value="video">video</option>
									<option value="embed">embed code</option>
								</select>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if($change->source_type == 'gambar'): ?>
			<img src="<?php echo e($change->source); ?>" alt="">
		<?php elseif($change->source_type == 'video'): ?>
			<object width="420" height="315" data="<?php echo e($change->source); ?>">
			</object>
		<?php elseif($change->source_type == 'embed'): ?>
			<?php echo $change->source; ?>

		<?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.berita.berita_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>