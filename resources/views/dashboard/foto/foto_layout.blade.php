@extends('dashboard.layout')
@section('header')
<link href="{{URL::asset('css/lib/sweetalert/sweetalert.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/lib/font-awesome/fontawesome-all.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/lib/datepicker/bootstrap-datepicker3.min.css')}}" rel="stylesheet">
@endsection
@section('content')
@php
$directory = 'Foto';
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
						<button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif
				
			</div>
		</div>
		<div class="row">
			@yield('foto-content')
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-title">
						Data List Infografis
					</div>
					<div class="card-body">
						<table class="table">
							<thead class="thead-default">
								<tr>
									<td>No</td>
									<td>Judul</td>
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
    <script src="{{URL::asset('js/lib/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{URL::asset('js/lib/sweetalert/sweetalert.init.js')}}"></script>
    <script src="{{URL::asset('js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/lib/tinymce/js/tinymce/tinymce.min.js')}}"></script>
    <script src="{{URL::asset('js/lib/datepicker/bootstrap-datepicker.min.js')}}"></script>
	<script>
		$(document).ready(function(){
			// TinyMce
			tinymce.init({
				selector: '.text-editor',
				height: 300,
				theme: 'modern',
				plugins: [
					'advlist autolink lists link image charmap print preview anchor textcolor',
					'searchreplace visualblocks code fullscreen',
					'insertdatetime media table contextmenu paste code help wordcount'
				],
				toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
				image_advtab: true,
				file_picker_types: 'image',
				file_picker_callback: function(cb, value, meta) {
					var input = document.createElement('input');
					input.setAttribute('type', 'file');
					input.setAttribute('accept', 'image/*');

				    // Note: In modern browsers input[type="file"] is functional without 
				    // even adding it to the DOM, but that might not be the case in some older
				    // or quirky browsers like IE, so you might want to add it to the DOM
				    // just in case, and visually hide it. And do not forget do remove it
				    // once you do not need it anymore.

				    input.onchange = function() {
				    	var file = this.files[0];

				    	var reader = new FileReader();
				    	reader.onload = function () {
					        // Note: Now we need to register the blob in TinyMCEs image blob
					        // registry. In the next release this part hopefully won't be
					        // necessary, as we are looking to handle it internally.
					        var id = 'blobid' + (new Date()).getTime();
					        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
					        var base64 = reader.result.split(',')[1];
					        var blobInfo = blobCache.create(id, file, base64);
					        blobCache.add(blobInfo);

					        // call the callback and populate the Title field with the file name
					        cb(blobInfo.blobUri(), { title: file.name });
				    	};
    				reader.readAsDataURL(file);
					};

					input.click();
				},
				content_css: [
				'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
				'//www.tinymce.com/css/codepen.min.css'
				]
			});

			// DatePicker
			$('.datepicker').datepicker({
			    format: 'dd-mm-yyyy',
			    startDate: '-3d'
			});
			
			var url = window.location.href;
			var arr = url.split("/");
			var url_result = arr[0] + "//" + arr[2];
			$("input[name='url']").val(url_result);

			// Data Table
			var data = {!!$data!!}
			var dTable = $('.table').DataTable({
				data: data,
				columns:[
					{data: null},
					{data: 'judul'},
					{
				      data: 'id',
				      render: function(data, type, row){
				      	return '<button type="button" class="btn btn-secondary" onclick="swaaction('+data+')">Ubah/Hapus</button>'
				      }
				    }
				],
				order: [[ 1, 'asc' ]],
			});

			dTable.on( 'order.dt search.dt', function () {
				dTable.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
					cell.innerHTML = i+1;
				} );
			} ).draw();
		});
		function gurl(){
			var url = window.location.href;
			var arr = url.split("/");
			var input_url = encodeURIComponent($("input[name='kategori']").val());
			var url_result = arr[0] + "//" + arr[2] + "/" + input_url;
			$("input[name='url']").val(url_result);
		}
		function agurl(str_url){
			var url = window.location.href;
			var arr = url.split("/");
			var input_url = encodeURIComponent(str_url);
			var url_result = arr[0] + "//" + arr[2] + "/" + input_url;
			return url_result;
		}
		function swaaction(id) {
			swal({
	            title: "Ubah atau Hapus ?",
	            text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
	            type: "warning",
	            showCancelButton: true,
	            confirmButtonColor: "#DD6B55",
	            confirmButtonText: "Hapus !!",
	            cancelButtonText: "Edit",
	            closeOnConfirm: false,
	            closeOnCancel: false
	        },
	        function(isConfirm){
	            if (isConfirm) {
	                window.location = "{{url('db_foto/destroy/')}}/"+id;
	            }
	            else {
	                window.location = "{{url('db_foto/change_viewer/')}}/"+id;
	            }
	        });
		}
	</script>
@endsection