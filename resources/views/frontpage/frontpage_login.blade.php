<html>
<head>
	<meta charset="UTF-8">
	<title>Login | MamujuToday.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
	<link rel="stylesheet" href="{{asset('css/lib/mnews/logister-mnews.css')}}">
</head>
<body>
	<div class="container">
		<div class="login-card">
			<div class="login">
				@if (session('message'))
					<div class="alert alert-{{session('status')}} alert-dismissible fade show text-dark" role="alert">
						<strong >Pesan : </strong> {{ session('message') }}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif
				<h4 for="">Masuk</h4>
				<hr>
				<form action="{{url('login/verification')}}" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<a href="{{url('login/facebook')}}" class="btn btn-primary btn-block"><i class="fab fa-facebook-f" style="margin: 0 5px 0 0"></i> Facebook</a>
					</div>
					<div style="position: relative;">
						<hr>
						<div style="position: absolute;top: -13;text-align: center;display: block;width: 100%;">
							<span style="background-color: #FFF;padding: 0 5px;">Atau</span>
						</div>
					</div>
					<div class="form-group">
						<label >Email</label>
						<input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
						<label >Password</label>
						<input name="password" type="password" class="form-control" placeholder="Password">
					</div>
					<label for="">Belum punya akun ? Silahkan <a href="{{url('register')}}">Daftar</a></label>
					<button type="submit" class="btn btn-primary">Masuk</button>
				</form>
			</div>
		</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</html>