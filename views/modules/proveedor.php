<h1>Provedor</h1>
<td><a href="index.php?action=registro_alumno"><button class="success">Agregar Nuevo Alumno</button></a></td>
	<table id="table" border="0">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>RFC</th>
        <th>Dirección</th>
        <th>Correo</th>
				<th>¿Editar?</th>
				<th>¿Eliminar?</th>
        <th>Contactos</th>
			</tr>
		</thead>
		<tbody>
			<?php

			$vistaAlumno = new MvcController();
			$vistaAlumno -> vistaProveedor();
			$vistaAlumno -> borrarProveedor();

			?>

		</tbody>
	</table>