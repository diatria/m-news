<?php $__env->startSection('header'); ?>
<link href="<?php echo e(URL::asset('css/lib/sweetalert/sweetalert.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('css/lib/font-awesome/fontawesome-all.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php
$directory = 'Iklan';
?>
<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-primary"><?php echo e($directory); ?></h3> </div>
		<div class="col-md-7 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active"><?php echo e($directory); ?></li>
			</ol>
		</div>
	</div>
	<!-- End Bread crumb -->
	<!-- Container fluid  -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php if(session('message')): ?>
					<div class="alert alert-<?php echo e(session('status')); ?> alert-dismissible fade show text-dark" role="alert">
						<strong >Pesan : </strong> <?php echo e(session('message')); ?>

						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
				
			</div>
		</div>
		<div class="row">
			<?php echo $__env->yieldContent('iklan-content'); ?>
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
									<td>Nama</td>
									<td>Keterangan</td>
									<td>Expired</td>
									<td>Penempatan</td>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
	<script src="<?php echo e(URL::asset('js/lib/datatables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/lib/datatables/datatables-init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/lib/sweetalert/sweetalert.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/lib/sweetalert/sweetalert.init.js')); ?>"></script>
	<script>
		$(document).ready(function(){
			var url = window.location.href;
			var arr = url.split("/");
			var url_result = arr[0] + "//" + arr[2];
			$("input[name='url']").val(url_result);

			// Data Table
			var data = <?php echo $data; ?>;
			var dTable = $('.table').DataTable({
				data: data,
				columns:[
					{data: null},
					{data: 'nama_iklan'},
					{data: 'keterangan'},
					{data: 'expired'},
					{data: 'position'},
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
	                window.location = "<?php echo e(url('db_iklan/destroy/')); ?>/"+id;
	            }
	            else {
	                window.location = "<?php echo e(url('db_iklan/change_viewer/')); ?>/"+id;
	            }
	        });
		}
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>