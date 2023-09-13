<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
      $data['img'] = TRUE;
      $data['title'] = "Inicio";
        $this->template->load('template', 'index', $data);
    }
    public function about()
    {
      $data['img'] = FALSE;
      $data['title'] = "Quienes Somos";
        $this->template->load('template', 'about', $data);
    }
    public function facilities()
    {
      $data['img'] = TRUE;
      $data['title'] = "Instalaciones";
        $this->template->load('template', 'facilities', $data);
    }

    public function rates()
    {
      $data['img'] = TRUE;
      $data['title'] = "Tarifas";
        $this->template->load('template', 'rates', $data);
    }
    public function services()
    {
      $data['img'] = TRUE;

        $data['title'] = "Servicios";
        $this->template->load('template', 'services', $data);
    }
    public function contact()
    {
        $data['title'] = "Contactanos";
        $data['img'] = FALSE;
        $this->template->load('template', 'contact', $data);
    }
    public function blockclaims()
    {
      $data['img'] = TRUE;
      $data['title'] = "Libro de Reclamaciones";
        $this->load->view('ext/blockclaims', $data);
    }
    public function promotions()
    {
      $data['img'] = TRUE;
      $data['title'] = "Promociones";
        $this->template->load('template', 'ext/promotions', $data);
    }
    public function protocol()
    {
      $data['img'] = TRUE;
      $data['title'] = "Protocolo de Ingreso";
        $this->load->view('ext/protocol', $data);
    }
    public function securityguide()
    {
      $data['img'] = TRUE;
      $data['title'] = "Guía de Seguridad";
        $this->load->view('ext/securityguide', $data);
    }
    public function send_contact()
    {
        //Datos del Formulario capturando data

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $telefono = $this->input->post('telefono');
        $message = $this->input->post('message');


        // crear variable para el receptor de correo adm@bowlinglarcomar.com
        $to = "ventasweb@lagranjavilla.com";
		$to = "adm@cosmicbowling.com.pe";
		$to = "adm.1@cosmicbowling.com.pe";

        //Se imprime el mensaje a enviar.
        //datos del cliente

        //crear estructura del formulario.
        $subject = "Cosmic Bowling  - Formulario Web";

        //MENSAJE DE CORREO ELECTRÓNICO
        $message = "
		
		<h2>Informaci&oacute;n de Cont&aacute;cto</h2>

		<table>
			<tr>
		   		<td><b>Nombre :</b></td><td> $name </td>
		  	</tr>
		  	<tr>
		    	<td><b>Correo Electronico :</b></td><td> $email </td>
		  	</tr>
		  <tr>
		    	<td><b>N° Telefono :</b></td><td> $telefono </td>
		  </tr>
		  <tr>
		    	<td><b>MENSAJE :</b></td><td> $message </td>
		  </tr>
		</table>

		<p> <b> Cosmic Bowling </b> </p>
		";

        // Crear la cabecera del mensaje y formato
        //header('Content-Type: text/html; charset=utf-8');
        $header = "MIME-Version: 1.0\r\n";
        $header = 'From: ' . $email . "\r\n" .
            $header .= 'Bcc: sistemas.st@lagranjavilla.com' . "\r\n";
        $header .= 'Content-Type: text/html; charset=utf-8' . "\r\n";

        if (@mail($to, $subject, $message, $header)) {
            echo '<script language="javascript"> alert("El mensaje ha sido enviado correctamente."); </script>';
            echo '<script language="JavaScript"> window.location.href ="' . base_url() . '" </script>';
            //	header('location:www.lagranjavilla.com');
        } else {
            echo "Por favor verifica la informacion";
        }
    }

    public function mailclaims()
    {
        // crear variable para el receptor de correo. Imprimir todo el formulario de html en php
        // $email_to = "adm@cosmicbowling.com.pe";	
        $email_to = "atencionalcliente@cosmicbowling.com.pe";
        //Datos del Cliente
        $first_name = $_POST['nombre'];
        $first_ape = $_POST['apellidos'];
        $tipo = $_POST['tipo'];
        $tipo_numero = $_POST['numero'];
        $departa = $_POST['depart'];
        $distrito = $_POST['distrito'];
        $domicilio = $_POST['domicilio'];
        $telefono = $_POST['telefono'];
        $email_from = $_POST['email'];
        //Informaci贸n General:
        $subject = $_POST['tipoderq'];
        $opcion = $_POST['opcion'];
        $descripcion = $_POST['descripcion'];
        $monto = $_POST['monto'];
        //Detalle de su reclamo:
        $tipoderq = $_POST['subject'];
        $fecha = $_POST['fecha'];
        $message = $_POST['message'];
        //Creando estructura de html para los datos
        $email_message = "
        	<h2>Datos de la Persona que presenta el Reclamo:</h2>
	<table>
	  <tr>
	    <td><b>Nombres :</b></td>
	    <td> $first_name</td> <td><b>Apellidos :</b> $first_ape</td>
	  </tr>
	  <tr>
	    <td><b>Tipo de Documento :</b></td>
	    <td> $tipo</td> <td><b>Numero :</b> $tipo_numero</td>
	  </tr>
	  <tr>
	    <td><b>Departamento :</b></td>
	    <td> $departa</td> <td><b>Distrito :</b> $distrito</td>
	  </tr>
	  <tr>
	    <td><b>Domicilio :</b></td>
	    <td> $domicilio</td> <td><b>Telefono :</b> $telefono</td>
	  </tr>
	  <tr>
	  	<td><b>Email :</b></td>
	  	<td> $email_from</td> <td></td>
	  </tr>
	</table>
	    	<h2>Informaci&oacute;n General:</h2>
	<table>
	  <tr>
	    <td><b>Identificacion del bien contratado :</b></td>
	    <td> $opcion</td> <td><b>Local :</b> $tipoderq</td> 
	  </tr>
	  <tr>
	    <td><b>Monto Reclamado :</b></td>
	    <td> $monto</td> <td><b>Descripcion :</b> $descripcion</td> <td></td>
	  </tr>
	</table>
			<h2>Detalle de su reclamo:</h2>
	<table>
	  <tr>
	    <td><b>Detalle :</b></td>
	    <td> $subject</td> <td><b>Fecha de la solicitud :</b> $fecha</td> <td></td>
	  </tr>
	  <tr>
	    <td><b>Detalle del Mensaje :</b></td>
	    <td> $message</td> <td></td> <td></td>
	  </tr>
	</table>

	<table>
	  <tr>
	    <td></td>
	    <td><h2><b>Cosmic Bowling<h2></b></td> <td></td>
	  </tr>
	</table>
		
	";
        $header = "MIME-Version: 1.0\r\n";
        $header = 'From: ' . $email_from . "\r\n" .
            $header .= 'Bcc: sistemas.st@lagranjavilla.com, adm@cosmicbowling.com.pe, operaciones.gs@lagranjavilla.com' . "\r\n";
        $header .= 'Content-Type: text/html; charset=utf-8' . "\r\n";
        $header .= 'Cc: ' . $email_from . "\r\n";
        $header .= 'X-Mailer: PHP/' . phpversion() . "\r\n";


        if (@mail($email_to, $subject, $email_message, $header)) {
            //Sale un alerta de confirmaci贸n de que el mensaje se ha enviado.
            echo '<script language="javascript"> alert("El mensaje ha sido enviado correctamente."); </script>';
            //Redirecci贸n a la pagina que gusten
            echo '<script language="JavaScript"> window.location.href ="' . base_url() . '" </script>';
            //header('location:www.lagranjavilla/zonaecologica/');
        } else {
            echo "Por favor verifica la informacion";
        }
    }
}
