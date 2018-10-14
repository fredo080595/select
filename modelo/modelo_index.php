<?php 

require_once "db/conexion.php";
class modeloBuscador{

	

	public function conexion(){
		$conexion = new conectar();
		return $conexion->conexion();
	}

	public function mostrarDatos(){

		$conexion = self::conexion();
		$sql = "SELECT nom_libro FROM libros";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_all($result,MYSQLI_ASSOC);
	}


}