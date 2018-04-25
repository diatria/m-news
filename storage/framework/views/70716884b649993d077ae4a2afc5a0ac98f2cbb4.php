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
      <?php $__currentLoopData = $data_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
      <?php if($no_b == 0): ?>
      <a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $slider->id_kategori)->first()->nama_kategori); ?>/<?php echo e($slider->url); ?>" class="item active" target="_blank">
        <?php else: ?>
        <a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $slider->id_kategori)->first()->nama_kategori); ?>/<?php echo e($slider->url); ?>" class="item" target="_blank">
          <?php endif; ?>
          <?php if($slider->source_type == 'gambar'): ?>
          <img src="<?php echo e($slider->source); ?>" alt="Los Angeles" style="width:100%; height: 350px;">
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
        <!-- INI Iklan 6
    ==========================================================================================================-->
    <div class="row iklan6">
      <div class="col-md-12">
        <img src="<?php echo e($iklan['iklan6']['gambar_iklan']); ?>" width="100%" height="60px"/>
      </div>
    </div>
    <hr>
    <div class="row">
       <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-6">
        <a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $artikel->id_kategori)->first()->nama_kategori); ?>/<?php echo e($artikel->url); ?>" class="vw-grp" target="_blank">
          <?php if($artikel->source_type == 'gambar'): ?>
          <img src="<?php echo e($artikel->source); ?>" alt="Los Angeles" style="width:100%; height: 350px;">
          <?php elseif($artikel->source_type == 'video'): ?>
          <object artikel="<?php echo e($artikel->source); ?>" style="min-width: 600px;width: 100%;min-height: 350px;">
          </object>
          <?php elseif($artikel->source_type == 'embed'): ?>
          <div class="embed">
            <?php echo $artikel->source; ?>

          </div>
          <?php endif; ?>
          <span class="content">
            <span class="kategori"><?php echo e(App\Model\Kategori::where('id', $artikel->id_kategori)->first()->nama_kategori); ?></span>
            <span class="title"><?php echo e(str_limit($artikel->judul, 110)); ?></span>
          </span>
        </a>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!-- INI iklan7
    ==========================================================================================================-->
    <div class="row iklan7">
      <div class="col-md-12">
        <img src="<?php echo e($iklan['iklan7']['gambar_iklan']); ?>" width="100%" height="60px">
      </div>
    </div>
    <hr>
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
  <div class="col-sm-3 remove-padding-grid">
    <img src="<?php echo e($iklan['iklan4']['gambar_iklan']); ?>" alt="Chicago" style="width:100%;">
  </div>
  <?php if($data->count() > 4): ?>
  <div class="col-md-3 remove-padding-grid">
    <div class="berita-top">
      <h4 class="title">
        Berita Terpopuler
      </h4>
      <?php $__currentLoopData = $berita_popular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a href="<?php echo e(url('view')); ?>/<?php echo e(App\Model\Kategori::where('id', $popular->id_kategori)->first()->nama_kategori); ?>/<?php echo e($popular->url); ?>" class="list-berita-top" target="_blank">
        <div class="kategori"><?php echo e(App\Model\Kategori::where('id', $popular->id_kategori)->first()->nama_kategori); ?></div>
        <div class="judul"><?php echo e($popular->judul); ?></div>
        <div class="preview"><?php echo e(str_limit($popular->judul, 50)); ?></div>
      </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

  </div>
  <?php endif; ?>
  <?php if($data->count() > 10): ?>
  <div class="col-sm-3 remove-padding-grid">
    <img src="<?php echo e($iklan['iklan4']['gambar_iklan']); ?>" alt="Chicago" style="width:100%;">
  </div>
  <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontpage.frontpage_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>