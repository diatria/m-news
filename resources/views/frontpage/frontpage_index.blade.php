@extends('frontpage.frontpage_layout')
@section('content')
@php
use App\Helper\Time;
@endphp
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
<div class="col-sm-9">
	<!-- INI SLIDE IMAGE
	==========================================================================================================-->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<!-- Wrapper for slides -->
		<div class="carousel-inner" style="height: 350px">
			@php
			$no_b = 0;
			@endphp
			@foreach($berita_slider as $slider)
			
			@if($no_b == 0)
			<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $slider->id_kategori)->first()->nama_kategori}}/{{$slider->url}}" class="item active" target="_blank">
				@else
				<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $slider->id_kategori)->first()->nama_kategori}}/{{$slider->url}}" class="item" target="_blank">
					@endif
					@if($slider->source_type == 'gambar')
					<img src="{{$slider->source}}" alt="Los Angeles" style="width:100%; height: 350px;">
					@elseif($slider->source_type == 'video')
					<object data="{{$slider->source}}" style="min-width: 600px;width: 100%;min-height: 350px;">
					</object>
					@elseif($slider->source_type == 'embed')
					<div class="embed">
						{!! $slider->source !!}
					</div>
					@endif
					<div class="carousel-caption mm-set-carousel">
						<h2>{{$slider->judul}}</h2>
					</div>
				</a>
				@php
				$no_b = $no_b + 1
				@endphp
				@endforeach
			</div>
		</div>
		<br>
		<!-- INI LIST 4 IMAGE
		==========================================================================================================-->
		<div class="row remove-margin-grid">
			@foreach($berita_slider as $slider)
			<div class="col-md-3 remove-padding-grid limg">
				<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $slider->id_kategori)->first()->nama_kategori}}/{{$slider->url}}" target="_blank">
					<img src="{{$slider->source}}" alt="Lights" style="width:100%; height: 125px;">
					<div class="caption">
						<p>{{str_limit($slider->judul, 50)}}</p>
					</div>
				</a>
			</div>
			@endforeach
		</div>
		<!-- INI Iklan 6
		==========================================================================================================-->
		<div class="row iklan6">
			<div class="col-md-12">
				<img src="{{$iklan['iklan6']['gambar_iklan']}}" width="100%" height="60px"/>
			</div>
		</div>
		<hr />
		<!-- INI berita Infografis
		==========================================================================================================-->
		<h4 style="text-align: left;" class="berita-terkini-header"><span class="berita-terkini">INFOGRAFIS</span></h4>
		<div class="row">
			@if($infografis_big)
			<div class="col-md-6">
				<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $infografis_big->id_kategori)->first()->nama_kategori}}/{{$infografis_big->url}}" target="_blank">
					<img src="{{$infografis_big->source}}" alt="Lights" style="width:100%">
					<span class="infografis-kategori">
						Infografis
					</span>
					<div class="infografis-caption">
						<p>{{$infografis_big->judul}}</p>
					</div>
				</a>
			</div>
			@endif
			<div class="col-md-6 no-gutters remove-padding-grid">
				@foreach($infografis_small as $infografis)
					<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $infografis_big->id_kategori)->first()->nama_kategori}}/{{$infografis_big->url}}" class="row list-small no-gutters" target="_blank">
						<div class="col-md-5 remove-padding-grid">
							<img src="{{$infografis->source}}" alt="">
						</div>
						<div class="col-md-6 remove-padding-grid">
							<div class="list-small-kategori">Infografis</div>
							<div class="list-small-title">{{$infografis->judul}}</div>
						</div>
					</a>
				@endforeach				
			</div>
		</div>
		<!-- INI iklan7
		==========================================================================================================-->
		<div class="row iklan7">
			<div class="col-md-12">
				<img src="{{$iklan['iklan7']['gambar_iklan']}}" width="100%" height="60px">
			</div>
		</div>
		<hr>
		<!-- INI berita Berita Terkini
		==========================================================================================================-->
		<h4 style="text-align: left;" class="berita-terkini-header"><span class="berita-terkini">BERITA TERKINI</span></h4>
		@foreach($berita_terbaru_first as $news)
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
					</a>
					<div class="bt-info">
						<div class="bt-kategori">{{App\Model\Kategori::detail($news->id_kategori)->nama_kategori}}</div>
						<div class="bt-tanggal">{{Time::IndonesiaMonth($news->time)}}</div>
					</div>
				</td>
			</tr>
		</table>
		@endforeach
		<hr>
		<!-- INI SLIDE IMAGE
		==========================================================================================================-->
		<h4 style="text-align: left;" class="berita-terkini-header"><span class="berita-terkini">FOTO</span></h4>
		<div class="image-content">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators image-controll-small-ci" style="z-index: 0;">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox" style="height: 540px">
					@php
					$no_c = 0;
					@endphp

					@foreach($foto as $image)
					@if($no_c == 0)
					<a href="{{url('view/'.App\Model\Kategori::detail($image->id_kategori)->nama_kategori.'/'.$image->url)}}" class="item active" target="_blank">
					@else
					<a href="{{url('view/'.App\Model\Kategori::detail($image->id_kategori)->nama_kategori.'/'.$image->url)}}" class="item" target="_blank">
					@endif
						<img src="{{$image->source}}" alt="" class="image-content-small">
						<div class="carousel-caption image-content-caption">
							{{str_limit($image->judul, 50)}}
						</div>
					</a>
					@php
					$no_c = $no_c + 1
					@endphp
					@endforeach
				</div>
			</div>
		</div>
		<hr>
		<!-- INI berita Berita Terkini
		==========================================================================================================-->
		<h4 style="text-align: left;" class="berita-terkini-header"><span class="berita-terkini">BERITA TERKINI</span></h4>

		@foreach($berita_terbaru_second as $news)
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
							<div class="bt-kategori">{{App\Model\Kategori::detail($news->id_kategori)->nama_kategori}}</div>
							<div class="bt-tanggal">{{Time::IndonesiaMonth($news->time)}}</div>
						</div>
					</a>
					
				</td>
			</tr>
		</table>
		@endforeach
		@if($berita_terbaru_first->count() > 2)
		<div class="btn-loadmore">
			<button class="btn btn-primary btn-block">Muat berita lebih banyak</button>
		</div>
		@endif
	</div>
	<!--// 1.2.2 Bagian Sidebar
	==================================================================================================== -->
	<div class="col-sm-3 remove-padding-grid">
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
	<div class="col-sm-3 remove-padding-grid">
		<img src="{{$iklan['iklan4']['gambar_iklan']}}" alt="Chicago" style="width:100%;">
	</div>
	@if($berita_terbaru_first->count() > 2)
	<div class="col-md-3 remove-padding-grid">
		<div class="berita-top">
			<h4 class="title">
				Berita Terpopuler
			</h4>
			@foreach($berita_popular as $popular)
			<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $popular->id_kategori)->first()->nama_kategori}}/{{$popular->url}}" class="list-berita-top" target="_blank">
				<div class="kategori">{{App\Model\Kategori::where('id', $popular->id_kategori)->first()->nama_kategori}}</div>
				<div class="judul">{{$popular->judul}}</div>
				<div class="preview">{{str_limit($slider->judul, 50)}}</div>
			</a>
			@endforeach
		</div>

	</div>
	<div class="col-sm-3 remove-padding-grid">
		<img src="{{$iklan['iklan4']['gambar_iklan']}}" alt="Chicago" style="width:100%;">
	</div>
	@endif
</div>
@endsection