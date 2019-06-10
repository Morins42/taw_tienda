<?php 

class Paginas{
	
	public static function enlacesPaginasModel($enlaces){

		if($enlaces == "proveedor"){

			$module =  "views/modules/".$enlaces.".php";
		}
		else if($enlaces == "index"){
			$module =  "views/modules/index.php";
		}
		
		return $module;

	}

}
 ?>