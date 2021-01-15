<?php namespace App\Controllers;

use App\Models\ModeloM;

class MueblesC extends BaseController
{
	public function index()
	{
		return view('muebles');
	}
	
	//--------------------------------------------------------------------

	public function agregarMueble() {

		$data = array("nombre" => $_POST['nombre'],
					   "tipo" => $_POST['tipo'],
					   "CostoVenta" => $_POST['CostoVenta'],
					"CostoCompra" => $_POST['CostoCompra']);
		$model =  new ModeloM();
		echo $exito = $model->agregarUsuario($data);
	}

	public function obtenerTodosLosDatos(){
		$model =  new ModeloM();
		$datos = $model->obtenerTodosLosUsuariosModel();

		echo json_encode($datos);
	}

	public function eliminaRegistro(){
		$model =  new ModeloM();
		$datos = array("id_compra" => $_POST['idCompra']);
		echo $model->eliminaUsuario($datos);

	}

	public function obtenerDatosUpdate() {
		$model =  new ModeloM();
		$data = array('id_compra' => $_POST['idCompra']);
		echo $model->obtenerDatosUpdate($data);
	}

	public function actualizarDatos() {
		$model =  new ModeloM();
		$data =array('id_compra' => $_POST['idComprau'],
						'nombre' => $_POST['nombreu'],
					   'tipo' => $_POST['tipou'],
					   'CostoVenta' => $_POST['CostoVentau'],
					'CostoCompra' => $_POST['CostoComprau']);
		echo $model->actualizarUsuario($data);
	}	
}
