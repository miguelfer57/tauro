<?php


require_once 'conexion1.php';
require_once 'headLogin.php';


$sql = "SELECT * FROM registrousuarios";

$result = $con->query($sql); 


if( $result->num_rows > 0)
{ 
	?>
	
 <body>
	<div class="container  text-center text-danger">
     <div class=" ">
	 <h2>Listado de usuarios</h2>
     </div>
	
	<table class="table table-danger table-striped text-danger">
		<tr>
		    <td>Apellido</td>	
		    <td>Nombre</td>
			<td>Email</td>
			
			<td width="70px">Borrar</td>
			<td width="70px">Editar</td>
		</tr>
    </div>
	<?php
	while( $row = $result->fetch_assoc()){ 
		echo "<form action='borrar.php' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['id_usuario']."' name='id_usuario' />"; //added
		echo "<tr>";
		echo "<td>".$row['Apellido'] . "</td>";
		echo "<td>".$row['Nombre'] . "</td>";
		echo "<td>".$row['email'] . "</td>";
		
		echo "<td><input type='submit' name='delete' value='Borrar' class='btn btn-danger' /></td>";  
		echo "<td><a href='editar.php?id=".$row['id_usuario']."' class='btn btn-info'>Editar</a></td>";
		echo "</tr>";
		echo "</form>"; //added 
	}
	?>
	</table>
<?php 
}
else
{
	echo "<br><br>No se encontraron registros";
}
?>
<!-- a BACK button to go to the home page -->
<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-danger mt-5"> volver </a>
   </div>
