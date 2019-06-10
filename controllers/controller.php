<?php 

#clase controladora 
class MvcController{
  
  // Llamar a la plantilla
	public function pagina(){
		//include se utiliza para invocar el archvo que tiene el codigo html
		include "views/template.php";
	}

	//Permite controlar los enlaces que existen
	public function enlacesPaginasController(){
		if(isset( $_GET['action']))		
			$enlaces = $_GET['action'];
		else
			$enlaces = "index";
			$respuesta = Paginas::enlacesPaginasModel($enlaces);
		include $respuesta;
	}
 
  #Interfaz de lo proveedores
	public function vistaMaestrosController(){

		$respuesta = Datos::vistaMaestrosModel("proveedores");

		foreach($respuesta as $row => $item){
			$item["nivel"]=$item["nivel"]==1?"SuperAdmin":"Maestro";
		echo'<tr>
				<td>'.$item["num_empleado"].'</td>
				<td>'.$item["nombre"].'</td>
				<td>'.$item["email"].'</td>
				<td>'.$item["nombre_carrera"].'</td>
				<td>'.$item["nivel"].'</td>
				<td><a href="index.php?action=editar_maestro&num_empleado='.$item["num_empleado"].'"><button class="small warning">Editar</button></a></td>
				<td><a href="index.php?action=maestros&idBorrar='.$item["num_empleado"].'"><button onclick="wait();" class="small alert">Borrar</button></a></td>
			</tr>';
		echo ' 
			<script type="text/javascript">
		        function wait(){
		          var r = confirm("¿Desea eliminar el usuario?");
		          if (!r) 
		              event.preventDefault();
		        }
		    </script>';
		}

	}
  
  
}


?>