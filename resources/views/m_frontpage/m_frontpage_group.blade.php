@extends('m_frontpage.m_frontpage_layout')
@section('content')
<div class="berita">
	<div class="judul-block">
		<span>Berita terbaru</span>
	</div>
	@foreach($data as $data)
	<a href="{{url('view')}}/{{App\Model\Kategori::where('id', $data->id_kategori)->first()->nama_kategori}}/{{$data->url}}">
		<div class="list-berita">
			<div class="row rm-mp">
				<div class="col-5 rm-mp">
					@if($data->source_type == 'gambar')
					<img src="{{$data->source}}" alt="Los Angeles">
					@elseif($data->source_type == 'video')
					<object data="{{$data->source}}">
					</object>
					@elseif($data->source_type == 'embed')
					<div class="embed">
						{!! $data->source !!}
					</div>
					@endif
				</div>
				<div class="col-7">
					<div class="informasi">
						<div class="kategori">{{App\Model\Kategori::where('id', $data->id_kategori)->first()->nama_kategori}}</div>
						<div class="judul colored">{{$data->judul}}</div>
					</div>
				</div>
			</div>
		</div>
	</a>
	@endforeach
</div>
@endsection