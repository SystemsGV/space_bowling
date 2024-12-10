<?php
class Cliente_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Método para validar el usuario usando password_hash
    public function valida_socio($usuario, $password) {
		$this->db->where('txt_usuario', $usuario);
        $this->db->where('txt_password', $password); // Suponiendo que estás usando MD5 para almacenar contraseñas
        $query = $this->db->get('tbl_cliente');
		
        if ($query->num_rows() > 0) {
            return $query->row()->id_cliente; // Retorna el ID del cliente
        }
        return null; // Si no se encuentra el usuario    
	}

	public function obtener_cliente($id){
		$this->db->where('id_cliente', $id); // Asegúrate de que el campo 'id' sea el correcto
        $query = $this->db->get('tbl_cliente');

		if ($query->num_rows() > 0) {
            return $query->row(); // Devuelve un solo resultado (cliente)
        } else {
            return null; // Si no se encuentra el cliente
        }
	}
	
	public function getCountCuponUser($idCliente) {
        // Utilizando Query Builder de CodeIgniter para evitar inyección SQL
        $this->db->where('id_cliente', $idCliente); // Condición WHERE
        $this->db->from('tbl_foto2'); // Tabla desde la cual consultar
        $query = $this->db->count_all_results(); // Cuenta el número de filas
        return $query; // Devuelve el total de cupones
    }

	public function getCountCode($idCustomer, $searchCode) {
		// Usamos el constructor de consultas de CodeIgniter para prevenir inyecciones SQL
		$this->db->where('id_cliente', $idCustomer); // Filtrar por cliente
		$this->db->like('int_retoque', $searchCode); // Buscar en la columna 'int_retoque' con LIKE
		return $this->db->count_all_results('tbl_foto2'); // Contar las filas que cumplen las condiciones
	}

	public function guardarClienteFoto($idCustomer, $customer, $email, $dni, $nroCupon){
		$data = array(
			'id_cliente'    => $idCustomer,
			'id_categoria'  => $customer,
			'txt_titulo'    => date('Y-m-d H:i:s'),
			'txt_foto'      => '0000-00-00 00:00:00',
			'txt_email'     => $email,
			'int_stado'     => 0,
			'txt_dni'       => $dni,
			'int_retoque'   => $nroCupon
		);

		$this->db->insert('tbl_foto2', $data);
	}
}
