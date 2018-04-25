<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('css/lib/mnews/mobile-mnews-old.css')}}">
	<title>MamujuToday.com</title>
</head>
<body>
	<div class="header">
		<nav class="nav navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#"><img class="nav-logo" src="{{asset('images/mnews/LOGO.png')}}" ></a>
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
		<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $m_berita_single->id_kategori)->first()->nama_kategori}}/{{$m_berita_single->url}}">
			<div class="berita-terbaru-big">
				@if($m_berita_single->source_type == 'gambar')
				<img src="{{$m_berita_single->source}}" alt="Los Angeles">
				@elseif($m_berita_single->source_type == 'video')
				<object data="{{$m_berita_single->source}}">
				</object>
				@elseif($m_berita_single->source_type == 'embed')
				<div class="embed">
					{!! $m_berita_single->source !!}
				</div>
				@endif
				<div class="informasi">
					<div class="kategori">{{App\Model\Kategori::where('id', $m_berita_single->id_kategori)->first()->nama_kategori}}</div>
					<div class="judul">{{$m_berita_single->judul}}</div>
					<div class="deskripsi">{!!str_limit($m_berita_single->konten, 100)!!}</div>
				</div>
			</div>
		</a>

		@foreach($m_berita_terbaru_top as $berita_terbaru_top)
		<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $berita_terbaru_top->id_kategori)->first()->nama_kategori}}/{{$berita_terbaru_top->url}}">
			<div class="list-berita bg-colored">
				<div class="row rm-mp">
					<div class="col-5 rm-mp">
						@if($berita_terbaru_top->source_type == 'gambar')
						<img src="{{$berita_terbaru_top->source}}" alt="Los Angeles">
						@elseif($berita_terbaru_top->source_type == 'video')
						<object data="{{$berita_terbaru_top->source}}">
						</object>
						@elseif($berita_terbaru_top->source_type == 'embed')
						<div class="embed">
							{!! $berita_terbaru_top->source !!}
						</div>
						@endif
					</div>
					<div class="col-7">
						<div class="informasi">
							<div class="kategori">{{App\Model\Kategori::where('id', $berita_terbaru_top->id_kategori)->first()->nama_kategori}}</div>
							<div class="judul">{{$berita_terbaru_top->judul}}</div>
						</div>
					</div>
				</div>
			</div>
		</a>
		
		@endforeach
	</div>
	<div class="infografis">
		<div class="judul-block">
			<span>Infografis</span>
		</div>
		@foreach($infografis as $infografis)
		<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $infografis->id_kategori)->first()->nama_kategori}}/{{$infografis->url}}">
			<div class="list-berita">
				<div class="row rm-mp">
					<div class="col-5 rm-mp">
						@if($infografis->source_type == 'gambar')
							<img src="{{$infografis->source}}" alt="Los Angeles">
						@elseif($infografis->source_type == 'video')
							<object data="{{$infografis->source}}">
							</object>
						@elseif($infografis->source_type == 'embed')
							<div class="embed">
								{!! $infografis->source !!}
							</div>
						@endif
					</div>
					<div class="col-7">
						<div class="informasi">
							<div class="kategori">{{App\Model\Kategori::where('id', $infografis->id_kategori)->first()->nama_kategori}}</div>
							<div class="judul colored">{{$infografis->judul}}</div>
						</div>
					</div>
				</div>
			</div>
		</a>

		@endforeach
	</div>
	<div class="berita">
		<div class="judul-block">
			<span>Berita terbaru</span>
		</div>
		@foreach($m_berita_terbaru_after as $berita_terbaru_after)
		<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $berita_terbaru_after->id_kategori)->first()->nama_kategori}}/{{$berita_terbaru_after->url}}">
			<div class="list-berita">
				<div class="row rm-mp">
					<div class="col-5 rm-mp">
						@if($infografis->source_type == 'gambar')
						<img src="{{$berita_terbaru_after->source}}" alt="Los Angeles">
						@elseif($berita_terbaru_after->source_type == 'video')
						<object data="{{$berita_terbaru_after->source}}">
						</object>
						@elseif($berita_terbaru_after->source_type == 'embed')
						<div class="embed">
							{!! $berita_terbaru_after->source !!}
						</div>
						@endif
					</div>
					<div class="col-7">
						<div class="informasi">
							<div class="kategori">{{App\Model\Kategori::where('id', $berita_terbaru_after->id_kategori)->first()->nama_kategori}}</div>
							<div class="judul colored">{{$berita_terbaru_after->judul}}</div>
						</div>
					</div>
				</div>
			</div>
		</a>
		
		@endforeach
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</html>