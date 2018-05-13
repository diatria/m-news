
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="https://getbootstrap.com/favicon.ico">
	<title>User Dashboard</title>
	<!-- Bootstrap core CSS -->
	<link href="{{URL::asset('css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="https://getbootstrap.com/docs/4.0/examples/offcanvas/offcanvas.css" rel="stylesheet">
	
</head>

<body class="bg-light">

	<nav class="navbar navbar-expand-md fixed-top" style="background-color: #023340 !important">
		<a class="navbar-brand" href="{{url('/')}}" style="color: #FFF !important;"><img src="{{asset('images/mnews/LOGO-2.png')}}" alt="" style="height: 30px;"></a>
		<button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
			<span class="navbar-toggler-icon" style="color: #FFF !important;"></span>
		</button>
	</nav>

{{-- 	<div class="nav-scroller bg-white box-shadow">
		<nav class="nav nav-underline">
			<a class="nav-link active" href="#">Dashboard</a>
			<a class="nav-link" href="#">
				Friends
				<span class="badge badge-pill bg-light align-text-bottom">27</span>
			</a>
			<a class="nav-link" href="#">Explore</a>
			<a class="nav-link" href="#">Suggestions</a>
		</nav>
	</div> --}}

	<main role="main" class="container">
		<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow" style="background-color: #034759 !important">
			<img class="mr-3" src="{{Auth::user()->foto}}" alt="" width="48" height="48">
			<div class="lh-100">
				<h6 class="mb-0 text-white lh-100">{{Auth::user()->name}}</h6>
			</div>
		</div>

		{{-- <div class="my-3 p-3 bg-white rounded box-shadow">
			<h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
			<div class="media text-muted pt-3">
				<img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
				<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
					<strong class="d-block text-gray-dark">@username</strong>
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
				</p>
			</div>
			<div class="media text-muted pt-3">
				<img data-src="holder.js/32x32?theme=thumb&bg=e83e8c&fg=e83e8c&size=1" alt="" class="mr-2 rounded">
				<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
					<strong class="d-block text-gray-dark">@username</strong>
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
				</p>
			</div>
			<div class="media text-muted pt-3">
				<img data-src="holder.js/32x32?theme=thumb&bg=6f42c1&fg=6f42c1&size=1" alt="" class="mr-2 rounded">
				<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
					<strong class="d-block text-gray-dark">@username</strong>
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
				</p>
			</div>
			<small class="d-block text-right mt-3">
				<a href="#">All updates</a>
			</small>
		</div>

		<div class="my-3 p-3 bg-white rounded box-shadow">
			<h6 class="border-bottom border-gray pb-2 mb-0">Suggestions</h6>
			<div class="media text-muted pt-3">
				<img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
				<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
					<div class="d-flex justify-content-between align-items-center w-100">
						<strong class="text-gray-dark">Full Name</strong>
						<a href="#">Follow</a>
					</div>
					<span class="d-block">@username</span>
				</div>
			</div>
			<div class="media text-muted pt-3">
				<img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
				<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
					<div class="d-flex justify-content-between align-items-center w-100">
						<strong class="text-gray-dark">Full Name</strong>
						<a href="#">Follow</a>
					</div>
					<span class="d-block">@username</span>
				</div>
			</div>
			<div class="media text-muted pt-3">
				<img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
				<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
					<div class="d-flex justify-content-between align-items-center w-100">
						<strong class="text-gray-dark">Full Name</strong>
						<a href="#">Follow</a>
					</div>
					<span class="d-block">@username</span>
				</div>
			</div>
			<small class="d-block text-right mt-3">
				<a href="#">All suggestions</a>
			</small>
		</div> --}}
		<div class="my-3 p-3 bg-white rounded box-shadow">
			<h6>Pengaturan Akun</h6>
			<hr>
			<form class="row" action="{{url('user/dashboard/change')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="col-sm-6">
					<div class="form-group">
						<label>Nama</label>
						<input name="nama" type="text" class="form-control" placeholder="Nama" value="{{$user->name}}">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input name="username" type="text" class="form-control" placeholder="Username" value="{{$user->username}}">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input name="email" type="email" class="form-control" placeholder="Email" readonly="" value="{{$user->email}}">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input name="password" type="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-block">Simpan</button>
					</div>
				</div>
				<div class="col-sm-6">	
					<div class="form-group" style="height: 320px;">
						<label>Upload Foto</label>
						<label for="image-upload" id="image-label" class="btn btn-light btn-block">Choose File</label>
						<input type="file" name="image" id="image-upload" style="display: none;" />
						<div id="image-preview" style="height: 320px;">
							
						</div>
					</div>
				</div>
			</form>
		</div>
	</main>

    <!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="https://getbootstrap.com/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
	<script src="{{URL::asset('js/lib/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/lib/bootstrap/theme/holder.min.js')}}"></script>
    <script src="{{URL::asset('js/lib/bootstrap/theme/offcanvas.js')}}"></script>
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
</body>
</html>
