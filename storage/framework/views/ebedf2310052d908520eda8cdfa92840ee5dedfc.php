<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo e(asset('css/lib/mnews/mobile-mnews-old.css')); ?>">
	<title>MamujuToday.com</title>
</head>
<body>
	<div class="header">
		<nav class="nav navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#"><img class="nav-logo" src="<?php echo e(asset('images/mnews/LOGO.png')); ?>" ></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="berita-terbaru">
		<a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $m_berita_single->id_kategori)->first()->nama_kategori); ?>/<?php echo e($m_berita_single->url); ?>">
			<div class="berita-terbaru-big">
				<?php if($m_berita_single->source_type == 'gambar'): ?>
				<img src="<?php echo e($m_berita_single->source); ?>" alt="Los Angeles">
				<?php elseif($m_berita_single->source_type == 'video'): ?>
				<object data="<?php echo e($m_berita_single->source); ?>">
				</object>
				<?php elseif($m_berita_single->source_type == 'embed'): ?>
				<div class="embed">
					<?php echo $m_berita_single->source; ?>

				</div>
				<?php endif; ?>
				<div class="informasi">
					<div class="kategori"><?php echo e(App\Model\Kategori::where('id', $m_berita_single->id_kategori)->first()->nama_kategori); ?></div>
					<div class="judul"><?php echo e($m_berita_single->judul); ?></div>
					<div class="deskripsi"><?php echo str_limit($m_berita_single->konten, 100); ?></div>
				</div>
			</div>
		</a>

		<?php $__currentLoopData = $m_berita_terbaru_top; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita_terbaru_top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $berita_terbaru_top->id_kategori)->first()->nama_kategori); ?>/<?php echo e($berita_terbaru_top->url); ?>">
			<div class="list-berita bg-colored">
				<div class="row rm-mp">
					<div class="col-5 rm-mp">
						<?php if($berita_terbaru_top->source_type == 'gambar'): ?>
						<img src="<?php echo e($berita_terbaru_top->source); ?>" alt="Los Angeles">
						<?php elseif($berita_terbaru_top->source_type == 'video'): ?>
						<object data="<?php echo e($berita_terbaru_top->source); ?>">
						</object>
						<?php elseif($berita_terbaru_top->source_type == 'embed'): ?>
						<div class="embed">
							<?php echo $berita_terbaru_top->source; ?>

						</div>
						<?php endif; ?>
					</div>
					<div class="col-7">
						<div class="informasi">
							<div class="kategori"><?php echo e(App\Model\Kategori::where('id', $berita_terbaru_top->id_kategori)->first()->nama_kategori); ?></div>
							<div class="judul"><?php echo e($berita_terbaru_top->judul); ?></div>
						</div>
					</div>
				</div>
			</div>
		</a>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<div class="infografis">
		<div class="judul-block">
			<span>Infografis</span>
		</div>
		<?php $__currentLoopData = $infografis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $infografis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $infografis->id_kategori)->first()->nama_kategori); ?>/<?php echo e($infografis->url); ?>">
			<div class="list-berita">
				<div class="row rm-mp">
					<div class="col-5 rm-mp">
						<?php if($infografis->source_type == 'gambar'): ?>
							<img src="<?php echo e($infografis->source); ?>" alt="Los Angeles">
						<?php elseif($infografis->source_type == 'video'): ?>
							<object data="<?php echo e($infografis->source); ?>">
							</object>
						<?php elseif($infografis->source_type == 'embed'): ?>
							<div class="embed">
								<?php echo $infografis->source; ?>

							</div>
						<?php endif; ?>
					</div>
					<div class="col-7">
						<div class="informasi">
							<div class="kategori"><?php echo e(App\Model\Kategori::where('id', $infografis->id_kategori)->first()->nama_kategori); ?></div>
							<div class="judul colored"><?php echo e($infografis->judul); ?></div>
						</div>
					</div>
				</div>
			</div>
		</a>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<div class="berita">
		<div class="judul-block">
			<span>Berita terbaru</span>
		</div>
		<?php $__currentLoopData = $m_berita_terbaru_after; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita_terbaru_after): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $berita_terbaru_after->id_kategori)->first()->nama_kategori); ?>/<?php echo e($berita_terbaru_after->url); ?>">
			<div class="list-berita">
				<div class="row rm-mp">
					<div class="col-5 rm-mp">
						<?php if($infografis->source_type == 'gambar'): ?>
						<img src="<?php echo e($berita_terbaru_after->source); ?>" alt="Los Angeles">
						<?php elseif($berita_terbaru_after->source_type == 'video'): ?>
						<object data="<?php echo e($berita_terbaru_after->source); ?>">
						</object>
						<?php elseif($berita_terbaru_after->source_type == 'embed'): ?>
						<div class="embed">
							<?php echo $berita_terbaru_after->source; ?>

						</div>
						<?php endif; ?>
					</div>
					<div class="col-7">
						<div class="informasi">
							<div class="kategori"><?php echo e(App\Model\Kategori::where('id', $berita_terbaru_after->id_kategori)->first()->nama_kategori); ?></div>
							<div class="judul colored"><?php echo e($berita_terbaru_after->judul); ?></div>
						</div>
					</div>
				</div>
			</div>
		</a>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</html>