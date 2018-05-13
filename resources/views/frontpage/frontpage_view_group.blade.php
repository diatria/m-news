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
      @foreach($data_slider as $slider)
      
      @if($no_b == 0)
      <a href="{{url('view')}}/{{App\Model\Kategori::where('id', $slider->id_kategori)->first()->nama_kategori}}/{{$slider->url}}" class="item active" target="_blank">
        @else
        <a href="{{url('view')}}/{{App\Model\Kategori::where('id', $slider->id_kategori)->first()->nama_kategori}}/{{$slider->url}}" class="item" target="_blank">
          @endif
          @if($slider->source_type == 'gambar')
          <img src="{{$slider->source}}" alt="Los Angeles" style="width:100%; height: 350px;">
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
        <!-- INI Iklan 6
    ==========================================================================================================-->
    <div class="row iklan6">
      <div class="col-md-12">
        <img src="{{$iklan['iklan6']['gambar_iklan']}}" width="100%" height="60px"/>
      </div>
    </div>
    <hr>
    <div class="row">
       @foreach($data as $artikel)
      <div class="col-md-6">
        <a href="{{url('view')}}/{{App\Model\Kategori::where('id', $artikel->id_kategori)->first()->nama_kategori}}/{{$artikel->url}}" class="vw-grp" target="_blank">
          @if($artikel->source_type == 'gambar')
          <img src="{{$artikel->source}}" alt="Los Angeles" style="width:100%; height: 350px;">
          @elseif($artikel->source_type == 'video')
          <object artikel="{{$artikel->source}}" style="min-width: 600px;width: 100%;min-height: 350px;">
          </object>
          @elseif($artikel->source_type == 'embed')
          <div class="embed">
            {!! $artikel->source !!}
          </div>
          @endif
          <span class="content">
            <object><a href="{{url('view/'.App\Model\Kategori::where('id', $artikel->id_kategori)->first()->nama_kategori)}}" class="kategori">{{App\Model\Kategori::where('id', $artikel->id_kategori)->first()->nama_kategori}}</a></object>
            <span class="title">{{str_limit($artikel->judul, 110)}}</span>
          </span>
        </a>
      </div>
      @endforeach
    </div>
    <!-- INI iklan7
    ==========================================================================================================-->
    <div class="row iklan7">
      <div class="col-md-12">
        <img src="{{$iklan['iklan7']['gambar_iklan']}}" width="100%" height="60px">
      </div>
    </div>
    <hr>
  </div>
  <!--// 1.2.2 Bagian Sidebar
  ==================================================================================================== -->
  <div class="col-sm-3 remove-padding-grid">
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
  @if($data->count() > 4)
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
  @endif
  @if($data->count() > 10)
  <div class="col-sm-3 remove-padding-grid">
    <img src="{{$iklan['iklan4']['gambar_iklan']}}" alt="Chicago" style="width:100%;">
  </div>
  @endif
</div>
@endsection