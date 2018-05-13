@extends('dashboard.layout')
@section('header')
<link href="{{URL::asset('css/lib/sweetalert/sweetalert.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/lib/font-awesome/fontawesome-all.css')}}" rel="stylesheet">
@endsection
@section('content')
@php
$directory = 'Menu';
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
			@yield('menu-content')
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-title">
						Tree Menu
					</div>
					<div class="card-body">
						@php
						function x_render($menu, $sw = null)
					    {
					    	echo"<ul style='margin-left: 20px;'>";
					    	foreach ($menu as $menu) {
						    		if ($menu->parent == 'parent' || $sw == 'parent') {
									echo "<li style='list-style:square;'>".App\Model\Kategori::where('id', $menu->nama_menu)->first()->nama_kategori."</li>";
									$s_menu = App\Model\Menu::where('parent', $menu->id)->get();
									if ($s_menu) {
										// return (array) $s_menu;
										x_render($s_menu, 'parent');
									}
					    		}
					    	}
					    	echo "</ul>";
					    }

					    function render()
					    {
					    	$m_menu = App\Model\Menu::all();
							return x_render($m_menu);
					    }
					    echo render();
						@endphp
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection
@section('footer')
    <script src="{{URL::asset('js/lib/datatables/datatables-init.js')}}"></script>
    <script src="{{URL::asset('js/lib/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{URL::asset('js/lib/sweetalert/sweetalert.init.js')}}"></script>
	<script>
		$('#pills-tab a').on('click', function (e) {
			e.preventDefault()
			$(this).tab('show')
		})
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
	                window.location = "{{url('db_menu/destroy/')}}/"+id;
	            }
	            else {
	                window.location = "{{url('db_menu/change_viewer/')}}/"+id;
	            }
	        });
		}
	</script>
@endsection