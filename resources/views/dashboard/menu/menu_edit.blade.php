@extends('dashboard.kategori.kategori_layout')
@section('menu-content')
<div class="col-md-12">
	<div class="card">
		<div class="card-title">
			<h4>Edit Kategori</h4>
			<hr>
		</div>
		<div class="card-body">
			<div class="basic-form">
				<form action="{{url('db_kategori/change').'/'.$change->id}}" method="post">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Kategori</label>
								<input type="text" name="kategori" class="form-control input-flat" value="{{$change->nama_kategori}}" placeholder="Nama Kategori (EX: olahraga)" onkeyup="gurl()">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">URL</label>
								<input type="text" name="url" class="form-control input-flat" placeholder="" disabled="">
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection