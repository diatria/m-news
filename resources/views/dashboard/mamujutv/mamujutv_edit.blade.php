@extends('dashboard.mamujutv.mamujutv_layout')
@section('mamujutv-content')
<div class="col-md-12">
	<div class="card">
		<div class="card-title">
			<h4>Edit Mamuju TV</h4>
			<hr>
		</div>
		<div class="card-body">
			<div class="basic-form">
				<form action="{{url('db_mamujutv/change')}}/{{$change->id}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Judul</label>
								<input type="text" name="judul" value="{{$change->judul}}" class="form-control input-flat" placeholder="Judul" required="">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Konten Mamuju TV</label>
								<textarea class="text-editor" name="konten">{{$change->konten}}</textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Kategori</label>
								<select name="kategori" class="form-control input-flat">
									<option value="{{$change->id_kategori}}" selected="">Pilih kategori</option>
									@foreach($kategori as $kategori_r)
										<option value="{{$kategori_r->id}}">{{$kategori_r->nama_kategori}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Upload</label>
								<p class="text-muted m-b-15 f-s-12">Tipe yang didukung hanya <code>gambar atau video</code> pililhlah salah satu metode yang akan anda gunakan <code>upload atau menggunakan link</code></p>
								<div class="row">
									<div class="col-md-6">
										<div class="custom-file input-flat">
											<input type="file" name="source" class="form-control input-flat">
										</div>
									</div>
									<div class="col-md-6">
										<div class="custom-file input-flat">
											<input type="text" name="source_link" class="form-control input-flat" placeholder="https://example.com">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Tipe Upload</label>
								<select name="s_type" class="form-control input-flat" required="">
									<option value="gambar">Gambar</option>
									<option value="video">video</option>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if($change->source_type == 'gambar')
			<img src="{{$change->source}}" alt="">
		@elseif($change->source_type == 'video')
			<object width="420" height="315" data="{{$change->source}}">
			</object>
		@elseif($change->source_type == 'embed')
			{!! $change->source !!}
		@endif
      </div>
    </div>
  </div>
</div>
@endsection