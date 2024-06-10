<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo e($title); ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type=""/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/azzara.min.css">
</head>
<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Silahkan Login</h3>
        <form method='POST' action="/cek_login">
        <?php echo csrf_field(); ?>
			<div class="login-form">
				<div class="form-group form-floating-label">
					<input id="email" name="email" type="email" class="form-control input-border-bottom" required>
					<label for="username" class="placeholder">Email</label>
				</div>
				<div class="form-group form-floating-label">
					<input id="password" name="password" type="password" class="form-control input-border-bottom" required>
					<label for="password" class="placeholder">Password</label>
					<!--<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>-->
				</div>
				
				<div class="form-action mb-3">
					<button type='submit' href="#" class="btn btn-primary btn-rounded btn-login">Masuk</button>
				</div>
			</div>
        </form>
		</div>
	</div>
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/ready.js"></script>

    <!-- Sweet Alert -->
	<script src="/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <!-- Bootstrap Toggle -->
	<script src="/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>


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

    <?php if(session('error')): ?>

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
</html><?php /**PATH D:\laravel_inventory\resources\views/index.blade.php ENDPATH**/ ?>