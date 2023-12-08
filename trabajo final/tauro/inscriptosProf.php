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

  $sql = "SELECT profesores.id_profesor,profesores.ApellidoNombreProf, cursos.nombre_curso
   FROM (inscripciones 
    left join profesores on inscripciones.id_profesor=profesores.id_profesor) 
    left join cursos on inscripciones.id_curso=cursos.id_curso ";

 if($keywords==""){
	     if($c==0){
           $sqlfinal = $sql ; 
         }else{
	           $sqlfinal = $sql." WHERE inscripciones.id_curso =".$c ;
     	 }

	     }else{
		if($c==0){
            $sqlfinal =  $sql." where (ApellidoNombreProf LIKE '%" . $keywords . "%' or ApellidonombreProf LIKE '%". $keywords ."%')";
  	    }else{
	        $sqlfinal = $sql." where (ApellidoNombre LIKE '%" . $keywords . "%' or ApellidoNombre LIKE '%". $keywords ."%') and inscripciones.id_curso = ".$c;	
		}
}
  
	$result = $con->query($sqlfinal);

    if( $result->num_rows > 0){

	?>
	<br>
<div class="container text-center text-danger">
  <form action="" method="POST">
	Apellido y Nombre
	<input type="text" id="keywords" name="keywords" size="30" maxlength="30">

	<label for="curso">Cursos</label> 
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

    <h2>Listado de Profesores Inscriptos</h2>
	<table class="table table-danger table-striped text-danger">
		<tr>
			<td>Profesor</td>
			<td>Curso</td>
			<td>Borrar</td>
			<td>Editar</td>
		</tr>
	<?php
	while( $row = $result->fetch_assoc()){ 
		echo "<form action='borrarProf.php' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['id_profesor']."' name='nombre_curso' />"; //added
		echo "<tr>";
		echo "<td>".$row['ApellidoNombreProf'] . "</td>";
		echo "<td>".$row['nombre_curso'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Borrar' class='btn btn-danger' /></td>";  
		echo "<td><a href='editarProf.php?id=".$row['id_profesor']."' class='btn btn-info'>Editar</a></td>";
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

