@extends('frontpage.frontpage_layout')
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
	.title{
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
		<div class="title">
			{{$berita->judul}}
		</div>
		@if($berita->source_type == 'gambar')
			<img src="{{$berita->source}}" class="img-fluid" alt="Responsive image" style="width: 100%; height: 350px;">
		@elseif($berita->source_type == 'video')
			<object width="600" height="315" data="{{$berita->source}}">
			</object>
		@endif
		<div class="conten-berita">
			{!!$berita->konten!!}
		</div>
	</div>

	<div class="komentar">
		<div class="label-komentar">Komentar Anda</div>
		<div class="list-komentar">
			<div class="list">
				<img src="http://via.placeholder.com/50x50" alt="" class="avatar">
				<div class="nama">Dimas Adi Satria</div>
				<div class="isi-komentar">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque commodi ut, nobis voluptas ex vero iste debitis repellendus deserunt laudantium aliquid! Architecto dolore, eius esse a rem. Quibusdam, natus, sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi earum delectus dolorem quo, beatae voluptate officia. Fugiat minus maiores animi asperiores, error delectus dolores ex ratione. Totam harum impedit, quaerat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quasi alias id dolor quam fugiat voluptate, possimus quis maxime officiis architecto eaque dolorum reprehenderit eum dolore reiciendis dolores quaerat. Numquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum temporibus voluptates ut asperiores, eius sunt mollitia, repellendus officia, doloremque consequatur enim maiores dicta. Culpa saepe quisquam, maxime fugit excepturi asperiores.</div>
			</div>
			<div class="list">
				<img src="http://via.placeholder.com/50x50" alt="" class="avatar">
				<div class="nama">Dimas Adi Satria</div>
				<div class="isi-komentar">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque commodi ut, nobis voluptas ex vero iste debitis repellendus deserunt laudantium aliquid! Architecto dolore, eius esse a rem. Quibusdam, natus, sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi earum delectus dolorem quo, beatae voluptate officia. Fugiat minus maiores animi asperiores, error delectus dolores ex ratione. Totam harum impedit, quaerat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quasi alias id dolor quam fugiat voluptate, possimus quis maxime officiis architecto eaque dolorum reprehenderit eum dolore reiciendis dolores quaerat. Numquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum temporibus voluptates ut asperiores, eius sunt mollitia, repellendus officia, doloremque consequatur enim maiores dicta. Culpa saepe quisquam, maxime fugit excepturi asperiores.</div>
			</div>
		</div>
	</div>
</div>
<div class="col-sm-3">
	<img src="{{$iklan['iklan4']['gambar_iklan']}}" alt="Chicago" style="width:100%;">
	<img src="{{$iklan['iklan5']['gambar_iklan']}}" alt="Chicago" style="width:100%;">
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
	<img src="{{$iklan['iklan4']['gambar_iklan']}}" alt="Chicago" style="width:100%;">
</div>
<div class="col-md-3 remove-padding-grid">
	<div class="berita-top">
		<h4 class="title">
			Berita Terpopuler
		</h4>
		@foreach($berita_popular as $popular)
		<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $popular->id_kategori)->first()->nama_kategori}}/{{$popular->url}}" class="list-berita-top" target="_blank">
			<div class="kategori">{{App\Model\Kategori::where('id', $popular->id_kategori)->first()->nama_kategori}}</div>
			<div class="judul">{{$popular->judul}}</div>
			<div class="preview">{{str_limit($popular->judul, 50)}}</div>
		</a>
		@endforeach
	</div>

</div>
</div>
@endsection