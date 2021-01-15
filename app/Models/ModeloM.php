<?php namespace App\Models;

use CodeIgniter\Model;

class ModeloM extends Model {
	public function agregarUsuario($data) {
		$usuario = $this->db->table("t_catalogo");
		$usuario->insert($data);
		return $this->db->insertID();
	}

	public function obtenerTodosLosUsuariosModel(){
		$usuario  = $this->db->query('SELECT * FROM t_catalogo');
		return $usuario->getResult();
	}

	public function eliminaUsuario($data) {
		$usuario = $this->db->table("t_catalogo");
		$usuario->where($data);
		$usuario->delete();
		return json_encode(array("status" => TRUE));
	}

	public function obtenerDatosUpdate($data) {
		$usuario = $this->db->table("t_catalogo");
		$usuario->where($data);
		return json_encode($usuario->get()->getResultArray());
	}

	public function actualizarUsuario($data) {
		$usuario = $this->db->table("t_catalogo");
		$datos = array(
						"nombre" => $data['nombre'],
					   "tipo" => $data['tipo'],
					  "CostoVenta" => $data['CostoVenta'],
					"CostoCompra" =>$data['CostoCompra']
				);
		$idCompra = $data['id_compra'];
		$usuario->set($data);
		$usuario->where('id_compra', $idCompra);
		return $usuario->update();
	}
}