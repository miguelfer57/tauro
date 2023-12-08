<?php
require_once 'conexion.php';
require_once 'encabezado.php';
$keywords="";
$c=0 ;

if(isset($_POST['search'])){

   //recogemos las claves enviadas
  $keywords = $_POST['keywords'];
  $c= $_POST['curso'];
  

}

  $sql = "SELECT alumnos.id_alumno,alumnos.ApellidoNombre, cursos.nombre_curso 
          FROM (inscripciones 
		  left join alumnos on inscripciones.id_alumno=alumnos.id_alumno) 
          left join cursos on inscripciones.id_curso=cursos.id_curso ";
		  
		 


if ($keywords=="") {
	if ($c==0) {
    	$sqlfinal = $sql;
	}else{
		$sqlfinal = $sql." where inscripciones.id_curso = ".$c;
	}
    }else{
	if ($c==0) {
		$sqlfinal = $sql." where (ApellidoNombre LIKE '%" . $keywords . "%' )";
	}else {
		$sqlfinal  = $sql." where (ApellidoNombre LIKE '%" . $keywords . "%' ) and inscripciones.id_curso = ".$c;
	}
}
$result = $con->query($sqlfinal); 

if( $result->num_rows > 0){

	?>
	<br>
<div class="container text-center text-danger">
  <form action="" method="POST" >
	Apellido yNombre
	<input type="text" id="keywords" name="keywords" size="30" maxlength="30">

	<label for="curso">cursos</label> 
                <select name ="curso" id ="curso">
                <option  value="0">seleccione curso</option>
                <?php
                    $query = $con-> query ("SELECT * FROM cursos");
                    while ($valores = mysqli_fetch_array($query)){
                       echo '<option value="'.$valores["id_curso"].'"> '.$valores["nombre_curso"].' </option>';
                    }
                    ?>
                </select>		
	<input type="submit" name="search" id="search" value="buscar">
  </form>

    <h2>Listado de inscriptos</h2>
	<table class="table table-danger table-striped text-danger ">
		<tr>
			<td>Alumno</td>
			<td>Curso</td>
			
			<td>Borrar</td>
			<td>Editar</td>
		</tr>
	<?php
	while( $row = $result->fetch_assoc()){ 
		echo "<form action='borrarInscriptos.php' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['nombre_curso']."' name='nombre_curso' />"; //added
		echo "<tr>";
		echo "<td>".$row['ApellidoNombre'] . "</td>";
		echo "<td>".$row['nombre_curso'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Borrar' class='btn btn-danger' /></td>";  
		echo "<td><a href='editar.php?id=".$row['id_alumno']."' class='btn btn-info'>Editar</a></td>";
		echo "</tr>";
		echo "</form>"; //added 
	}
	?>
	</table>
</div>
<?php 
}
else
{
	echo "<br><br>No se encontraron registros";
}
?>

