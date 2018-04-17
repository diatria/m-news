@extends('frontpage.frontpage_layout')
@section('content')
<div class="col-sm-9">
	<!-- INI SLIDE IMAGE
	==========================================================================================================-->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			@php
			$no_a = 0;
			@endphp
			@foreach($berita_slider as $slider)
			
			@if($no_a == 0)
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			@else
			<li data-target="#myCarousel" data-slide-to="{{$no_a}}"></li>
			@endif
			@endforeach
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" style="height: 350px">
			@php
			$no_b = 0;
			@endphp
			@foreach($berita_slider as $slider)
			
			@if($no_b == 0)
			<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $slider->id_kategori)->first()->nama_kategori}}/{{$slider->url}}" class="item active">
				@else
				<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $slider->id_kategori)->first()->nama_kategori}}/{{$slider->url}}" class="item">
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
					<div class="carousel-caption">
						<h2>{{$slider->judul}}</h2>
					</div>
				</a>
				@php
				$no_b = $no_b + 1
				@endphp
				@endforeach
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<br>
		<!-- INI LIST 4 IMAGE
		==========================================================================================================-->
		<div class="row">
			<div class="col-md-3">
				<div class="thumbnail">
					<a href="/w3images/lights.jpg" target="_blank">
						<img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="thumbnail">
					<a href="/w3images/nature.jpg" target="_blank">
						<img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="thumbnail">
					<a href="/w3images/fjords.jpg" target="_blank">
						<img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="thumbnail">
					<a href="/w3images/fjords.jpg" target="_blank">
						<img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- INI Iklan 6
		==========================================================================================================-->
		<div class="row iklan6">
			<img src="iklan6.png" width="95%" height="60px"/>
		</div>
		<hr />
		<!-- INI berita Infografis
		==========================================================================================================-->
		<h4 style="text-align: left;"><a><u>INFO GRAFIS</u></a></h4>
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="/w3images/lights.jpg" target="_blank">
						<img src="slide/gbr1.png" alt="Lights" style="width:100%">
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="/w3images/nature.jpg" target="_blank">
						<img src="slide/gbr2.png" alt="Nature" style="width:100%">
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="/w3images/fjords.jpg" target="_blank">
						<img src="slide/gbr3.png" alt="Fjords" style="width:100%">
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="/w3images/fjords.jpg" target="_blank">
						<img src="slide/gbr3.png" alt="Fjords" style="width:100%">
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="/w3images/lights.jpg" target="_blank">
						<img src="slide/gbr2.png" alt="Lights" style="width:100%">
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="/w3images/nature.jpg" target="_blank">
						<iframe width="100%" height="auto" src="https://www.youtube.com/embed/KqwTm80y-Ok" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
						<div class="caption">
							<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- INI iklan7
		==========================================================================================================-->
		<div class="row iklan7">
			<img src="iklan7.png" width="95%" height="60px">
		</div>
		<hr>
		<!-- INI berita Berita Terkini
		==========================================================================================================-->
		<h4 style="text-align: left;"><a><u>BERITA TERKINI</u></a></h4>
		<table style="text-align: left;    display: table; border-collapse: separate;">
			<tr>
				<td colspan="2" rowspan="2" style="clear: both; padding: 0; margin: 0;" ><img src="beritaterkini.png"></td>
				<td><a href="#"><h2>Emil Dardak Minta Baliho Bergambar Khofifah-Emil Diturunkan</h2></a></td>
			</tr>
			<tr>
				<td>news  |  15/12/2017</td>
			</tr>
			<tr>
				<td colspan="2" rowspan="2" ><img src="beritaterkini.png"></td>
				<td><a href="#"><h2>Emil Dardak Minta Baliho Bergambar Khofifah-Emil Diturunkan</h2></a></td>
			</tr>
			<tr>
				<td>news  |  15/12/2017</td>
			</tr>
			<tr>
				<td colspan="2" rowspan="2" ><img src="beritaterkini.png"></td>
				<td><a href="#"><h2>Emil Dardak Minta Baliho Bergambar Khofifah-Emil Diturunkan</h2></a></td>
			</tr>
			<tr>
				<td>news  |  15/12/2017</td>
			</tr>
			<tr>
				<td colspan="2" rowspan="2" ><img src="beritaterkini.png"></td>
				<td><a href="#"><h2>Emil Dardak Minta Baliho Bergambar Khofifah-Emil Diturunkan</h2></a></td>
			</tr>
			<tr>
				<td>news  |  15/12/2017</td>
			</tr>
			<tr>
				<td colspan="2" rowspan="2" ></td>
				<td></td>
			</tr>
		</table>
		<!--// 1.2.2 Bagian video 1
		==================================================================================================== -->
		<table style="text-align: left; border-spacing: 10px;   display: table; border-collapse: separate;">
			<tr>
				<td colspan="2" rowspan="2" width="70%" height="auto"><iframe width="100%" height="300px" src="https://www.youtube.com/embed/KqwTm80y-Ok" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></td>
				<td><a href="#"><h2>Emil Dardak Minta Baliho Bergambar Khofifah-Emil Diturunkan</h2></a></td>
			</tr>
			<tr>
				<td width="30%">news  |  15/12/2017</td>
			</tr>
		</table>
		<!--// 1.2.2 Bagian Berita Terkini
		==================================================================================================== -->
		<table style="text-align: left; border-spacing: 10px;   display: table; border-collapse: separate;">
			<tr>
				<td colspan="2" rowspan="2" ><img src="beritaterkini.png"></td>
				<td><a href="#"><h2>Emil Dardak Minta Baliho Bergambar Khofifah-Emil Diturunkan</h2></a></td>
			</tr>
			<tr>
				<td>news  |  15/12/2017</td>
			</tr>
			<tr>
				<td colspan="2" rowspan="2" ><img src="beritaterkini.png"></td>
				<td><a href="#"><h2>Emil Dardak Minta Baliho Bergambar Khofifah-Emil Diturunkan</h2></a></td>
			</tr>
			<tr>
				<td>news  |  15/12/2017</td>
			</tr>
		</table>
		<hr>
		<!-- INI SLIDE IMAGE
		==========================================================================================================-->
		<h4 style="text-align: left;"><a><u>IMAGES</u></a></h4>
		<div class="w3-content" style="max-width:800px">
			<img class="mySlides" src="slide/gbr1.png" style="width:100%">
			<img class="mySlides" src="slide/gbr2.png" style="width:100%">
			<img class="mySlides" src="slide/gbr3.png" style="width:100%">
		</div>
		<div class="w3-center">
			<button class="w3-button demo" onclick="currentDiv(1)">1</button>
			<button class="w3-button demo" onclick="currentDiv(2)">2</button>
			<button class="w3-button demo" onclick="currentDiv(3)">3</button>
		</div>
		<script>
		var slideIndex = 1;
		showDivs(slideIndex);
		function plusDivs(n) {
		showDivs(slideIndex += n);
		}
		function currentDiv(n) {
		showDivs(slideIndex = n);
		}
		function showDivs(n) {
		var i;
		var x = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("demo");
		if (n > x.length) {slideIndex = 1}
		if (n < 1) {slideIndex = x.length}
		for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" w3-red", "");
		}
		x[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " w3-red";
		}
		</script>
		<hr>
		<!-- INI berita Berita Terkini
		==========================================================================================================-->
		<h4 style="text-align: left;"><a><u>BERITA TERKINIs</u></a></h4>

		@foreach($berita_terbaru as $news)
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
				<td class="bt"><a href="#"><h2>{{$news->judul}}</h2></a></td>
			</tr>
		</table>
		@endforeach
		<!--// 1.2.2 Bagian video 1
		==================================================================================================== -->
		{{-- <table style="text-align: left; border-spacing: 10px;   display: table; border-collapse: separate;" class="table-bt">
			<tr>
				<td colspan="2" rowspan="2" width="70%" height="auto"><iframe width="100%" height="300px" src="https://www.youtube.com/embed/KqwTm80y-Ok" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></td>
				<td><a href="#"><h2>Emil Dardak Minta Baliho Bergambar Khofifah-Emil Diturunkan</h2></a></td>
			</tr>
			<tr>
				<td width="30%">news  |  15/12/2017</td>
			</tr>
		</table> --}}
	</div>
	<!--// 1.2.2 Bagian Sidebar
	==================================================================================================== -->
	<div class="col-sm-3">
		<img src="iklan4.png" alt="Chicago" style="width:100%;">
		<img src="iklan5.png" alt="Chicago" style="width:100%;">
	</div>
	<div class="col-md-3">
		@foreach($berita_popular as $popular)
		<div class="thumbnail">
			<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $popular->id_kategori)->first()->nama_kategori}}/{{$popular->url}}" target="_blank">
				@if($popular->source_type == 'gambar')
					<img src="{{$popular->source}}" alt="Los Angeles" style="width:100%;">
				@elseif($popular->source_type == 'video')
					<object data="{{$popular->source}}" style="width: 100%;">
					</object>
				@elseif($popular->source_type == 'embed')
					<div class="embed unset">
						{!! $popular->source !!}
					</div>
				@endif
				<div class="caption">
					<p>{{$popular->judul}}</p>
				</div>
			</a>
		</div>
		@endforeach
	</div>
</div>
@endsection