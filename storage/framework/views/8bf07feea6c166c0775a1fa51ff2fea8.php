<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo e($title); ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />


	<script src="/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Open+Sans:300,400,600,700"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
				urls: ['../../assets/css/fonts.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>


	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/azzara.min.css">
	<link rel="stylesheet" href="assets/css/demo.css">
	<link rel="stylesheet" href="assets/css/azzara.css">
</head>

<body>
	<div class="wrapper">
		
		<div class="main-header navbar-dark bg-dark"  >

			<div class="logo-header">

				<a href="/index.html" class="logo">
					<font alt="navbar brand" class="navbar-brand" color="white"> INVENTORI </font>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>



			
		</div>


		<div class="sidebar">

			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="/img/minimarket.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo e(Auth::user()->name); ?>

									<span class="user-level"><?php echo e(Auth::user()->role); ?></span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<a href="/dashboard">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>


                        
                        <?php if(Auth::user()->role == 'admin' || Auth::user()->role == 'karyawan'): ?>
						<li class="nav-item">
							<a href="/barangmasuk">
								<i class="fas fa-truck"></i>
								<p>Barang Masuk</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/rakbarang">
								<i class="fas fa-table"></i>
								<p>Rak Barang</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/barang">
								<i class="fas fa-briefcase"></i>
								<p>Stok Barang</p>
							</a>
						</li>
                                           
                        
						<li class="nav-item">
							<a data-toggle="collapse" href="#custompages">
								<i class="fas fa-file"></i>
								<p>Laporan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="custompages">
								<ul class="nav nav-collapse">
									<li>
										<a href="/barangterjual">
											<span class="sub-item">Data Laporan Terjual</span>
										</a>
									</li>
									<li>
										<a href="/barangkeluar">
											<span class="sub-item">Data Laporan Keluar</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
                        <?php endif; ?>

                        <?php if(Auth::user()->role == 'admin'): ?>
                        <li class="nav-item">
							<a data-toggle="collapse" href="#custompagess">
								<i class="fas fa-layer-group"></i>
								<p>Data Master</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="custompagess">
								<ul class="nav nav-collapse">
									<li>
										<a href="/user">
											<span class="sub-item">Data User</span>
										</a>
									</li>
									<li>
										<a href="/kategori">
											<span class="sub-item">Data Kategori</span>
										</a>
									</li>
								</ul>
							</div>
						</li>                      
                        <?php endif; ?>

						<li class="nav-item">
							<a href="/logout">
								<i class="fas fa-sign-out-alt"></i>
								<p>Logout</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
        <?php echo $__env->yieldContent('content'); ?>

	</div>
	<!--   Core JS Files   -->
	<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="/assets/js/core/popper.min.js"></script>
	<script src="/assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="/assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Azzara JS -->
	<script src="/assets/js/ready.min.js"></script>
	<!-- Azzara DEMO methods, don't include it in your project! -->
	<script src="/assets/js/setting-demo.js"></script>
	<!-- Sweet Alert -->
	<script src="/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#add-row').DataTable({});
		});
	</script>

    <!--<?php if(session('success')): ?>

	<script>
		//== Class definition
		var SweetAlert2Demo = function() {

			//== Demos
			var initDemos = function() {

				//== Sweetalert Demo 4
					swal({
						title: "SUCCESS",
						text: "<?php echo e(session('success')); ?>",
						icon: "success",
						buttons: {
							confirm: {
								text: "Confirm Me",
								value: true,
								visible: true,
								className: "btn btn-success",
								closeModal: true
							}
						}
					});

			};

			return {
				//== Init
				init: function() {
					initDemos();
				},
			};
		}();

		//== Class Initialization
		jQuery(document).ready(function() {
			SweetAlert2Demo.init();
		});
	</script>
    <?php endif; ?>-->

    <?php if(session('errorr')): ?>

	<script>
		//== Class definition
		var SweetAlert2Demo = function() {

			//== Demos
			var initDemos = function() {

				//== Sweetalert Demo 4
					swal({
						title: "ERROR",
						text: "<?php echo e(session('error')); ?>",
						icon: "error",
						buttons: {
							confirm: {
								text: "Login Kembali",
								value: true,
								visible: true,
								className: "btn btn-success",
								closeModal: true
							}
						}
					});

			};

			return {
				//== Init
				init: function() {
					initDemos();
				},
			};
		}();

		//== Class Initialization
		jQuery(document).ready(function() {
			SweetAlert2Demo.init();
		});
	</script>
    <?php endif; ?>

</body>
</html><?php /**PATH D:\laravel_inventory\resources\views/layout/layout.blade.php ENDPATH**/ ?>