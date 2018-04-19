@extends('frontpage.frontpage_layout')
@section('content')
@php
App\Model\Statistik::insert($berita->id);
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
		<div class="kt-foto">Foto: Salah satu bangunan di Suriah yang rusak akibat serangan AS Cs. (LOUAI BESHARA/AFP).</div>
		<div class="conten-berita">
			{!!$berita->konten!!}
		</div>
	</div>
</div>
<div class="col-sm-3">
	<img src="iklan4.png" alt="Chicago" style="width:100%;">
	<img src="iklan5.png" alt="Chicago" style="width:100%;">
	<div class="thumbnail">
		<a href="/beritaterkini.png" target="_blank">
			<img src="beritaterkini.png" alt="Lights" style="width:100%">
			<div class="caption">
				<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
			</div>
		</a>
	</div>
</div>
<div class="col-md-3">
	<div class="thumbnail">
		<a href="/beritaterkini.png" target="_blank">
			<img src="beritaterkini.png" alt="Lights" style="width:100%">
			<div class="caption">
				<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
			</div>
		</a>
	</div>
	<div class="thumbnail">
		<a href="/beritaterkini.png" target="_blank">
			<img src="beritaterkini.png" alt="Lights" style="width:100%">
			<div class="caption">
				<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
			</div>
		</a>
	</div>
	<div class="thumbnail">
		<a href="/beritaterkini.png" target="_blank">
			<img src="beritaterkini.png" alt="Lights" style="width:100%">
			<div class="caption">
				<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
			</div>
		</a>
	</div>
	<div class="thumbnail">
		<a href="/beritaterkini.png" target="_blank">
			<img src="beritaterkini.png" alt="Lights" style="width:100%">
			<div class="caption">
				<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
			</div>
		</a>
	</div>
</div>
</div>
@endsection