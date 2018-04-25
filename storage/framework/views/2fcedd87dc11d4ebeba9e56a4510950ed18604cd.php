<?php $__env->startSection('content'); ?>
<?php
use App\Helper\Time;
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
<div class="col-sm-9">
	<!-- INI SLIDE IMAGE
	==========================================================================================================-->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<!-- Wrapper for slides -->
		<div class="carousel-inner" style="height: 350px">
			<?php
			$no_b = 0;
			?>
			<?php $__currentLoopData = $berita_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
			<?php if($no_b == 0): ?>
			<a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $slider->id_kategori)->first()->nama_kategori); ?>/<?php echo e($slider->url); ?>" class="item active" target="_blank">
				<?php else: ?>
				<a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $slider->id_kategori)->first()->nama_kategori); ?>/<?php echo e($slider->url); ?>" class="item" target="_blank">
					<?php endif; ?>
					<?php if($slider->source_type == 'gambar'): ?>
					<img src="<?php echo e($slider->source); ?>" alt="Los Angeles" style="width:100%; height: 350px;">
					<?php elseif($slider->source_type == 'video'): ?>
					<object data="<?php echo e($slider->source); ?>" style="min-width: 600px;width: 100%;min-height: 350px;">
					</object>
					<?php elseif($slider->source_type == 'embed'): ?>
					<div class="embed">
						<?php echo $slider->source; ?>

					</div>
					<?php endif; ?>
					<div class="carousel-caption mm-set-carousel">
						<h2><?php echo e($slider->judul); ?></h2>
					</div>
				</a>
				<?php
				$no_b = $no_b + 1
				?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
		<br>
		<!-- INI LIST 4 IMAGE
		==========================================================================================================-->
		<div class="row remove-margin-grid">
			<?php $__currentLoopData = $berita_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3 remove-padding-grid limg">
				<a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $slider->id_kategori)->first()->nama_kategori); ?>/<?php echo e($slider->url); ?>" target="_blank">
					<img src="<?php echo e($slider->source); ?>" alt="Lights" style="width:100%; height: 125px;">
					<div class="caption">
						<p><?php echo e(str_limit($slider->judul, 50)); ?></p>
					</div>
				</a>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<!-- INI Iklan 6
		==========================================================================================================-->
		<div class="row iklan6">
			<div class="col-md-12">
				<img src="<?php echo e($iklan['iklan6']['gambar_iklan']); ?>" width="100%" height="60px"/>
			</div>
		</div>
		<hr />
		<!-- INI berita Infografis
		==========================================================================================================-->
		<h4 style="text-align: left;" class="berita-terkini-header"><span class="berita-terkini">INFOGRAFIS</span></h4>
		<div class="row">
			<?php if($infografis_big): ?>
			<div class="col-md-6">
				<a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $infografis_big->id_kategori)->first()->nama_kategori); ?>/<?php echo e($infografis_big->url); ?>" target="_blank">
					<img src="<?php echo e($infografis_big->source); ?>" alt="Lights" style="width:100%">
					<span class="infografis-kategori">
						Infografis
					</span>
					<div class="infografis-caption">
						<p><?php echo e($infografis_big->judul); ?></p>
					</div>
				</a>
			</div>
			<?php endif; ?>
			<div class="col-md-6 no-gutters remove-padding-grid">
				<?php $__currentLoopData = $infografis_small; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $infografis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $infografis_big->id_kategori)->first()->nama_kategori); ?>/<?php echo e($infografis_big->url); ?>" class="row list-small no-gutters" target="_blank">
						<div class="col-md-5 remove-padding-grid">
							<img src="<?php echo e($infografis->source); ?>" alt="">
						</div>
						<div class="col-md-6 remove-padding-grid">
							<div class="list-small-kategori">Infografis</div>
							<div class="list-small-title"><?php echo e($infografis->judul); ?></div>
						</div>
					</a>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>				
			</div>
		</div>
		<!-- INI iklan7
		==========================================================================================================-->
		<div class="row iklan7">
			<div class="col-md-12">
				<img src="<?php echo e($iklan['iklan7']['gambar_iklan']); ?>" width="100%" height="60px">
			</div>
		</div>
		<hr>
		<!-- INI berita Berita Terkini
		==========================================================================================================-->
		<h4 style="text-align: left;" class="berita-terkini-header"><span class="berita-terkini">BERITA TERKINI</span></h4>
		<?php $__currentLoopData = $berita_terbaru_first; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<table style="text-align: left; display: table; border-collapse: separate;" class="table-bt">
			<tr>
				<?php if($news->source_type == 'gambar'): ?>
				<td class="bt" style="clear: both; padding: 0; margin: 0;">
					<img src="<?php echo e($news->source); ?>" alt="Los Angeles" style="width:100%; height: 350px;">
				</td>
				<?php elseif($news->source_type == 'video'): ?>
				<td class="embed-bt">
					<div class="embed artikel">
						<object data="<?php echo e($news->source); ?>" style="min-width: 500px;width: 100%;min-height: 270px;">
						</object>
					</div>
				</td>
				<?php elseif($news->source_type == 'embed'): ?>
				<td class="embed-bt">
					<div class="embed artikel">
						<?php echo $news->source; ?>

					</div>
				</td>
				<?php endif; ?>
				<td class="bt <?php echo e($news->source_type); ?>">
					<a href="<?php echo e(url('view/'.App\Model\Kategori::detail($news->id_kategori)->nama_kategori.'/'.$news->url)); ?>" target="_blank">
						<h2>
							<?php echo e($news->judul); ?>

						</h2>
					</a>
					<div class="bt-info">
						<div class="bt-kategori"><?php echo e(App\Model\Kategori::detail($news->id_kategori)->nama_kategori); ?></div>
						<div class="bt-tanggal"><?php echo e(Time::IndonesiaMonth($news->time)); ?></div>
					</div>
				</td>
			</tr>
		</table>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<hr>
		<!-- INI SLIDE IMAGE
		==========================================================================================================-->
		<h4 style="text-align: left;" class="berita-terkini-header"><span class="berita-terkini">FOTO</span></h4>
		<div class="image-content">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators image-controll-small-ci" style="z-index: 0;">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox" style="height: 540px">
					<?php
					$no_c = 0;
					?>

					<?php $__currentLoopData = $foto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($no_c == 0): ?>
					<a href="<?php echo e(url('view/'.App\Model\Kategori::detail($image->id_kategori)->nama_kategori.'/'.$image->url)); ?>" class="item active" target="_blank">
					<?php else: ?>
					<a href="<?php echo e(url('view/'.App\Model\Kategori::detail($image->id_kategori)->nama_kategori.'/'.$image->url)); ?>" class="item" target="_blank">
					<?php endif; ?>
						<img src="<?php echo e($image->source); ?>" alt="" class="image-content-small">
						<div class="carousel-caption image-content-caption">
							<?php echo e(str_limit($image->judul, 50)); ?>

						</div>
					</a>
					<?php
					$no_c = $no_c + 1
					?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		</div>
		<hr>
		<!-- INI berita Berita Terkini
		==========================================================================================================-->
		<h4 style="text-align: left;" class="berita-terkini-header"><span class="berita-terkini">BERITA TERKINI</span></h4>

		<?php $__currentLoopData = $berita_terbaru_second; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<table style="text-align: left; display: table; border-collapse: separate;" class="table-bt">
			<tr>
				<?php if($news->source_type == 'gambar'): ?>
				<td class="bt" style="clear: both; padding: 0; margin: 0;">
					<img src="<?php echo e($news->source); ?>" alt="Los Angeles" style="width:100%; height: 350px;">
				</td>
				<?php elseif($news->source_type == 'video'): ?>
				<td class="embed-bt">
					<div class="embed artikel">
						<object data="<?php echo e($news->source); ?>" style="min-width: 500px;width: 100%;min-height: 270px;">
						</object>
					</div>
				</td>
				<?php elseif($news->source_type == 'embed'): ?>
				<td class="embed-bt">
					<div class="embed artikel">
						<?php echo $news->source; ?>

					</div>
				</td>
				<?php endif; ?>
				<td class="bt <?php echo e($news->source_type); ?>">
					<a href="<?php echo e(url('view/'.App\Model\Kategori::detail($news->id_kategori)->nama_kategori.'/'.$news->url)); ?>" target="_blank">
						<h2>
							<?php echo e($news->judul); ?>

						</h2>
						<div class="bt-info">
							<div class="bt-kategori"><?php echo e(App\Model\Kategori::detail($news->id_kategori)->nama_kategori); ?></div>
							<div class="bt-tanggal"><?php echo e(Time::IndonesiaMonth($news->time)); ?></div>
						</div>
					</a>
					
				</td>
			</tr>
		</table>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php if($berita_terbaru_first->count() > 2): ?>
		<div class="btn-loadmore">
			<button class="btn btn-primary btn-block">Muat berita lebih banyak</button>
		</div>
		<?php endif; ?>
	</div>
	<!--// 1.2.2 Bagian Sidebar
	==================================================================================================== -->
	<div class="col-sm-3 remove-padding-grid">
		<img src="<?php echo e($iklan['iklan4']['gambar_iklan']); ?>" alt="Chicago" style="width:100%;">
		<img src="<?php echo e($iklan['iklan5']['gambar_iklan']); ?>" alt="Chicago" style="width:100%;">
	</div>
	<div class="col-sm-3 remove-padding-grid">
		<div class="icon-social">
			<div class="list-icon">
				<i class="fab fa-facebook-f"></i>
			</div>
			<div class="list-icon">
				<i class="fab fa-twitter"></i>
			</div>
			<div class="list-icon">
				<i class="fab fa-google-plus-g"></i>
			</div>
			<div class="list-icon">
				<i class="fab fa-instagram"></i>
			</div>
		</div>
	</div>
	<div class="col-md-3 remove-padding-grid">
		<h4 class="sidebar-tv">
			Mamuju TV
		</h4>
		<?php $__currentLoopData = $mamujutv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mamujutv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $mamujutv->id_kategori)->first()->nama_kategori); ?>/<?php echo e($mamujutv->url); ?>" class="mamujutv" target="_blank">
				<?php if($mamujutv->source_type == 'gambar'): ?>
					<img src="<?php echo e($mamujutv->source); ?>" alt="Los Angeles" style="width:100%; max-height: ">
				<?php elseif($mamujutv->source_type == 'video'): ?>
					<object data="<?php echo e($mamujutv->source); ?>" style="width: 100%;">
					</object>
				<?php elseif($mamujutv->source_type == 'embed'): ?>
					<div class="embed unset">
						<?php echo $mamujutv->source; ?>

					</div>
				<?php endif; ?>
				<div class="caption">
					<p><?php echo e(str_limit($mamujutv->judul, 70)); ?></p>
				</div>
			</a>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<div class="col-sm-3 remove-padding-grid">
		<img src="<?php echo e($iklan['iklan4']['gambar_iklan']); ?>" alt="Chicago" style="width:100%;">
	</div>
	<?php if($berita_terbaru_first->count() > 2): ?>
	<div class="col-md-3 remove-padding-grid">
		<div class="berita-top">
			<h4 class="title">
				Berita Terpopuler
			</h4>
			<?php $__currentLoopData = $berita_popular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $popular->id_kategori)->first()->nama_kategori); ?>/<?php echo e($popular->url); ?>" class="list-berita-top" target="_blank">
				<div class="kategori"><?php echo e(App\Model\Kategori::where('id', $popular->id_kategori)->first()->nama_kategori); ?></div>
				<div class="judul"><?php echo e($popular->judul); ?></div>
				<div class="preview"><?php echo e(str_limit($slider->judul, 50)); ?></div>
			</a>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>

	</div>
	<div class="col-sm-3 remove-padding-grid">
		<img src="<?php echo e($iklan['iklan4']['gambar_iklan']); ?>" alt="Chicago" style="width:100%;">
	</div>
	<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontpage.frontpage_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>