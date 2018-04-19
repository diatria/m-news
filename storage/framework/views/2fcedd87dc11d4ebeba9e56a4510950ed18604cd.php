<?php $__env->startSection('content'); ?>
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
			<a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $slider->id_kategori)->first()->nama_kategori); ?>/<?php echo e($slider->url); ?>" class="item active">
				<?php else: ?>
				<a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $slider->id_kategori)->first()->nama_kategori); ?>/<?php echo e($slider->url); ?>" class="item">
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
		<div class="row">
			<?php $__currentLoopData = $berita_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3">
				<div class="thumbnail sm">
					<a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $slider->id_kategori)->first()->nama_kategori); ?>/<?php echo e($slider->url); ?>" target="_blank">
						<img src="<?php echo e($slider->source); ?>" alt="Lights" style="width:100%">
						<div class="caption">
							<p><?php echo e(str_limit($slider->judul, 50)); ?></p>
						</div>
					</a>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<!-- INI Iklan 6
		==========================================================================================================-->
		<div class="row iklan6">
			<img src="<?php echo e($iklan['iklan6']['gambar_iklan']); ?>" width="95%" height="60px"/>
		</div>
		<hr />
		<!-- INI berita Infografis
		==========================================================================================================-->
		<h4 style="text-align: left;"><a><u>INFO GRAFIS</u></a></h4>
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="/w3images/lights.jpg" target="_blank">
						<img src="slide/gbr1.png" alt="Lights" style="width:100%">
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="/w3images/nature.jpg" target="_blank">
						<img src="slide/gbr2.png" alt="Nature" style="width:100%">
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="/w3images/fjords.jpg" target="_blank">
						<img src="slide/gbr3.png" alt="Fjords" style="width:100%">
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="/w3images/fjords.jpg" target="_blank">
						<img src="slide/gbr3.png" alt="Fjords" style="width:100%">
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="/w3images/lights.jpg" target="_blank">
						<img src="slide/gbr2.png" alt="Lights" style="width:100%">
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="/w3images/nature.jpg" target="_blank">
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- INI iklan7
		==========================================================================================================-->
		<div class="row iklan7">
			<img src="<?php echo e($iklan['iklan7']['gambar_iklan']); ?>" width="95%" height="60px">
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
				<td class="bt <?php echo e($news->source_type); ?>"><a href="#"><h2><?php echo e($news->judul); ?></h2></a></td>
			</tr>
		</table>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<hr>
		<!-- INI SLIDE IMAGE
		==========================================================================================================-->
		<h4 style="text-align: left;"><a><u>IMAGES</u></a></h4>
		<div class="w3-content" style="max-width:800px">
			<img class="mySlides" src="slide/gbr1.png" style="width:100%">
			<img class="mySlides" src="slide/gbr2.png" style="width:100%">
			<img class="mySlides" src="slide/gbr3.png" style="width:100%">
		</div>
		<div class="w3-center">
			<button class="w3-button demo" onclick="currentDiv(1)">1</button>
			<button class="w3-button demo" onclick="currentDiv(2)">2</button>
			<button class="w3-button demo" onclick="currentDiv(3)">3</button>
		</div>
		<script>
		var slideIndex = 1;
		showDivs(slideIndex);
		function plusDivs(n) {
		showDivs(slideIndex += n);
		}
		function currentDiv(n) {
		showDivs(slideIndex = n);
		}
		function showDivs(n) {
		var i;
		var x = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("demo");
		if (n > x.length) {slideIndex = 1}
		if (n < 1) {slideIndex = x.length}
		for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" w3-red", "");
		}
		x[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " w3-red";
		}
		</script>
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
				<td class="bt <?php echo e($news->source_type); ?>"><a href="#"><h2><?php echo e($news->judul); ?></h2></a></td>
			</tr>
		</table>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<!--// 1.2.2 Bagian Sidebar
	==================================================================================================== -->
	<div class="col-sm-3">
		<img src="<?php echo e($iklan['iklan4']['gambar_iklan']); ?>" alt="Chicago" style="width:100%;">
		<img src="<?php echo e($iklan['iklan5']['gambar_iklan']); ?>" alt="Chicago" style="width:100%;">
	</div>
	<div class="col-md-3">
		<?php $__currentLoopData = $berita_popular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="thumbnail md">
			<a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $popular->id_kategori)->first()->nama_kategori); ?>/<?php echo e($popular->url); ?>" target="_blank">
				<?php if($popular->source_type == 'gambar'): ?>
					<img src="<?php echo e($popular->source); ?>" alt="Los Angeles" style="width:100%; max-height: ">
				<?php elseif($popular->source_type == 'video'): ?>
					<object data="<?php echo e($popular->source); ?>" style="width: 100%;">
					</object>
				<?php elseif($popular->source_type == 'embed'): ?>
					<div class="embed unset">
						<?php echo $popular->source; ?>

					</div>
				<?php endif; ?>
				<div class="caption">
					<p><?php echo e(str_limit($popular->judul, 70)); ?></p>
				</div>
			</a>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontpage.frontpage_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>