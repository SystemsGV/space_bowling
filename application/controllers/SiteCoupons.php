<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SiteCoupons extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cliente_model');
		$this->load->library('session');
		$this->load->database();
	}
	public function index()
	{
		if ($this->session->userdata('session_cliente')) {
			redirect('inicio');
		}

		$data['img'] = TRUE;
		$data['title'] = "Cupones";
		$this->load->view('coupons/index', $data);
	}

	public function login()
	{
		if ($this->input->post()) {
			// Obtener los datos del formulario
			$usuario = $this->input->post('user');
			$password = $this->input->post('password');

			// Validar el usuario usando el modelo
			$id = $this->Cliente_model->valida_socio($usuario, $password);

			if ($id) {
				$this->session->set_userdata('session_cliente', $id);
				echo "OK"; // Respuesta exitosa
			} else {
				echo "FAIL"; // Si no es válido
			}
		} else {
			$this->load->view('coupons/index');
		}
	}

	public function logout()
	{
		if (session_start()) {
			session_destroy();
			redirect('cupones');
		} else {
			redirect('cupones');
		}
	}

	public function main()
	{
		if ($this->session->userdata('session_cliente')) {
			$id = $_SESSION['session_cliente'];
			$cliente = new Cliente_model();
			$client = $cliente->obtener_cliente($id);
			$totalCupones  = $cliente->getCountCuponUser($id);

			$data['img'] = TRUE;
			$data['title'] = "Cupones";
			$data['txt_nombre'] = $client->txt_nombre;
			$data['txt_nombre2'] = intval($client->txt_nombre2);
			$data['txt_nombre4'] = $client->txt_nombre4;
			$data['totalCupones'] = intval($totalCupones);

			$this->load->view('coupons/main', $data);
		} else {
			redirect('cupones');
		}
	}

	public function generateCupon()
	{
		$customer = $this->input->post('customer');
		$email = $this->input->post('email');
		$dni = $this->input->post('dni');
		
		$idCustomer = $_SESSION['session_cliente']; /*Id de cliente logeado*/

		$path = "https://reservascosmicbowling.com.pe/cupones/";
		$host = "https://reservascosmicbowling.com.pe/cupones/";
		$ruta = "/home3/lagranja/public_html/cupones/";

		/* create instance of client */
		$cliente = new Cliente_model();
		$client = $cliente->obtener_cliente($idCustomer);		

		/*** Generation of cupon for user ***/
		$day     = date('d/m/Y');
		$days    = explode('/', $day);
		$precode = $days[0] . $days[1] . $days[2];
		$nroCode = $cliente->getCountCode($idCustomer, $precode);
		$totalCupon = $nroCode + 1;
		/* create number of cupom */
		$nroCupon   = $precode . $idCustomer . "-" . $totalCupon;
		if (!empty($totalCupon)) {
			for ($i = 1; $i <= 1; $i++) {
				$imagen = '<img src="http://generator.barcodetools.com/barcode.png?gen=0&data=' . $nroCupon . '&bcolor=FFFFFF&fcolor=000000&tcolor=000000&fh=14&bred=0&w2n=2.5&xdim=2&w=70px&h=220px&debug=1&btype=7&angle=90&quiet=1&balign=2&talign=0&guarg=1&text=1&tdown=1&stst=1&schk=0&cchk=1&ntxt=1&c128=0">';

				if ($client->txt_nombre8 == "3") {
					$head = '
								<!DOCTYPE html>
								<html lang="es">

								<head>
										<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

										<title>Cosmic Bowling</title>
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

												h2 {
														font-size 14px;
												}
										</style>
								</head>

								<body>
										<table style="background: url(\'../admin/upload/cupon/' . $client->txt_email . '\'); background-repeat:no-repeat; height:365px;">
												<tr>
														<td style="width:25px;">&nbsp;</td>+
														<td style="text-align:left;">' . $imagen . '
														</td>
												</tr>
										</table>
										<table>
												<tr>
														<td align="left" style="font-size:15px;">BIENVENIDOS </td>
												</tr>
														<tr>
																<td align="left" style="font-size:15px;"><b>EMPRESA:</b> ' . $client->txt_nombre . ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>RUC:</b> ' . $client->txt_direccion . ' </td>
														</tr>
														<tr>
																<p>
																		<td align="left" style="font-size:15px;"><b>client:</b> ' . $customer . ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>DNI:</b> ' . $dni . ' </td>
										
														</tr>
												<br /><br />
												<tr>
														<td width="60%" valign="top" style="font-family:Verdana, sans-serif; font-size:13px;"><br />
														<ul>
														<li>El cupón con la promoción que entregó EL ESTABLECIMIENTO debe presentarse en el módulo de caja del COSMIC BOWLING junto con el fotocheck y/o DNI del trabajador beneficiado para hacer válida la 
                                                        promoción, todo esto dentro de los plazos establecidos en el presente convenio. Luego el trabajador y sus acompañantes deberán realizar el pago del servicio a alquilar. </li>
                                                        <li>El alquiler de una hora de pista de Bowling de Lunes a Jueves tiene un costo de S/ 120.00, y los zapatos S/.8.00 por persona. Los Viernes, Sábados y Domingos, la hora de bowling tiene un costo de S/ 150.00, y los 
                                                        zapatos S/ 12.00 por persona. Por pista ingresa hasta un máximo de cinco personas, de ser más jugadores deberán alquilar otra pista, no es posible que haya más de cinco jugadores por pista. </li>
                                                        <li>Promoción por el alquiler de 1 hora de bowling, llévate ½ hora más aplicable solo de Lunes a Jueves durante todo el día, y los Viernes, Sábados y Domingos únicamente desde la apertura del local hasta las 15:00 hrs. </li>
                                                        <li>Promoción por el alquiler de 1 hora de billar, llévate ½ hora más aplicable solo de Lunes a Jueves durante todo el día, y los Viernes, Sábados y Domingos únicamente desde la apertura del local hasta las 15:00 hrs. </li>
                                                        <li>No válido para días feriados. </li>
                                                        <li>Horario de atención: </li>
                                                            ▪ Lunes a Jueves: 15:00 - 23:00 hrs 
                                                            ▪ Viernes: 14:30 - 23:30 hrs 
                                                            ▪ Sábado: 13:00 - 23:30 hrs 
                                                            ▪ Domingo: 13:00 - 23:00 hrs 
                                                        <li>No válido para cierres parciales o totales del Cosmic Bowling por exclusividad de empresas.</li>
                                                        <li>Promoción no válida para reservas.</li>
                                                        <li>No incluye el alquiler de zapatos. </li>
                                                        <li>Promoción valida en la misma pista, el tiempo no es partido en otra pista.</li>
                                                        <li>Aplica solo para la primera hora del servicio alquilado.</li>
                                                        <li>No se permite el ingreso de alimentos y bebidas.</li>
                                                        <li>Cualquier duda o consulta respecto a nuestra normativa los invitamos a revisar nuestra guía de seguridad virtual: https://www.cosmicbowling.com.pe/mod/index.php </li>
                                                        </ul>
														</td>
										</table>
				
										';
					$contraportada = '';
					$footer = '
								</body>

								</html>';
				}


				$content = $head . $contraportada . $footer;
				$dompdf = new DOMPDF();
				$dompdf->load_html($content);
				$dompdf->render();
				$output = $dompdf->output();
				file_put_contents("download/{$nroCupon}.pdf", $output);
				ini_set("memory_limit", "128M");
				set_time_limit(0);
			}
			sleep(3);
			if (file_exists("download/{$nroCupon}.pdf")) {
				$cliente->guardarClienteFoto($idCustomer, $customer, $email, $dni, $nroCupon);
				/**** Genere to email ****/
				$from = "sistemas@cosmicbowling.com.pe";
				$name = "Reservas Cosmic Bowling";
				$to   = $email;
				//$cc   = "ljruizperalta@gmail.com, lvega@websconsulting.com";    
				$subject = utf8_decode("Cupón de Descuento");
				$body    = utf8_decode("Buen día, <strong>" . ucwords($customer) . "</strong><br/><br/>
                Adjunto encontrará su cupón, por favor imprimirlo al apersonarse a nuestras sedes.<br/><br/>                
                Muchas gracias<br/>
                La Granja Villa");
				$mail = new phpmailer();
				$mail->PluginDir = $path;
				$mail->Mailer = "mail";
				$mail->Host = $host;
				$mail->From = $from;
				$mail->FromName = $name;
				$mail->Sender = $from;
				$mail->Timeout = 30;
				$mail->AddAddress($to);
				$mail->Subject = $subject;
				$mail->IsHTML(true);
				$mail->AddAttachment("./download/{$nroCupon}.pdf");
				$mail->Body = $body;
				//$mail->AddBCC($cc);
				$exito = $mail->Send();
				$intentos = 1;
				while ((!$exito) && ($intentos < 2)) {
					sleep(5);
					$exito = $mail->Send();
					$intentos = $intentos + 1;
				}
				if (!$exito) {
					$content = "Mailer Error: " . $mail->ErrorInfo;
				} else {
					$content = '<br><div class="text-center">Por favor verifica su correo para activar su cuenta y poder iniciar sessión</div><br>';
				}
			}
			echo "OK";
		} else {
			echo "FAIL";
		}
	}
}
