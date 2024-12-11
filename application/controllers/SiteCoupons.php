<?php

defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

class SiteCoupons extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cliente_model');
		$this->load->library('session');
		$this->load->database();
		require_once APPPATH . 'third_party/dompdf/autoload.inc.php';
		require_once APPPATH . 'third_party/sendmail/class.phpmailer.php';
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
		$idCustomer = $_SESSION['session_cliente']; /*Id de cliente logeado*/

		$customer = $this->input->post('customer');
		$email = $this->input->post('email');
		$dni = $this->input->post('dni');
		$path = "http://www.lagranjavilla.com/cupones/";
		$host = "http://www.lagranjavilla.com/cupones/";
		$ruta = "/home3/lagranja/public_html/cupones/";
				
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
			$filePath = $this->dompdf_lib->generar_pdf($html, $filename);
			echo $filePath;
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
		}else{
			echo 'FAIL';
		}
	}
}
