@extends('dashboard.layout')
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
			<div class="col-md-12">
				<div class="card">
					<div class="card-title">
						<h4>Input {{$directory}}</h4>
						<hr>
					</div>
					<div class="card-body">
						<div class="basic-form">
							<form action="{{url('db_pengguna/add')}}" method="post" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >Nama</label>
											<input name="nama" type="text" class="form-control" placeholder="Nama lengkap">
										</div>
										<div class="form-group">
											<label >Username</label>
											<input name="username" type="text" class="form-control" placeholder="Username">
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Email</label>
											<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Password</label>
											<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group" style="height: 320px;">
											<label>Upload Foto</label>
											<label for="image-upload" id="image-label" class="btn btn-light btn-block">Choose File</label>
											<input type="file" name="image" id="image-upload" style="display: none;" />
											<div id="image-preview" style="height: 320px;">

											</div>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('footer')
<script src="https://opoloo.github.io/jquery_upload_preview/assets/js/jquery.uploadPreview.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$.uploadPreview({
	    	input_field: "#image-upload",   // Default: .image-upload
	    	preview_box: "#image-preview",  // Default: .image-preview
	    	label_field: "#image-label",    // Default: .image-label
	    	label_default: "Choose File",   // Default: Choose File
			label_selected: "Change File",  // Default: Change File
	    	no_label: false                 // Default: false
		});
	});
</script>
@endsection