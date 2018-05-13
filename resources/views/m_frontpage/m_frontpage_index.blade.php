@extends('m_frontpage.m_frontpage_layout')
@section('content')
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
				<object><a href="{{url('view/'.App\Model\Kategori::where('id', $m_berita_single->id_kategori)->first()->nama_kategori)}}" class="kategori">{{App\Model\Kategori::where('id', $m_berita_single->id_kategori)->first()->nama_kategori}}</a></object>
				<div class="judul">{{$m_berita_single->judul}}</div>
				{{-- <div class="deskripsi">{!!str_limit($m_berita_single->konten, 100)!!}</div> --}}
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
						<object><a href="{{url('view/'.App\Model\Kategori::where('id', $berita_terbaru_top->id_kategori)->first()->nama_kategori)}}" class="kategori">{{App\Model\Kategori::where('id', $berita_terbaru_top->id_kategori)->first()->nama_kategori}}</a></object>
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
						<object><a href="{{url('view/'.App\Model\Kategori::where('id', $infografis->id_kategori)->first()->nama_kategori)}}" class="kategori">{{App\Model\Kategori::where('id', $infografis->id_kategori)->first()->nama_kategori}}</a></object>
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
						<object><a href="{{url('view/'.App\Model\Kategori::where('id', $berita_terbaru_after->id_kategori)->first()->nama_kategori)}}" class="kategori">{{App\Model\Kategori::where('id', $berita_terbaru_after->id_kategori)->first()->nama_kategori}}</a></object>
						<div class="judul colored">{{$berita_terbaru_after->judul}}</div>
					</div>
				</div>
			</div>
		</div>
	</a>
	@endforeach
</div>
@endsection