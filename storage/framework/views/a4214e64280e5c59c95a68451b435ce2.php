

<?php $__env->startSection('content'); ?>

<div class="main-panel">
	<div class="content">
		<div class="page-inner">

			<div class="row">
				<div class="col-md-12">
					<div class="card" style="height:700px;">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">SELAMAT DATANG</h4>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-6 col-md-3">
									<div class="card card-stats card-round">
										<div class="card-body">
											<div class="row align-items-center">
												<div class="col-icon">
													<div class="icon-big text-center icon-info bubble-shadow-small">
														<i class="far fa-newspaper"></i>
													</div>
												</div>
												<div class="col col-stats ml-3 ml-sm-0">
													<div class="numbers">
														<p class="card-category">omset penjualan bulan ini </p>
														<h4 class="card-title">Rp 20.000.000</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="card card-stats card-round">
										<div class="card-body">
											<div class="row align-items-center">
												<div class="col-icon">
													<div class="icon-big text-center icon-success bubble-shadow-small">
														<i class="far fa-chart-bar"></i>
													</div>
												</div>
												<div class="col col-stats ml-3 ml-sm-0">
													<div class="numbers">
														<p class="card-category">Profit Bulan ini</p>
														<h4 class="card-title">Rp 8.100.345</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="card card-stats card-round">
										<div class="card-body">
											<div class="row align-items-center">
												<div class="col-icon">
													<div class="icon-big text-center icon-secondary bubble-shadow-small">
														<i class="far fa-check-circle"></i>
													</div>
												</div>
												<div class="col col-stats ml-3 ml-sm-0">
													<div class="numbers">
														<p class="card-category">Barang Terjual Bulan ini </p>
														<h4 class="card-title">287 Barang</h4>
													</div>
												</div>
											</div>
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
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel_inventory\resources\views/dashboard.blade.php ENDPATH**/ ?>