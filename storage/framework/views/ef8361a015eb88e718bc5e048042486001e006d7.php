<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/lib/mnews/mnews-old.css')); ?>">
  </head>
  <body>
    <!-- A. Bagian Header
    ======================================================================================================================================== -->
    <div class="container-fluid header" style="background-color: #004D40;">
      <div class="col-sm-4">
        <center><img class="visible-lg visible-md visible-sm" src="<?php echo e(asset('images/mnews/logo.png')); ?>" ></center>
      </div>
      <div class="col-sm-5">
        <br class="visible-lg visible-md visible-sm">
        <form class="visible-lg visible-md visible-sm">
          <p><center><input type="text" name="search" placeholder="Search.."><button type="submit"><i class="fa fa-search"></i></button></center></p>
        </form>
      </div>
      <div class="col-sm-2">
        <br class="visible-lg visible-md visible-sm">
        <br class="visible-lg visible-md visible-sm">
        <center>
        <p class="visible-lg visible-md visible-sm" style="color: orange;">
          <a href="#" style="color: orange;">Login</a>  |  <a href="#" style="color: orange;">Register</a>
        </p>
        </center>
      </div>
    </div>
    <nav class="navbar navbar-inverse visible-xs" data-spy="affix" data-offset-top="197">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>
        <a class="visible-xs" href="#"><img src="logo.png" width="50%"></a>
        <div class="row">
          <div class="collapse navbar-collapse navbar-center " id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">NEWS
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Politik</a></li>
                    <li><a href="#">Hukum</a></li>
                    <li><a href="#">Ekonomi Bisnis</a></li>
                    <li><a href="#">Kesehatan</a></li>
                    <li><a href="#">Pendidikan</a></li>
                    <li><a href="#">Sosial Budaya</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">RAGAM
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">In Depth</a></li>
                      <li><a href="#">Gaya Hidup</a></li>
                      <li><a href="#">Teknologi</a></li>
                      <li><a href="#">Otomotif</a></li>
                      <li><a href="#">Future</a></li>
                      <li><a href="#">Netizen</a></li>
                    </ul>
                  </li>
                  <li><a href="#">OLAHRAGA</a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">DAERAH
                      <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Mamuju</a></li>
                        <li><a href="#">Mamuju Tengah</a></li>
                        <li><a href="#">Mamuju Utara</a></li>
                        <li><a href="#">Majene</a></li>
                        <li><a href="#">Polman</a></li>
                        <li><a href="#">Mamasa</a></li>
                      </ul>
                    </li>
                    <li><a href="#">INFOGRAFIS</a></li>
                    <li><a href="#">TOKOH</a></li>
                    <li><a href="#">OPINI</a></li>
                    <li><a href="#">FOTO</a></li>
                    <li><a href="#">MAMUJU TV</a></li>
                    <li><a href="#">DESAKU</a></li>
                    <li><a href="#">WISATA</a></li>
                  </ul>
                  <ul class="visible-xs nav navbar-nav">
                    <li><a>Login</a></li>
                    <li><a>Register</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
          <div class="navbar navbar-inverse topnav visible-lg visible-md visible-sm" data-spy="affix" data-offset-top="197">
            <a href="#home">HOME</a>
            <a href="#">NEWS</a>
            <a href="#">RAGAM</a>
            <a href="#">OLAHRAGA</a>
            <a href="#">DAERAH</a>
            <a href="#">INFOGRAFIS</a>
            <a href="#">TOKOH</a>
            <a href="#">OPINI</a>
            <a href="#">FOTO</a>
            <a href="#">MAMUJU TV</a>
            <a href="#">DESAKU</a>
            <a href="#">WISATA</a>
          </div>
          <!-- 1. Bagian Seluruh Konten
          ========================================================================================================================================= -->
          <div class="container-fluid konten" style="background-color: #F5F5F5;">
            <!--// 1.1 Bagian iklan 1
            ======================================================================================================================================= -->
            <div class="col-sm-1 iklan13">
              <img src="<?php echo e($iklan['iklan1']['gambar_iklan']); ?>" width="100%" height="auto">
            </div>
            <!--// 1.2 Bagian Seluruh Konte Tengah
            ============================================ height="auto" -->
            <div class="col-sm-10">
              <div class="row iklan2">
                <img src="<?php echo e($iklan['iklan2']['gambar_iklan']); ?>" width="100%" height="auto">
              </div>
              <br>
              <!--// 1.2.1 Bagian Konten Isi
              ===================================================================================================================================== -->
              <?php echo $__env->yieldContent('content'); ?>
              <!--// 1.3. Konten Iklan 2
              ======================================================================================================= -->
              <div class="col-sm-1">
                <img src="<?php echo e($iklan['iklan3']['gambar_iklan']); ?>" width="100%" height="auto">
              </div>
            </div>
            <!-- // Bagian Footer
            ========================================================================================================= -->
            <div class="footer">
              
              <div class="col-sm-12" style="background-color: grey;">Copyiright</div>
            </div>
          </body>
        </html>