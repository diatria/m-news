@extends('dashboard.layout')
@section('header')
<link href="{{URL::asset('css/lib/sweetalert/sweetalert.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/lib/font-awesome/fontawesome-all.css')}}" rel="stylesheet">
@endsection
@section('content')
@php
$directory = 'Kategori';
@endphp
<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-primary">{{$directory}}</h3> </div>
		<div class="col-md-7 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active">{{$directory}}</li>
			</ol>
		</div>
	</div>
	<!-- End Bread crumb -->
	<!-- Container fluid  -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				@if (session('message'))
					<div class="alert alert-{{session('status')}} alert-dismissible fade show text-dark" role="alert">
						<strong >Pesan : </strong> {{ session('message') }}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif
				
			</div>
		</div>
		<div class="row">
			@yield('kategori-content')
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-title">
						Data Nama Kategori
					</div>
					<div class="card-body">
						<table class="table">
							<thead class="thead-default">
								<tr>
									<td>No</td>
									<td>Nama Kategori</td>
									<td width="100">Menu</td>
								</tr>
								@php
								$no = 0;
								@endphp
								@foreach($data as $data)
								<tr>
									<td>{{$no = $no + 1}}</td>
									<td>{{$data->nama_kategori}}</td>
									<td>
										@if($data->as_menu)
										<a href="{{url('db_menu/change')}}/{{$data->id}}" class="btn btn-danger">Sembunyikan sebagai menu</a>
										@else
										<a href="{{url('db_menu/change')}}/{{$data->id}}" class="btn btn-primary">Tampilkan sebagai menu</a>
										@endif
									</td>
								</tr>
								@endforeach
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection
@section('footer')
@endsection