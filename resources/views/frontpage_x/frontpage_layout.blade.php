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
    <style>
    /* Note: Try to remove the following lines to see the effect of CSS positioning */
    .affix {
    top: 0;
    width: 100%;
    z-index: 9999 !important;
    }
    .affix + .container-fluid {
    padding-top: 70px;
    }
    .center ul{
    width: -moz-fit-content;
    width: -webkit-fit-content;
    width: fit-content;
    margin: auto;
    }
    input[type=text] {
    width: 70%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 11px;
    background-color: white;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    }
    input[type=text]:focus {
    width: 90%;
    }
    button{
    width: 10%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 14px;
    border: none;
    cursor: pointer;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    }
    .topnav {
    overflow: visible;
    background-color: #333;
    text-align: center;
    padding: 15px;
    font-size: 12px;
    height: 10px;
    }
    .topnav a {
    color: #f2f2f2;
    padding: 6px 8px;
    text-decoration: none;
    font-size: 12px;
    }
    .topnav a:hover {
    color: red;
    }
    .topnav a.active {
    color: green;
    }
    .header{
    padding: 10px;
    background-color: rgb(29, 112, 100);
    }
    .konten{
    text-align: center;
    margin-top: -20px;
    padding: 10px;
    }
    .embed > iframe {
      width: 100%;
      height: auto;
      height: -moz-available;          /* WebKit-based browsers will ignore this. */
      height: -webkit-fill-available;  /* Mozilla-based browsers will ignore this. */
      height: fill-available;
    }
    .embed.unset > iframe {
      width: 100%;
      height: auto;
    }
    .embed.artikel > *{
      max-width: 500px !important;
      width: 500px;
      height: 280px;
    }
    .table-bt{
      background-color: #FFF;
    }
    .embed-bt{
      padding: 5px !important;
      border-bottom: 1.5px solid #E0E0E0;  
    }
    .bt{
      padding: 5px !important;
      border-bottom: 1.5px solid #E0E0E0;
    }
    .bt > * {
      width: 200px !important;
      height: 120px !important;
    }
    </style>
  </head>
  <body>
    <!-- A. Bagian Header
    ======================================================================================================================================== -->
    <div class="container-fluid header">
      <div class="col-sm-4">
        <center><img class="visible-lg visible-md visible-sm" src="{{asset('images/mnews/logo.png')}}" ></center>
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
          <div class="container-fluid konten" style="background-color: #CCCCCC;">
            <!--// 1.1 Bagian iklan 1
            ======================================================================================================================================= -->
            <div class="col-sm-1 iklan13">
              <img src="iklan13.png" width="100%" height="auto">
            </div>
            <!--// 1.2 Bagian Seluruh Konte Tengah
            ============================================ height="auto" -->
            <div class="col-sm-10">
              <div class="row iklan2">
                <img src="iklan2.png" width="100%" height="auto">
              </div>
              <br>
              <!--// 1.2.1 Bagian Konten Isi
              ===================================================================================================================================== -->
              @yield('content')
              <!--// 1.3. Konten Iklan 2
              ======================================================================================================= -->
              <div class="col-sm-1">
                <img src="iklan13.png" width="100%" height="auto">
              </div>
            </div>
            <!-- // Bagian Footer
            ========================================================================================================= -->
            <div class="footer">
              
              <div class="col-sm-12" style="background-color: grey;">Copyiright</div>
            </div>
          </body>
        </html>