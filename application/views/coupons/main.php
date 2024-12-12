<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="js-no ie9"> <![endif]-->
<!--[if IE 10]> <html lang="en" class="js-no ie10"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Cuponera Cosmic Bowling</title>
	<link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon_bowling.png">

	<!-- Meta Tags -->

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Cupones Cosmic Bowling">
	<meta name="author" content="Reservas Cosmic Bowling">

	<!--  Boostrap Framework  -->
	<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

	<!--=== CSS - Dragonfly ===-->
	<link href="<?= base_url() ?>assets/css/themes/light-blue.css" rel="stylesheet" id="colors">

	<!--=== LESS - Dragonfly ===-->
	<!--    <link href="assets/less/themes/light-blue.less" rel="stylesheet/less">-->

	<!-- Google Fonts - Lato -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">

	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/70a301601b.js" crossorigin="anonymous"></script>
	<!-- CSS Animations -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet">

	<!--  Slippry Slideshow -->
	<link href="<?= base_url() ?>assets/css/slippry.min.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="<?= base_url() ?>assets/js/min/jquery.min.js"></script>
	<!--script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script-->
	<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.1.0/less.min.js"></script>-->

	<!-- Modernizr -->
	<script src="<?= base_url() ?>assets/js/min/modernizr.custom.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<style>
		/* Center the loader */
		#loader {
			position: absolute;
			left: 50%;
			top: 50%;
			z-index: 1;
			width: 150px;
			height: 150px;
			margin: -75px 0 0 -75px;
			border: 16px solid #f3f3f3;
			border-radius: 50%;
			border-top: 16px solid #3498db;
			width: 120px;
			height: 120px;
			-webkit-animation: spin 2s linear infinite;
			animation: spin 2s linear infinite;
		}

		@-webkit-keyframes spin {
			0% {
				-webkit-transform: rotate(0deg);
			}

			100% {
				-webkit-transform: rotate(360deg);
			}
		}

		@keyframes spin {
			0% {
				transform: rotate(0deg);
			}

			100% {
				transform: rotate(360deg);
			}
		}

		/* Add animation to "page content" */
		.animate-bottom {
			position: relative;
			-webkit-animation-name: animatebottom;
			-webkit-animation-duration: 1s;
			animation-name: animatebottom;
			animation-duration: 1s
		}

		@-webkit-keyframes animatebottom {
			from {
				bottom: -100px;
				opacity: 0
			}

			to {
				bottom: 0px;
				opacity: 1
			}
		}

		@keyframes animatebottom {
			from {
				bottom: -100px;
				opacity: 0
			}

			to {
				bottom: 0;
				opacity: 1
			}
		}
	</style>
	<!-- validando campos del formulario para su envio-->
	<script type="text/javascript">
		function validarForm() {
			var txtNombre = document.getElementById("#customer").value;
			var txtCorreo = document.getElementById("#email").value;

			if (txtNombre == '') {
				alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
				return false;
			}

			if (!(/\S+@\S+\.\S+/.test(txtCorreo))) {
				alert('ERROR: Debe escribir un correo válido');
				return false;
			}

			return true;
		}
	</script>

</head>

<body>
	<!-- Navigation -->
	<nav class="navbar navbar-default" role="navigation" id="navbarSettings">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="inicio">COSMIC<span class="text-primary"> BOWLING</span></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right ">

					<!--Home Pages -->
					<li><a id="closeUser" href="logout-client"><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp;&nbsp;Cerrar Sesi&oacute;n</a></li>

				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
	</nav>


	<div id="navbarSpaceBottom"></div>
	<section class="bg-20 bg-center bg-cover">
		<div class="bg-filter">
			<div class="container section-lg" style="padding-top:100px; padding-bottom:5px;">
				<h1 class="top-title">Cuponera Virtual</h1>
			</div>
		</div>
	</section>

	<section class="bg-grey-3">
		<div class="container section">
			<div class="row margin-b30-xs">

				<div class="col-sm-4">
					<div class="float-box center">

						<i class="fa-solid fa-user icon-c"></i>
						<div class="float-text">
							<h4 style="margin-top:5px;">Bienvenido:</h4>
							<h2 style="margin-top:10px;font-size:1.6em;"><?php echo $txt_nombre; ?></h2>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="float-box center">
						<i class="fa fa-ticket icon-c"></i>
						<div class="float-text">
							<h4 style="margin-top:5px;">Cupones Disponibles:</h4>
							<h2 id="activity" style="margin-top:10px;"><?php echo ($txt_nombre2 - $totalCupones); ?></h2>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="float-box center">
						<i class="fa fa-check icon-c"></i>
						<div class="float-text">
							<h4 style="margin-top:5px;">Cupones Generados:</h4>
							<h2 id="cupom" style="margin-top:10px;"><?php echo ($totalCupones); ?></h2>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="container section-lg" style="margin-top:0px; padding-top:40px;">
		<div class="row">
			<div class="col-md-6 col-sm-5">
				<p>Cosmic Bowling les da la bienvenida, usted ha sido beneficiado con cupones de descuento, los mismos que podrán ser generados por este medio, el detalle de los cupones asignados a usted son:</p>

				<h4 style="margin-top:5px;">Cupones Disponibles:</h4>
				<h2 style="margin-top:10px;"><?php echo $txt_nombre2 ?></h2>

				<h4 style="margin-top:5px;">Fecha de Vencimiento:</h4>
				<h2 style="margin-top:10px;"><?php echo $txt_nombre4 ?></h2>
			</div>

			<div class="col-md-6 col-sm-7">

				<!-- Contact Form -->
				<p style="color:red; text-align: center;" id="demo1"></p>
				<div id="form-messages"></div>
				<form class="form-horizontal" onSubmit="return validarForm();" role="form" id="ajax-contact" method="post" action="<?= base_url() ?>assets/php/mailer.php">
					<div class="form-group icon">
						<label for="cupon" class="col-sm-3 control-label">Nro. Cupones</label>
						<div class="col-sm-9 ">
							<div class="control">
								<select id="cupon" class="form-control" name="cupon" disabled="true">
									<option value="">Seleccione Nro. Cupones</option>
									<option value="1" selected>1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
								<i class="fa fa-ticket"></i>
							</div>
						</div>
					</div>
					<div class="form-group icon">
						<label for="customer" class="col-sm-3 control-label">Nombre</label>
						<div class="col-sm-9 ">
							<div class="control">
								<input name="customer" type="text" id="customer" value="" class="form-control" placeholder="Nombre del cliente" required />
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					<div class="form-group icon">
						<label for="email" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-9 ">
							<div class="control">
								<input type="email" class="form-control" id="email" value="" placeholder="Ingrese email" name="email" required>
								<i class="fa fa-envelope"></i>
							</div>
						</div>
					</div>
					<div class="form-group icon">
						<label for="email" class="col-sm-3 control-label">DNI</label>
						<div class="col-sm-9 ">
							<div class="control">
								<input type="number" class="form-control" value="" id="dni" placeholder="Ingrese DNI" name="dni" required>
								<i class="fa-solid fa-address-card"></i>
							</div>
						</div>
					</div>


					<div class="form-group icon">
						<div class="col-sm-offset-3 col-sm-9">
							
								<button id="btnCupon" type="button" class="btn btn-primary" onclick="myFunction1();"
									<?php if (($txt_nombre2 - $totalCupones) <= 0) { echo 'disabled'; } ?>
								><i class="fa fa-paper-plane-o"></i>Generar Cupones</button>
							
						</div>
						<div class="col-sm-3">
							<div id="loader" class="hidden text-right"></div>
						</div>
					</div>
				</form>
				<div class="space visible-xs"></div>
			</div>
		</div>
	</section>


	<!-- Scripts-->
	<!--Back to top-->
	<a href="#" class="back-to-top">
		<i class="fa fa-angle-up"></i>
	</a>


	<!-- Modal Exito -->
	<div class="modal fade" id="myModalExito" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content" style="margin-top: 77px;">
				<div class="modal-header  modal-header-success">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h4 class="modal-title">Generación de Cupón.</h4>
				</div>
				<div class="modal-body">
					<p>Su operación se realizo con éxito.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Error -->
	<div class="modal fade" id="myModalError" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content" style="margin-top: 77px;">
				<div class="modal-header modal-header-danger">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title">Generación de Cupón.</h4>
				</div>
				<div class="modal-body">
					<p>La operación no se realizo satisfactoriamente</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<script>
		var myVar;

		function myFunction() {
			myVar = setTimeout(showPage, 3000);
		}

		function showPage() {
			document.getElementById("loader").style.display = "none";
			document.getElementById("myDiv").style.display = "block";
		}
	</script>
	<script type="text/javascript">
		function myFunction1() {
			var inpObj1 = document.getElementById("customer");
			var inpObj2 = document.getElementById("email");
			if (!inpObj1.checkValidity()) {
				document.getElementById("demo1").innerHTML = inpObj1.validationMessage;
			} else if (!inpObj2.checkValidity()) {
				document.getElementById("demo1").innerHTML = inpObj2.validationMessage;
			} else {
				$(this).attr('disabled', true);
				var nro = $("#cupon").val();
				var fullData = $("form").serialize() + "&cupon=" + nro;
				
				$("#loader").removeClass("hidden");				
				$.post('generateCupon', fullData, function(data) {					
					if ($.trim(data) === "OK") {
						$("#loader").addClass("hidden");
						$("#myModalExito").modal('show', {
							buttons: [{
								action: function(dialog) {
									dialog.close();
								}
							}]
						});
						$("#customer").val('');
						$("#email").val('');
						$("#btnCupon").attr('disabled', false);
						setTimeout(function() {
								location.reload();
							}, 3000);

						// $.post('controller/prc_lastdata.php', function(datos) {
						// 	var views = datos.split(',');
						// 	$("#activity").html(views[0]);
						// 	$("#cupom").html(views[1]);
						// 	setTimeout(function() {
						// 		location.reload();
						// 	}, 3000);
						// });

					} else {
						$("#myModalError").modal('show');
					}
				});
			}
		}
	</script>


	<!--script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script-->

	<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.1.0/less.min.js"></script>-->



	<!-- Bootstrap Plugin - open dropdown on hover -->
	<script src="<?=base_url()?>assets/js/min/bootstrap-hover-dropdown.min.js"></script>

	<!-- LESS preprocessor -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/1.7.4/less.min.js"></script>

	<!-- WOW.js - loading animations -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.6/wow.min.js"></script>

	<!-- Knobs - our skills -->
	<script src="https://cdn.jsdelivr.net/jquery.knob/1.2.9/jquery.knob.min.js"></script>

	<!-- Slippry - Slideshow -->
	<script src="<?=base_url()?>assets/js/min/slippry.min.js"></script>

	<!-- Mixitup plugin - Portfolio Filter Grid -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/1.5.6/jquery.mixitup.min.js"></script>

	<!-- Make sticky whatever elements -->
	<script src="https://cdn.jsdelivr.net/jquery.sticky/1.0.0/jquery.sticky.min.js"></script>

	<!-- Smooth sroll -->
	<script src="https://cdn.jsdelivr.net/jquery.nicescroll/3.5.4/jquery.nicescroll.min.js"></script>

	<!-- Contact Form -->
	<script src="<?=base_url()?>assets/js/min/contact-form.min.js"></script>

	<!-- Must be last of all scripts -->
	<script src="<?=base_url()?>assets/js/min/scripts.min.js"></script>

	<!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


	<!-- Footer-->
	<footer class="footer">
		<div class="footer-bottom">
			<div class="container">
				<p>&copy; 2014 Cosmic Bowling. Todos los derechos son reservados.</p>
			</div>
		</div>
	</footer>

</body>

</html>
