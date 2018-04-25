<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="{{asset('css/lib/mnews/mnews-old.css')}}">
</head>
<body>
    <!-- A. Bagian Header
      ======================================================================================================================================== -->
      <div class="container-fluid header" style="background-color: #034759;">
        <div class="col-sm-4">
          <center><img class="visible-lg visible-md visible-sm" src="{{asset('images/mnews/logo.png')}}" ></center>
        </div>
        <div class="col-sm-5">
          <br class="visible-lg visible-md visible-sm">
          <form class="visible-lg visible-md visible-sm">
            <p><center><input class="search-text" type="text" name="search" placeholder="Search.."><button type="submit" class="btn-search"><i class="fa fa-search"></i></button></center></p>
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
              <a href="#home" style="text-transform: uppercase;">Home</a>
              @foreach($menu as $menu)
              <a href="{{url('view/'.$menu->nama_kategori)}}" style="text-transform: uppercase;">{{$menu->nama_kategori}}</a>
              @endforeach
            </div>
          <!-- 1. Bagian Seluruh Konten
            ========================================================================================================================================= -->
            <div class="container-fluid konten" style="background-color: #F5F5F5;">
            <!--// 1.1 Bagian iklan 1
              ======================================================================================================================================= -->
              <div class="col-sm-1 iklan13">
                <img src="{{$iklan['iklan1']['gambar_iklan']}}" width="100%" height="auto">
              </div>
            <!--// 1.2 Bagian Seluruh Konte Tengah
              ============================================ height="auto" -->
              <div class="col-sm-10">
                <div class="row iklan2" style="margin-left: 0px;">
                  <div class="col-md-12">
                    <img src="{{$iklan['iklan2']['gambar_iklan']}}" width="100%" height="auto">
                  </div>
                </div>
                <br>
              <!--// 1.2.1 Bagian Konten Isi
                ===================================================================================================================================== -->
                @yield('content')
              <!--// 1.3. Konten Iklan 2
                ======================================================================================================= -->
                <div class="col-sm-1">
                  <img src="{{$iklan['iklan3']['gambar_iklan']}}" width="100%" height="auto">
                </div>
              </div>
            <!-- // Bagian Footer
              ========================================================================================================= -->
            <div class="footer">
              <div class="col-sm-12">
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-sm-7">
                  <div class="img-logo">
                    <img src="{{asset('images/mnews/LOGO-2.png')}}" alt="">
                  </div>
                </div>
                <div class="col-md-3">
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
                <div class="col-sm-1"></div>
              </div>
              <div class="col-sm-12">
                <div class="col-md-1"></div>
                <div class="col-sm-5 copyright">Copyright &copy; PT.Media Mandar Nusantara</div>
                <div class="col-sm-5">
                  <div class="list-menu">
                    <div class="menu">Redaksi</div>
                    <div class="menu">Pedoman media siber</div>
                    <div class="menu">Tentang kami</div>
                    <div class="menu">Disclaimer</div>
                    <div class="menu">Kontak</div>
                  </div>
                </div>
                <div class="col-sm-1"></div>
              </div>
            </div>
            </body>
            <script>
              $('.carousel').carousel()
            </script>
            </html>