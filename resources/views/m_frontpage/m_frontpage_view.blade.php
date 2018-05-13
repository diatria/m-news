@extends('m_frontpage.m_frontpage_layout')
@php
$og_title = $berita->judul;
$og_url = url('view').'/'.$kategori.'/'.$berita->url;
$og_kategori = $kategori;
$og_deskripsi = str_limit(strip_tags($berita->konten), 200);
$image = $berita->source;
@endphp
@section('content')
<div class="content-viewer">
	<div class="location-viewer">MAMUJU TODAY / {{$kategori}} / Detail Berita</div>
	<div class="title">{{$berita->judul}}</div>
	@if($berita->source_type == 'gambar')
		<img class="media-image" src="{{$berita->source}}" alt="Los Angeles">
	@elseif($berita->source_type == 'video')
		<object classid="media-video" data="{{$berita->source}}">
		</object>
	@elseif($berita->source_type == 'embed')
		<div class="media-embed">
			{!! $berita->source !!}
		</div>
	@endif
	<div class="content-berita">
		<div class="addthis_inline_share_toolbox" style="margin-bottom: 10px;"></div>
		{!! $berita->konten !!}
	</div>
	<div class="komentar" style="padding: 0 10px;">
		<div class="label-komentar">Komentar</div>
		<div class="list-komentar">
			@foreach($komentar as $komentar)
			<div class="list">
				@if(App\Model\User::find($komentar->id_user)->foto)
				<img src="{{App\Model\User::find($komentar->id_user)->foto}}" alt="">
				@else
				<img src="{{asset('images/mnews/people.png')}}" alt="" class="avatar">
				@endif
				<div class="nama">{{App\Model\User::find($komentar->id_user)->name}}</div>
				<div class="isi-komentar">{{$komentar->komentar}}</div>
			</div>
			@endforeach
		</div>
		@if(Auth::check())
		<form action="{{url('komentar')}}/{{$visitor_table}}/{{$berita->id}}" method="post" style="display: flow-root;">
			{{ csrf_field() }}
			<div class="input-komentar">
				<div class="image-profil">
					@if(Auth::user()->foto)
					<img src="{{Auth::user()->foto}}" alt="">
					@else
					<img src="http://via.placeholder.com/150x150" alt="">
					@endif
				</div>
				<textarea name="komentar" id=""></textarea>
			</div>
			<button type="submit" class="btn btn-primary" style="float: right; margin-right: 10px;">Kirim</button>
		</form>
		@endif
	</div>
	<hr>

	<div class="berita">
		<div class="judul-block">
			<span>Berita Terkait</span>
		</div>
		@foreach($berita_terkait as $berita_terkait)
		<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $berita_terkait->id_kategori)->first()->nama_kategori}}/{{$berita_terkait->url}}">
			<div class="list-berita">
				<div class="row rm-mp">
					<div class="col-5 rm-mp">
						@if($berita_terkait->source_type == 'gambar')
						<img src="{{$berita_terkait->source}}" alt="Los Angeles">
						@elseif($berita_terkait->source_type == 'video')
						<object data="{{$berita_terkait->source}}">
						</object>
						@elseif($berita_terkait->source_type == 'embed')
						<div class="embed">
							{!! $berita_terkait->source !!}
						</div>
						@endif
					</div>
					<div class="col-7">
						<div class="informasi">
							<object><a href="{{url('view/'.App\Model\Kategori::where('id', $berita_terkait->id_kategori)->first()->nama_kategori)}}" class="kategori">{{App\Model\Kategori::where('id', $berita_terkait->id_kategori)->first()->nama_kategori}}</a></object>
							<div class="judul colored">{{$berita_terkait->judul}}</div>
						</div>
					</div>
				</div>
			</div>
		</a>
		@endforeach
	</div>
	<div class="berita">
		<div class="judul-block">
			<span>Berita Lainnya</span>
		</div>
		@foreach($berita_lainnya as $berita_lainnya)
		<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $berita_lainnya->id_kategori)->first()->nama_kategori}}/{{$berita_lainnya->url}}">
			<div class="list-berita">
				<div class="row rm-mp">
					<div class="col-5 rm-mp">
						@if($berita_lainnya->source_type == 'gambar')
						<img src="{{$berita_lainnya->source}}" alt="Los Angeles">
						@elseif($berita_lainnya->source_type == 'video')
						<object data="{{$berita_lainnya->source}}">
						</object>
						@elseif($berita_lainnya->source_type == 'embed')
						<div class="embed">
							{!! $berita_lainnya->source !!}
						</div>
						@endif
					</div>
					<div class="col-7">
						<div class="informasi">
							<object><a href="{{url('view/'.App\Model\Kategori::where('id', $berita_lainnya->id_kategori)->first()->nama_kategori)}}" class="kategori">{{App\Model\Kategori::where('id', $berita_lainnya->id_kategori)->first()->nama_kategori}}</a></object>
							<div class="judul colored">{{$berita_lainnya->judul}}</div>
						</div>
					</div>
				</div>
			</div>
		</a>
		@endforeach
	</div>
</div>
@endsection