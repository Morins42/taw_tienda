<?php 



class Conexion{
	public static function conectar(){
			$link = new PDO("mysql:host=localhost;dbname=tienda","root","morin163");
			//echo "dseee";
		return $link;

	}

}

 ?>