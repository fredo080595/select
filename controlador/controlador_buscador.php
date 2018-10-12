<?php  


class controladorBuscador{

	public function mostrar(){

		require_once'../modelo/modelo_buscador.php';

		$mostrar = new modeloBuscador();
		$dato = $mostrar->mostrarDatos();
		require_once '../vista/vista_buscador.php';


	}


}

$obj = new controladorBuscador();
$obj->mostrar();