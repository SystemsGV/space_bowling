<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
			redirect('cupones/inicio');
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

		$this->load->library('dompdf_lib');
		require_once __DIR__ . '/../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
		require_once __DIR__ . '/../../vendor/phpmailer/phpmailer/src/SMTP.php';
		require_once __DIR__ . '/../../vendor/phpmailer/phpmailer/src/Exception.php';
		$idCustomer = $_SESSION['session_cliente']; /*Id de cliente logeado*/

		$customer = $this->input->post('customer');
		$email = $this->input->post('email');
		$dni = $this->input->post('dni');

		$cliente = new Cliente_model();
		$client = $cliente->obtener_cliente($idCustomer);

		$day     = date('d/m/Y');
		$days    = explode('/', $day);
		$precode = $days[0] . $days[1] . $days[2];
		$nroCode = $cliente->getCountCode($idCustomer, $precode);
		$totalCupon = $nroCode + 1;

		/* create number of cupom */
		$nroCupon   = $precode . $idCustomer . "-" . $totalCupon;

		if ($nroCupon) {
			$data = [
				'customer' => $customer,
				'email' => $email,
				'dni' => $dni,
				'nombre' => $client->txt_nombre,
				'ruc' => $client->txt_direccion,
				'nroCupon' => $nroCupon,
			];
			$html = $this->load->view('coupons/pdf', $data, true);

			$filename = $nroCupon . '.pdf';
			$this->dompdf_lib->generar_pdf($html, $filename);
			sleep(3);
			if (file_exists("download/{$nroCupon}.pdf")) {

				$cliente->guardarClienteFoto($idCustomer, $customer, $email, $dni, $nroCupon);

				/**** Genere to email ****/
				$from = "sistemas@cosmicbowling.com.pe";
				$name = "Cosmic Bowling";
				$to   = $email;
				//$cc   = "ljruizperalta@gmail.com, lvega@websconsulting.com";    
				$subject = utf8_decode("Cupón de Descuento");
				$body    = utf8_decode("Buen día, <strong>" . ucwords($customer) . "</strong><br/><br/>
                Adjunto encontrará su cupón, por favor imprimirlo al apersonarse a nuestras sedes.<br/><br/>                
                Muchas gracias<br/>
                Cosmic Bowling");


				$mail = new PHPMailer();
				//Server settings
				$mail->SMTPDebug = SMTP::DEBUG_SERVER;              //Enable verbose debug output
				$mail->isSMTP();                                            //Send using SMTP
				$mail->Host       = 'mail.cosmicbowling.com.pe';                     //Set the SMTP server to send through
				$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
				$mail->Username   = 'sistemas@cosmicbowling.com.pe';                     //SMTP username
				$mail->Password   = '3JvZBRlUpilP';                               //SMTP password
				// $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
				$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

				//Recipients
				$mail->setFrom($from, $name);
				$mail->addAddress($to, $name);               //Name is optional
				// $mail->addReplyTo('info@example.com', 'Information');
				// $mail->addCC('cc@example.com');
				// $mail->addBCC('bcc@example.com');

				//Attachments
				$mail->addAttachment("./download/{$nroCupon}.pdf");         //Add attachments

				//Content
				$mail->isHTML(true);                                  //Set email format to HTML
				$mail->Subject = $subject;
				$mail->Body    = $body;
				// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				$exito = $mail->send();
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
			echo 'FAIL';
		}
	}
}
