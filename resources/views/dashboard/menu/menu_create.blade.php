@extends('dashboard.menu.menu_layout')
@section('menu-content')
<div class="col-md-12">
	<div class="card">
		<div class="card-title">
			<h4>Input Kategori</h4>
			<hr>
		</div>
		<div class="card-body">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="menu-tab" data-toggle="tab" href="#menu" role="tab" aria-controls="menu" aria-selected="true">Menu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="sub-menu-tab" data-toggle="tab" href="#sub-menu" role="tab" aria-controls="sub-menu" aria-selected="false">Sub Menu</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="menu" role="tabpanel" aria-labelledby="menu-tab">
					<div class="basic-form mt-3">
						<form action="{{url('db_menu/add')}}" method="post">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Menu</label>
										<select class="form-control" name="menu">
											<option value="">Pilih</option>
											@foreach($data as $r_data)
											<option value="{{$r_data->id}}">{{$r_data->nama_kategori}}</option>
											@endforeach
										</select>
										<input type="hidden" name="parent" value="parent">
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
				<div class="tab-pane" id="sub-menu" role="tabpanel" aria-labelledby="sub-menu-tab">
					<div class="basic-form mt-3">
						<form action="{{url('db_menu/add')}}" method="post">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Menu</label>
										<select class="form-control" name="parent">
											<option value="">Pilih</option>
											@foreach($menu as $r_data)
											<option value="{{$r_data->id}}">{{App\Model\Kategori::where('id', $r_data->nama_menu)->first()->nama_kategori}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Sub Menu</label>
										<select class="form-control" name="menu">
											<option value="">Pilih</option>
											@foreach($data as $r_data)
											<option value="{{$r_data->id}}">{{$r_data->nama_kategori}}</option>
											@endforeach
										</select>
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
@endsection