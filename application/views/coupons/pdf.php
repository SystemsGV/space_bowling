<!DOCTYPE html>
<html lang="es">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cosmic Bowling</title>
	<link rel="icon" href="<?= base_url() ?>assets/images/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png" type="image/x-icon">
	<style>
		body {
			font-family: Verdana, Arial, Helvetica, sans-serif;
			background-color: #fff;
		}

		table {
			width: 100%;
		}

		p {
			width: auto;
			height: auto;
			-ms-transform: rotate(270deg);
			-webkit-transform: rotate(270deg);
			transform: rotate(270deg);
		}

		.tr-info {
			font-size: 14px;
			line-height: 1.2;
		}
	</style>
</head>
<?php
$nombreImagen = "assets/upload/cupon/prueba.png";
$imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));
// $barcode = "http://generator.barcodetools.com/barcode.png?gen=0&data=22122023800-" . $nroCupon . "&bcolor=FFFFFF&fcolor=000000&tcolor=000000&fh=14&bred=0&w2n=2.5&xdim=2&w=70px&h=220px&debug=1&btype=7&angle=90&quiet=1&balign=2&talign=0&guarg=1&text=1&tdown=1&stst=1&schk=0&cchk=1&ntxt=1&c128=0";
$barcodeImageLocalPath = "assets/upload/cupon/barcode.png";

// file_put_contents($barcodeImageLocalPath, file_get_contents($barcode));
$barcodeimg = "data:image/png;base64," . base64_encode(file_get_contents($barcodeImageLocalPath));

?>

<body>
	<table style="background: url('<?= $imagenBase64 ?>'); background-repeat:no-repeat; height:360px;">
		<tr>
			<td style="width:25px;">&nbsp;</td>
			<td style="text-align:left;">
				<img src="<?= $barcodeimg ?>" style="padding:60px 12px 12px 12px">
			</td>
		</tr>
	</table><br>
	<table>
		<tr>
			<td>
				BIENVENIDOS<br><br>
			</td>
		</tr>
		<tr>
			<td>
				<b>EMPRESA:</b> <?= $nombre ?> <br><br>
			</td>
			<td style="text-align:left;">
				<b>RUC:</b> <?= $ruc ?> <br><br>
			</td>
		</tr>
		<tr>
			<td>
				<b>CLIENTE:</b> <?= $nombre ?> <br><br>
			</td>
			<td style="text-align:left;">
				<b>DNI:</b> <?= $ruc ?> <br><br>
			</td>
		</tr>

	</table>
	<table>
		<tr class="tr-info">
			<td>
				¡Estamos felices de que hayas elegido La Granja Villa para pasar tu día! Nuestro objetivo es que vivas una experiencia entretenida y educativa al lado de tus seres queridos. Lee las siguientes indicaciones, por favor. te permitirán prepararte para el día de tu visita:<br>
				La persona que porte este cupón deberá tomar en cuenta que todas las coordinaciones se deberán de tratar directamente con la empresa a cargo.<br><br>
			</td>
		</tr>
		<tr class="tr-info">
			<td>
				1. El cupón con la promoción que entregó EL ESTABLECIMIENTO debe presentarse en el módulo de caja del
				COSMIC BOWLING junto con el fotocheck y/o DNI del trabajador beneficiado para hacer válida la promoción, todo
				esto dentro de los plazos establecidos en el presente convenio. Luego el trabajador y sus acompañantes deberán
				realizar el pago del servicio a alquilar.
				<br>
				2. El alquiler de una hora de pista de Bowling de Lunes a Jueves tiene un costo de S/ 120.00, y los zapatos S/.8.00 por
				persona. Los Viernes, Sábados y Domingos, la hora de bowling tiene un costo de S/ 150.00, y los zapatos S/ 12.00
				por persona. Por pista ingresa hasta un máximo de cinco personas, de ser más jugadores deberán alquilar otra pista,
				no es posible que haya más de cinco jugadores por pista.
				<br>
				3. Promoción por el alquiler de 1 hora de bowling, llévate ½ hora más aplicable solo de Lunes a Jueves durante todo el
				día, y los Viernes, Sábados y Domingos únicamente desde la apertura del local hasta las 15:00 hrs.
				<br>
				4. Promoción por el alquiler de 1 hora de billar, llévate ½ hora más aplicable solo de Lunes a Jueves durante todo el
				día, y los Viernes, Sábados y Domingos únicamente desde la apertura del local hasta las 15:00 hrs.
				<br>
				5. No válido para días feriados.
				<br>
				6. Horario de atención:
				? Lunes a Jueves: 15:00 - 23:00 hrs ? Viernes: 14:30 - 23:30 hrs ? Sábado: 13:00 - 23:30 hrs ? Domingo: 13:00 -
				23:00 hrs
				<br>
				7. No válido para cierres parciales o totales del Cosmic Bowling por exclusividad de empresas.
				<br>
				8.Promoción no válida para reservas.
				<br>
				9. No incluye el alquiler de zapatos.
				<br>
				10. Promoción valida en la misma pista, el tiempo no es partido en otra pista.
				<br>
				11. Aplica solo para la primera hora del servicio alquilado.
				<br>
				12. No se permite el ingreso de alimentos y bebidas.
				<br>
				13. Cualquier duda o consulta respecto a nuestra normativa los invitamos a revisar nuestra guía de seguridad virtual:
			</td>
		</tr>
		<tr>
			<td>

				¡Gracias por elegirnos, pasa un día excelente!

			</td>
		</tr>
	</table>
</body>

</html>
