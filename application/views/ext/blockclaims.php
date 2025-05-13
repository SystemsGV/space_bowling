<!DOCTYPE html>
<html lang="es">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Libro De Reclamaciones</title>
	<link rel="stylesheet" href="<?= base_url() ?>claims/css/reclamaciones.css">
	<script src="<?= base_url() ?>claims/js/validacion.js"></script>
	<link href='<?= base_url() ?>new/images/favicon.ico' rel='icon' type='image/x-icon' />

	<script>
		function abrir(url) {
			open(url, '', 'top=300,left=300,width=300,height=300');
		}
	</script>


</head>

<body>
	<div class="wrap-header zerogrid">
		<div id="logo">
			<center><a href="<?= base_url() ?>"><img src="<?= base_url() ?>claims/iconos/logo.png" width="180" height="100"></a></center>
		</div>
	</div>
	<h1 id="fondoh1" align="center">LIBRO DE RECLAMACIONES</h1>
	<form class="form-register" action="<?= base_url() ?>correo-reclamo" method="post" name="formulario" onsubmit="return validacion()">
		<h2 class="form-titulo">Datos de la Persona que presenta el Reclamo:</h2>
		<div class="contenedor-inputs">
			<div class="linea">
				<label>Nombres(*)</label>
				<input type="text" id="nombre" name="nombre" placeholder="Escriba su nombre" class="input-35" pattern="[a-zA-ZÑÁÉÍÓÚáéíóú][a-zA-Zñáéíóú ]{1,30}" maxlength="20" required />
				<label>Apellidos(*)</label>
				<input type="text" id="apellidos" name="apellidos" placeholder="Escriba sus apellidos" class="input-35" pattern="[a-zA-ZÑÁÉÍÓÚáéíóú][a-zA-Zñáéíóú ]{1,30}" maxlength="30" />
			</div>
			<div class="linea">
				<label>Doc. Identidad(*)</label>
				<select id="tipo" name="tipo">
					<option value="">-- SELECCIONE --</option>
					<option value="DNI">DNI</option>
					<option value="CARNET DE EXTRANJERO">CARNET DE EXTRANJERO</option>
				</select>
				<input type="numero" id="numero" name="numero" placeholder="N° Documento" class="input-17" pattern="[0-9]{8,15}" maxlength="15" />
				<label>Departamento(*)</label>
				<select id="depart" name="depart">
					<option value="">-- SELECCIONE --</option>
					<option value="1">Amazonas</option>
					<option value="2">Ancash</option>
					<option value="2">Apurimac</option>
					<option value="3">Arequipa</option>
					<option value="4">Ayacucho</option>
					<option value="5">Cajamarca</option>
					<option value="6">Callao</option>
					<option value="7">Cusco</option>
					<option value="8">Huancavelica</option>
					<option value="9">Huanuco</option>
					<option value="10">Ica</option>
					<option value="11">Junin</option>
					<option value="12">La Libertad</option>
					<option value="13">Lambayeque</option>
					<option value="Lima">Lima</option>
					<option value="15">Loreto</option>
					<option value="16">Madre de Dios</option>
					<option value="17">Moquegua</option>
					<option value="18">Pasco</option>
					<option value="19">Piura</option>
					<option value="20">Puno</option>
					<option value="21">San Martin</option>
					<option value="22">Tacna</option>
					<option value="23">Tumbes</option>
					<option value="24">Ucayali</option>
				</select>
			</div>
			<div class="linea">
				<label>Distrito(*)</label>
				<input type="text" id="distrito" name="distrito" placeholder="Escriba su distrito" class="input-20" pattern="[a-zA-ZÑÁÉÍÓÚáéíóú][a-zA-Zñáéíóú ]{3,30}" maxlength="30" />
				<label>Dirección(*)</label>
				<input type="text" id="domicilio" name="domicilio" placeholder="Escriba su Dirección" pattern="[a-zA-ZÑÁÉÍÓÚáéíóú1234567890][a-zA-Zñáéíóú1234567890 ]{3,30}" class="input-50" maxlength="60" />
			</div>
			<div class="linea">
				<label>Telefono Fijo/Celular(*)</label>
				<input type="numero" id="telefono" name="telefono" placeholder="N° Telefono" class="input-17" pattern="[0-9]{6,15}" maxlength="15" />
				<label>E-mail(*)</label>
				<input type="email" id="email" name="email" placeholder="Escriba su cuenta de correo" class="input-50" maxlength="60" />
			</div>
		</div>
		<p>
		<h2 class="form-titulo">Información General:</h2>
		</p>
		<div class="contenedor-inputs">
			<div class="linea">
				<label>Local de Compra</label>
				<select id="tipoderq" name="tipoderq">
					<option value="Seleccione">-- Seleccione --</option>
					<option value="Cosmic Bowling - Reclamo">Cosmic Bowling</option>
				</select>
				<label>Identificación del bien contratado :</label>
				<!--<label><input type="radio" name="opcion" value="P">Producto</label>-->
				<label><input type="radio" name="opcion" value="S">Servicio</label><br />
				<label>Monto Reclamado S/. <input type="text" name="monto" id="monto" placeholder="Ingrese el monto" class="input-17"></label>
				<label>Descripción</label>
				<textarea name="descripcion" id="descripcion" class="textareacoment" placeholder="Escriba el bien contratado" minlength="3" maxlength="700"></textarea>
				<label for="textarea"></label>
			</div>
		</div>
		<p>
		<h2 class="form-titulo">Detalle de su reclamo:</h2>
		</p>
		<div class="contenedor-inputs">
			<div class="linea">
				<label>Reclamo / Queja</label>
				<select id="subject" name="subject">
					<option value="Seleccione">-- Seleccione --</option>
					<option value="Reclamo">Reclamo</option>
					<option value="Queja">Queja</option>
				</select>
				<label>Fecha Reclamo/Queja(*)
					<input type="date" id="fecha" name="fecha" class="input-17" step="1" min="01-01-2013" max="12-31-2025" />
				</label>
			</div>
			<div class="linea">
				<label>Detalle del Reclamo / Queja, según indica el cliente: (*)</label><br />
				<textarea id="message" name="message" class="textareacoment" placeholder="Escriba sus comentarios" minlength="3"></textarea>
			</div>
			<div class="linea">
				<label>
					<input type="checkbox" id="terminos" name="terminos">
					Declaro ser el titular del servicio y acepto el contenido del presente formulario manifestando bajo Declaración
					Jurada la veracidad de los hechos descritos. (*)
				</label>
			</div>
			<div class="linea">
				<div class="g-recaptcha"
					data-sitekey="6LfmbzgrAAAAADpq6jRkPLMPba3_Vv6OYdlw_Yim"></div>
			</div>
			<input class="btn-enviar" type="submit" id="enviar" name="enviar" value="Enviar">
		</div><br />
	</form>
	<div class="copyright">
		<p><a href="<?= base_url() ?>"> Cosmic Bowling </a></p>
	</div>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>'

</body>

</html>
