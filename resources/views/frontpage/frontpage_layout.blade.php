<!DOCTYPE html>
<html>
<head>
  <title>{{!empty($og_title) ? $og_title : "MamujuToday.com"}}</title>
  {{-- OPEN GRAPH --}}
  <meta property="og:url"                content={{!empty($og_url) ? $og_url : ""}} />
  <meta property="og:type"               content="{{!empty($og_kategori) ? $og_kategori : ""}}" />
  <meta property="og:title"              content="{{!empty($og_title) ? $og_title : ""}}" />
  <meta property="og:description"        content="{{!empty($og_deskripsi) ? $og_deskripsi : ""}}" />
  <meta property="og:image"              content="{{!empty($image) ? $image : ""}}" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="{{asset('css/lib/mnews/mnews-old.css')}}">
  {{-- <style>
  ul {
    list-style: none;
    padding: 0;
    margin: 0;
    background: #023340;
  }

  ul li {
    display: block;
    position: relative;
    float: left;
    background: #023340;
    z-index: 1500;
  }

  /* This hides the dropdowns */


  li ul { display: none; }

  ul li a {
    display: block;
    padding: 5px 20px !important;
    text-decoration: none;
    white-space: nowrap;
    color: #fff;

  }

  ul li a:hover { background: #023340; }

  /* Display the dropdown */


  li:hover > ul {
    display: block;
    position: absolute;
  }

  li:hover li { float: none; }

  li:hover a { background: #023340; }

  li:hover li a:hover { background: #023340; }

  .main-navigation li ul li { border-top: 0; }

  /* Displays second level dropdowns to the right of the first level dropdown */


  ul ul ul {
    left: 100%;
    top: 0;
  }

  /* Simple clearfix */



  ul:before,
  ul:after {
    content: " "; /* 1 */
    display: table; /* 2 */
  }

  ul:after { clear: both; }
</style> --}}

</head>
<body>
    <!-- A. Bagian Header
      ======================================================================================================================================== -->
      <div class="container-fluid header" style="background-color: #034759;">
        <div class="col-sm-4">
          <a href="{{url('/')}}"><center><img class="visible-lg visible-md visible-sm" src="{{asset('images/mnews/logo.png')}}" ></center></a>
        </div>
        <div class="col-sm-5">
          <br class="visible-lg visible-md visible-sm">
          <form class="visible-lg visible-md visible-sm" action="{{url('search')}}" method="get">
            <p><center><input class="search-text" type="text" name="q" placeholder="Search.."><button type="submit" class="btn-search"><i class="fa fa-search"></i></button></center></p>
          </form>
        </div>
        <div class="col-sm-2">
          <br class="visible-lg visible-md visible-sm">
          <br class="visible-lg visible-md visible-sm">
          <center>
            <p class="visible-lg visible-md visible-sm" style="color: orange;">
              @if(Auth::user())
              <a href="{{url('user/dashboard')}}" style="color: orange;">{{Auth::user()->name}}</a> | <a href="{{url('login/revoke')}}" style="color: #F44336;">Keluar</a>
              @else
              <a href="{{url('login')}}" style="color: orange;">Masuk</a>  |  <a href="{{url('register')}}" style="color: orange;">Daftar</a>
              @endif
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

            <nav class="navbar navbar-inverse topnav visible-lg visible-md visible-sm" data-spy="affix" data-offset-top="197">
              <div class="container-fluid">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="https://new.mamujutoday.com">HOME <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">INTERNASIONAL</a></li>
                    <li><a href="#">NASIONAL</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">REGIONAL<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">MAMUJU</a></li>
                        <li><a href="#">MAJENE</a></li>
                        <li><a href="#">POLMAN</a></li>
                        <li><a href="#">MAMASA</a></li>
                        <li><a href="#">MAMUJU TENGAH</a></li>
                        <li><a href="#">MAMUJU UTARA</a></li>
                      </ul>
                    </li>
                    <li><a href="#">GRAFIS</a></li>
                    <li><a href="#">HUKUM</a></li>
                    <li><a href="#">POLITIK</a></li>
                    <li><a href="#">EKONOMI</a></li>
                    <li><a href="#">OLAH RAGA</a></li>
                    <li><a href="#">BOLA</a></li>
                    <li><a href="#">OTOMOTIF</a></li>
                    <li><a href="#">TOKOH</a></li>
                    <li><a href="#">MAMUJU TV</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>

            {{-- <nav class="navbar navbar-default mamuju-navbarm"> --}}
            {{-- <nav class="navbar navbar-inverse topnav visible-lg visible-md visible-sm" data-spy="affix" data-offset-top="197">
              <div class="container-fluid">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                @php
                function x_render($menu, $sw = null)
                {
                  if ($sw == null) {
                    echo"<ul style='padding:10px;'>";
                  } else {
                    echo "<ul style='padding:5px 0; border-left: 1px solid #034759; border-right: 1px solid #034759; border-radius: 2px;'>";
                  }
                  foreach ($menu as $menu) {
                    if ($menu->parent == 'parent' || $sw == 'parent') {
                      echo "<li>";
                      echo "<a href=''>";
                      echo App\Model\Kategori::where('id', $menu->nama_menu)->first()->nama_kategori;
                      echo "</a>";
                      $s_menu = App\Model\Menu::where('parent', $menu->id)->get();
                      if ($s_menu) {
                      // return (array) $s_menu;
                        x_render($s_menu, 'parent');
                      }
                      echo "</li>";
                    }
                  }
                  echo "</ul>";
                }

                function render()
                {
                  $m_menu = App\Model\Menu::all();
                  return x_render($m_menu);
                }
                echo render();
                @endphp

                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav> --}}
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
                  <div class="icon-social" style="background-color: #023340 !important;">
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

            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            </body>
            <script>
              $('.carousel').carousel()
            </script>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ae58b42cb52d3e4"></script>
            <script src="{{url('js/lib/stickyjs/jquery.sticky.js')}}"></script>
            <script>
              $(document).ready(function(){
                $(window).scroll(function () {
                  var iCurScrollPos = $(this).scrollTop();
                  // if (iCurScrollPos > 0 && iCurScrollPos < 1900) {
                  //   $("#sticky").sticky({
                  //     topSpacing:40,
                  //     bottomSpacing: 200
                  //   });
                  // } else if(iCurScrollPos > 3600) {
                  //   $("#sticky").unstick({
                  //     getWidthFrom:'col-md-3',
                  //     wrapperClassName:'col-md-3 remove-padding-grid',
                  //   });
                  // }
                  $("#sticky").sticky({
                    topSpacing:40,
                    bottomSpacing: 200
                  });
                });

              });
            </script>
            </html>