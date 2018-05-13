@extends('dashboard.layout')
@section('header')
<link href="{{URL::asset('css/lib/sweetalert/sweetalert.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/lib/font-awesome/fontawesome-all.css')}}" rel="stylesheet">
@endsection
@section('content')
@php
$directory = 'User';
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
			@yield('pengguna-content')
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-title">
						Data Nama {{$directory}} Admin
					</div>
					<div class="card-body">
						<table class="table">
							<thead class="thead-default">
								<tr>
									<td>No</td>
									<td>Nama {{$directory}}</td>
									<td>Email</td>
									<td>Tgl Daftar</td>
									<td>Status</td>
									<td>Action</td>
								</tr>
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
<script src="{{URL::asset('js/lib/datatables/datatables.min.js')}}"></script>
<script src="{{URL::asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')}}"></script>
<script src="{{URL::asset('js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')}}"></script>
<script src="{{URL::asset('js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('js/lib/datatables/datatables-init.js')}}"></script>
<script>
	$(document).ready(function(){
		var url = window.location.href;
		var arr = url.split("/");
		var url_result = arr[0] + "//" + arr[2];
		$("input[name='url']").val(url_result);

		// Data Table
		var data = {!! $data !!}
		$('.table').DataTable({
			data: data,
			columns:[
				{data: 'id'},
				{data: 'name'},
				{data: 'email'},
				{data: 'created_at'},
				{data: 'active'},
				{
			      data: 'id',
			      render: function(data, type, row){
			      	return '<button type="button" class="btn btn-secondary" onclick="swaaction('+data+')">Ubah/Hapus</button>'
			      }
			    }
			]
		});
	});
</script>
@endsection