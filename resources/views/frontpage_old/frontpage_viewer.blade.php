<html>
<head>
	<meta charset="UTF-8">
	<title>MamujuToday.com</title>
	<link rel="stylesheet" href="{{asset('css/lib/bootstrap/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/lib/mnews/mnews.css')}}">
	<script src="{{asset('js/lib/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('js/lib/stickyjs/jquery.sticky.js')}}"></script>
</head>
<body style="height: 1500px">
	<nav class="navbar navbar-light nav-header">
		<a class="navbar-brand" href="#">
			<img class="logo-header" src="{{asset('images/mnews/logo-2.png')}}" alt="">
		</a>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-light sub-nav-header" id="stick-sub-nav-header">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">News</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Ragam</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Olahraga</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				l
			</div>
			<div class="col-md-3 content-right">
				<div class="list-berita-title">Mamuju TV</div>
				<div class="list-berita">
					<div class="content-list">
						<img src="{{asset('images/watch.jpg')}}" alt="" class="content-list-img">
						<div class="content-list-kategori">PIDANA</div>
						<div class="content-list-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
					</div>
					<div class="content-list">
						<img src="{{asset('images/watch.jpg')}}" alt="" class="content-list-img">
						<div class="content-list-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
					</div>
					<div class="content-list">
						<img src="{{asset('images/watch.jpg')}}" alt="" class="content-list-img">
						<div class="content-list-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
					</div>
				</div>
				<div class="list-berita-title">Terpopuler</div>
				<div class="list-berita">
					@php
					$popular_no = 0;
					@endphp
					@foreach($berita_popular as $popular)
						@if($popular_no == 0)
							<div class="content-list">
								<img src="{{$popular->source}}" alt="" class="content-list-img">
								<div class="content-list-kategori">{{App\Model\Kategori::detail($popular->id_kategori)->nama_kategori}}</div>
								<div class="content-list-title">{{$popular->judul}}</div>
							</div>
						@else
							<div class="content-list">
								<img src="{{$popular->source}}" alt="" class="content-list-img">
								<div class="content-list-title">{{$popular->judul}}</div>
							</div>
						@endif
					@php
					$popular_no = $popular_no + 1;
					@endphp
					@endforeach
				</div>
			</div>
		</div>
	</div>
</body>
<footer>
	<script src="{{asset('js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/lib/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{asset('js/lib/mnews/mnews.js')}}"></script>
</footer>
</html>