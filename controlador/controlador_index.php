<?php 


 class controladorindex{

 	public function mostrarDatos(){
 		require_once 'modelo/modelo_index.php';



 		require_once 'vista/vista_index.php';

 	}
 }


 $obj = new controladorindex();
 $obj->mostrarDatos();