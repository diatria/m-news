<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
	<link rel="stylesheet" href="{{asset('css/lib/mnews/mobile-mnews-old.css')}}">
	<title>{{!empty($og_title) ? $og_title : "MamujuToday.com"}}</title>
	<meta property="og:url"                content={{!empty($og_url) ? $og_url : ""}} />
	<meta property="og:type"               content="{{!empty($og_kategori) ? $og_kategori : ""}}" />
	<meta property="og:title"              content="{{!empty($og_title) ? $og_title : ""}}" />
	<meta property="og:description"        content="{{!empty($og_deskripsi) ? $og_deskripsi : ""}}" />
	<meta property="og:image"              content="{{!empty($image) ? $image : ""}}" />
</head>
<body>
	<div class="header">
		<nav class="nav navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="{{url('/')}}"><img class="nav-logo" src="{{asset('images/mnews/logo.png')}}" ></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			{{-- NAVBAR DYNAMIC --}}
{{-- 			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li style="padding: 5px;">
						@if(Auth::user())
						<div class="row">
							<div class="col-6" style="color: orange !important;"><a href="{{url('user/dashboard')}}" style="color: orange !important;">{{Auth::user()->name}}</a> | <a href="{{url('register')}}" style="color: #F44336 !important;">Keluar</a></div>
						</div>
						@else
						<div class="row">
							<div class="col-6" style="color: orange !important;"><a href="{{url('login')}}" style="color: orange !important;">LOGIN</a> | <a href="{{url('register')}}" style="color: orange !important;">REGISTER</a></div>
						</div>
						@endif
					</li>
					@foreach($menu as $menu)
					<li class="nav-item">
						<a href="{{url('view/'.$menu->nama_kategori)}}" style="text-transform: uppercase;" class="nav-link">{{$menu->nama_kategori}}</a>
					</li>
					@endforeach
				</ul>
			</div> --}}
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item" style="padding: 5px 0;">
						@if(Auth::user())
						<div class="row">
							<div class="col-6" style="color: orange !important;"><a href="{{url('user/dashboard')}}" style="color: orange !important;">{{Auth::user()->name}}</a> | <a href="{{url('register')}}" style="color: #F44336 !important;">Keluar</a></div>
						</div>
						@else
						<div class="row">
							<div class="col-6" style="color: orange !important;"><a href="{{url('login')}}" style="color: orange !important;">LOGIN</a> | <a href="{{url('register')}}" style="color: orange !important;">REGISTER</a></div>
						</div>
						@endif
					</li>
				</ul>
				<div class="row">
					<div class="col-6">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="{{url('/')}}" style="text-transform: uppercase;" class="nav-link">Home</a>
							</li>
							<li class="nav-item">
								<a href="" style="text-transform: uppercase;" class="nav-link">Internasional</a>
							</li>
							<li class="nav-item">
								<a href="" style="text-transform: uppercase;" class="nav-link">Nasional</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: uppercase;">
									Regional
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #034759 !important">
									<a class="dropdown-item" href="{{url('view/Mamuju')}}" style="text-transform: uppercase;">Mamuju</a>
									<a class="dropdown-item" href="{{url('view/Majene')}}" style="text-transform: uppercase;">Majene</a>
									<a class="dropdown-item" href="{{url('view/Polman')}}" style="text-transform: uppercase;">Polman</a>
									<a class="dropdown-item" href="{{url('view/Mamasa')}}" style="text-transform: uppercase;">Mamasa</a>
									<a class="dropdown-item" href="{{url('view/Mamuju Tengah')}}" style="text-transform: uppercase;">Mamuju Tengah</a>
									<a class="dropdown-item" href="{{url('view/Mamuju Utara')}}" style="text-transform: uppercase;">Mamuju Utara</a>
								</div>
							</li>
							<li class="nav-item">
								<a href="{{url('view/Infografis')}}" style="text-transform: uppercase;" class="nav-link">Grafis</a>
							</li>
							<li class="nav-item">
								<a href="{{url('view/Hukum')}}" style="text-transform: uppercase;" class="nav-link">Hukum</a>
							</li>
							<li class="nav-item">
								<a href="{{url('view/Politik')}}" style="text-transform: uppercase;" class="nav-link">Politik</a>
							</li>
						</ul>
					</div>
					<div class="col-6">
						<ul class="navbar-nav col-6">
							<li class="nav-item">
								<a href="{{url('view/Ekonomi Bisnis')}}" style="text-transform: uppercase;" class="nav-link">Ekonomi</a>
							</li>
							<li class="nav-item">
								<a href="{{url('view/Olahraga')}}" style="text-transform: uppercase;" class="nav-link">Olahraga</a>
							</li>
							<li class="nav-item">
								<a href="{{url('view/')}}" style="text-transform: uppercase;" class="nav-link">Bola</a>
							</li>
							<li class="nav-item">
								<a href="{{url('view/')}}" style="text-transform: uppercase;" class="nav-link">Otomotif</a>
							</li>
							<li class="nav-item">
								<a href="{{url('view/Tokoh')}}" style="text-transform: uppercase;" class="nav-link">Tokoh</a>
							</li>
							<li class="nav-item">
								<a href="{{url('view/Mamuju Tv')}}" style="text-transform: uppercase;" class="nav-link">Mamuju TV</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</nav>
	</div>
	<div class="content">
		@yield('content')
	</div>
	<div class="footer">
		<img src="{{asset('images/mnews/LOGO-2.png')}}" alt="" class="img-footer">
		<div class="social-footer">
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
		<div class="copy-footer">Copyright &copy; PT.Media Mandar Nusantara</div>
	</div>
</body>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ae58b42cb52d3e4"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</html>