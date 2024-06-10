

<?php $__env->startSection('content'); ?>

<div class="main-panel">
	<div class="content">
		<div class="page-inner">

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">Barang Masuk</h4>
								<button class="btn btn-dark btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
									<i class="fa fa-plus"></i>
									Tambah Barang
								</button>
							</div>
						</div>
						<div class="card-body">



							<div class="table-responsiPOve">
								<table id="add-row" class="display table table-striped table-hover">
									<thead>
										<tr>
											<th></th>
											<th></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td>
												<a href="#" class="btn btn-xs btn-primary"> <i class="fa fa-edit"> Edit</i></a>
												<a href="#" class="btn btn-xs btn-danger"> <i class="fa fa-trash"> Hapus</i></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						New Row</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="" enctype="multipart/form-data">
				<div class="modal-body">

					<div class="form-group">
						<label>
							Nama
						</label>
						<input type="text" class="form-control" name="" placeholder="" required>
					</div>

				</div>

				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel_inventory\resources\views/home.blade.php ENDPATH**/ ?>