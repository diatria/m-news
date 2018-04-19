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
			<div class="col-md-3 content-left">
				<div class="list-berita-title">INFOGRAFIS</div>
				<div class="list-berita">
					<div class="content-list">
						<img src="{{asset('images/watch.jpg')}}" alt="" class="content-list-img">
						<div class="content-list-kategori">PIDANA</div>
						<div class="content-list-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
					</div>
					<div class="content-list">
						<img src="{{asset('images/watch.jpg')}}" alt="" class="content-list-img">
						<div class="content-list-kategori">PIDANA</div>
						<div class="content-list-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 content-center">
				<div class="slider">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							@php
							$no = 0;
							@endphp
							@foreach($berita_slider as $slider)
							@if($no == 0)
							<div class="carousel-item active">
							@else
							<div class="carousel-item">
							@endif
								@if($slider->source_type == 'gambar')
									<img src="{{$slider->source}}" alt="Los Angeles" class="h-300">
								@elseif($slider->source_type == 'video')
									<object data="{{$slider->source}}" style="min-width: 600px;width: 100%;min-height: 300px;">
									</object>
								@elseif($slider->source_type == 'embed')
									<div class="embed">
										{!! $slider->source !!}
									</div>
								@endif
								<div class="carousel-caption d-none d-md-block">
									<h5>{{$slider->judul}}</h5>
								</div>
							</div>
							@php
							$no = $no + 1;
							@endphp
							@endforeach
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="content-news">
					<div class="content-title">TERKINI</div>
					@foreach($berita_terbaru as $news)
						@if($news->source_type == 'gambar')
							<div class="content-list {{$news->source_type}}" onclick="linked('{{url('view/'.App\Model\Kategori::detail($news->id_kategori)->nama_kategori.'/'.$news->url)}}');">
								<div class="content-image">
									<img src="{{$news->source}}" alt="">
								</div>
								<div class="content-list-title">{{$news->judul}}</div>
								<div class="content-list-desc">{!! str_limit(strip_tags($news->konten), 100) !!}</div>
								<div class="content-list-kategori">{{App\Model\Kategori::detail($news->id_kategori)->nama_kategori}}</div>
							</div>
						@elseif($news->source_type == 'video')
							<div class="content-list {{$news->source_type}}" onclick="linked('{{url('view/'.App\Model\Kategori::detail($news->id_kategori)->nama_kategori.'/'.$news->url)}}');">
								<div class="content-video">
									<object data="{{$news->source}}">
									</object>
								</div>
								<div class="content-list-title">{{$news->judul}}</div>
								{{-- <div class="content-list-desc">{!! str_limit(strip_tags($news->konten), 100) !!}</div> --}}
								<div class="content-list-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, iusto excepturi quibusdam ipsa at sunt. Voluptate ipsa fuga aliquam est quaerat. Consequatur cupiditate distinctio expedita quidem quibusdam, et cumque rem.</div>
								<div class="content-list-kategori">{{App\Model\Kategori::detail($news->id_kategori)->nama_kategori}}</div>
							</div>
						@elseif($news->source_type == 'embed')
							<div class="content-list {{$news->source_type}}" onclick="linked('{{url('view/'.App\Model\Kategori::detail($news->id_kategori)->nama_kategori.'/'.$news->url)}}');">
								<div class="content-video">
									<div class="embed">
										{!! $news->source !!}
									</div>
								</div>
								<div class="content-list-title">{{$news->judul}}</div>
								{{-- <div class="content-list-desc">{!! str_limit(strip_tags($news->konten), 100) !!}</div> --}}
								<div class="content-list-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, iusto excepturi quibusdam ipsa at sunt. Voluptate ipsa fuga aliquam est quaerat. Consequatur cupiditate distinctio expedita quidem quibusdam, et cumque rem.</div>
								<div class="content-list-kategori">{{App\Model\Kategori::detail($news->id_kategori)->nama_kategori}}</div>
							</div>
						@endif
					@endforeach
				</div>
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
							<a href="{{url('view/'.App\Model\Kategori::detail($popular->id_kategori)->nama_kategori.'/'.$popular->url)}}" class="content-list">
								<img src="{{$popular->source}}" alt="" class="content-list-img">
								<div class="content-list-kategori">{{App\Model\Kategori::detail($popular->id_kategori)->nama_kategori}}</div>
								<div class="content-list-title">{{$popular->judul}}</div>
							</a>
						@else
							<a href="{{url('view/'.App\Model\Kategori::detail($popular->id_kategori)->nama_kategori.'/'.$popular->url)}}" class="content-list">
								<img src="{{$popular->source}}" alt="" class="content-list-img">
								<div class="content-list-title">{{$popular->judul}}</div>
							</a>
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