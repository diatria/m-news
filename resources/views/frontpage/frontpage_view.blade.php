@extends('frontpage.frontpage_layout')
@php
$og_title = $berita->judul;
$og_url = url('view').'/'.$kategori.'/'.$berita->url;
$og_kategori = $kategori;
$og_deskripsi = str_limit(strip_tags($berita->konten), 200);
$image = $berita->source;
@endphp
@section('content')
@php
App\Model\Statistik::insert($berita->id, $visitor_table);
@endphp
<style>
	.bg-w{
		background-color: #fff;
		margin-bottom: 20px;
		min-height: 800px;
	}
	.berita-title{
		font-size: 26px;
	    text-align: left;
	    padding: 10px 50px 30px 50px;
	}
	.bc{
		text-align: left;
	    padding: 20px 50px;
    	display: inline-block;
    	width: 100%;
	}
	.conten-berita{
		padding: 20px 50px;
	    text-align: left;
    	font-size: 16px;
	}
	.conten-berita img{
		width: 100% !important;
		height: auto;
	}
	.kt-foto{
		text-align: left;
		padding: 5px 50px;
		font-size: 12px;
	}
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
<div class="col-sm-9">
	<div class="bg-w carousel slide" id="myCarousel">
		<div class="bc">MAMUJU TODAY / {{$kategori}} / Detail Berita</div>
		<div class="berita-title">
			{{$berita->judul}}
		</div>
		@if($berita->source_type == 'gambar')
			<img src="{{$berita->source}}" class="img-fluid" alt="Responsive image" style="width: 100%; min-height: 350px;">
		@elseif($berita->source_type == 'video')
			<object width="600" height="315" data="{{$berita->source}}">
			</object>
		@endif
		<div class="conten-berita">
			<div class="addthis_inline_share_toolbox" style="margin-bottom: 10px;"></div>
			{!!$berita->konten!!}
		</div>
	</div>
	<div class="berita-lainnya">
		<h4 style="text-align: left;" class="berita-terkini-header">
			<span class="berita-terkini">BERITA LAINNYA</span>
		</h4>
		<div class="row">
			@foreach($berita_lainnya as $berita_lainnya)
			<div class="col-md-4">
				<div class="list-berita-lainnya">
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
					<div class="judul">{{$berita_lainnya->judul}}</div>
				</div>
			</div>
			@endforeach
		</div>
		
	</div>

	<div class="komentar">
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
		<form action="{{url('komentar')}}/{{$visitor_table}}/{{$berita->id}}" method="post">
			{{ csrf_field() }}
			<div class="input-komentar">
				<div class="image-profil">
					@if(Auth::user()->foto)
					<img src="{{Auth::user()->foto}}" alt="">
					@else
					<img src="{{asset('images/mnews/people.png')}}" alt="" class="avatar">
					@endif
				</div>
				<textarea name="komentar" id=""></textarea>
			</div>
			<button type="submit" style="float: right; margin-right: 10px;">Kirim</button>
		</form>
		@endif
	</div>
</div>
<div class="col-sm-3">
	<img src="{{$iklan['iklan4']['gambar_iklan']}}" style="width:100%;">
	<img src="{{$iklan['iklan5']['gambar_iklan']}}" style="width:100%;">
</div>
<div class="col-sm-3 remove-padding-grid">
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
<div class="col-sm-3 remove-padding-grid">
	<img src="{{$iklan['iklan4']['gambar_iklan']}}" style="width:100%;">
</div>
<div class="col-md-3 remove-padding-grid">
	<div class="berita-terkait">
		<div class="">
			<h4 class="berita-terkait-label">Berita Terkait</h4>
		</div>
		@foreach($berita_terkait as $berita_terkait)
		<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $berita_terkait->id_kategori)->first()->nama_kategori}}/{{$berita_terkait->url}}" class="berita-terkait-list">
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
			<div class="berita-terkait-content">
				<object><a href="{{url('view/'.App\Model\Kategori::where('id', $berita_terkait->id_kategori)->first()->nama_kategori)}}" class="berita-terkait-kategori">{{App\Model\Kategori::where('id', $berita_terkait->id_kategori)->first()->nama_kategori}}</a></object>
				<div class="berita-terkait-title">{{$berita_terkait->judul}}</div>
			</div>
		</a>
		@endforeach
	</div>
	<div class="berita-top">
		<h4 class="title">
			Berita Terpopuler
		</h4>
		@foreach($berita_popular as $popular)
		<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $popular->id_kategori)->first()->nama_kategori}}/{{$popular->url}}" class="list-berita-top" target="_blank">
			<object><a href="{{url('view/'.App\Model\Kategori::where('id', $popular->id_kategori)->first()->nama_kategori)}}" class="kategori">{{App\Model\Kategori::where('id', $popular->id_kategori)->first()->nama_kategori}}</a></object>
			<div class="judul">{{$popular->judul}}</div>
			<div class="preview">{{str_limit($popular->judul, 50)}}</div>
		</a>
		@endforeach
	</div>

</div>
</div>
@endsection