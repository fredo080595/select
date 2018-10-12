<?php 

class modeloBuscador{

	require_once '../db/conexion.php';

	public function conexion(){
		$conexion = new conectar();
		return $conexion();
	}

	public function mostrarDatos(){

		$conexion = self::conexion();
		$sql = "SELECT nombre from articulos ";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_all($result,MYSQLI_ASSOC);
	}


}