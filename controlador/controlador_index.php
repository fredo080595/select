<?php 


 class controladorindex{

 	public function mostrarDatos(){
 		require_once 'modelo/modelo_index.php';
 		$mostrar = new modeloBuscador();
		$dato = $mostrar->mostrarDatos();


 		require_once 'vista/vista_index.php';

 	}
 }


 $obj = new controladorindex();
 $obj->mostrarDatos();