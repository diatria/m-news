@extends('frontpage.frontpage_layout')
@section('content')
@php
use App\Helper\Time;
@endphp
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
<div class="col-sm-9">
	<div class="bg-w carousel slide" id="myCarousel" style="min-height: 400px;">
		<h4 style="text-align: left;" class="berita-terkini-header"><span class="berita-terkini">HASIL PENCARIAN</span></h4>
		@if($data->count() == 0)
		<h4 style="margin: 50px 0">Tidak ditemukan hasil pencarian dari kata kunci <b>{{request('q')}}</b></h4>
		@endif
		@foreach($data as $news)
		<table style="text-align: left; display: table; border-collapse: separate;" class="table-bt">
			<tr>
				@if($news->source_type == 'gambar')
				<td class="bt" style="clear: both; padding: 0; margin: 0;">
					<img src="{{$news->source}}" alt="Los Angeles" style="width:100%; height: 350px;">
				</td>
				@elseif($news->source_type == 'video')
				<td class="embed-bt">
					<div class="embed artikel">
						<object data="{{$news->source}}" style="min-width: 500px;width: 100%;min-height: 270px;">
						</object>
					</div>
				</td>
				@elseif($news->source_type == 'embed')
				<td class="embed-bt">
					<div class="embed artikel">
						{!! $news->source !!}
					</div>
				</td>
				@endif
				<td class="bt {{$news->source_type}}">
					<a href="{{url('view/'.App\Model\Kategori::detail($news->id_kategori)->nama_kategori.'/'.$news->url)}}" target="_blank">
						<h2>
							{{$news->judul}}
						</h2>
						<div class="bt-info">
							<object><a href="{{url('view/'.App\Model\Kategori::where('id', $news->id_kategori)->first()->nama_kategori)}}" class="bt-kategori">{{App\Model\Kategori::where('id', $news->id_kategori)->first()->nama_kategori}}</a></object>
							<div class="bt-tanggal">{{Time::IndonesiaMonth($news->time)}}</div>
						</div>
					</a>
					
				</td>
			</tr>
		</table>
		@endforeach
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
	<h4 class="sidebar-tv">
		Mamuju TV
	</h4>
	@foreach($mamujutv as $mamujutv)
		<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $mamujutv->id_kategori)->first()->nama_kategori}}/{{$mamujutv->url}}" class="mamujutv" target="_blank">
			@if($mamujutv->source_type == 'gambar')
				<img src="{{$mamujutv->source}}" alt="Los Angeles" style="width:100%; max-height: ">
			@elseif($mamujutv->source_type == 'video')
				<object data="{{$mamujutv->source}}" style="width: 100%;">
				</object>
			@elseif($mamujutv->source_type == 'embed')
				<div class="embed unset">
					{!! $mamujutv->source !!}
				</div>
			@endif
			<div class="caption">
				<p>{{str_limit($mamujutv->judul, 70)}}</p>
			</div>
		</a>
	@endforeach
</div>
<div class="col-md-3 remove-padding-grid">
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