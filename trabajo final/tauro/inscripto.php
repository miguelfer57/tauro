<?php
require_once 'conexion.php';

$keywords="";
$c=0 ;
$d=0;
if(isset($_POST['search'])){

   //recogemos las claves enviadas
  $keywords = $_POST['keywords'];
  $c= $_POST['curso'];
  $d= $_POST['turno'];
  //echo $d ; ok
}

  $sql = "SELECT alumnos.id_alumno,alumnos.ApellidoNombre, cursos.nombre_curso FROM (inscripciones left join alumnos on inscripciones.id_alumno=alumnos.id_alumno) 
         left join cursos on inscripciones.id_curso=cursos.id_curso
         left join turnos on cursos.id_turno=turnos.id_turno ";
 if($keywords==""){
	if($c==0){
      if($d==0) {
        $sqlfinal = $sql ;  
      } 
    
     
         
     } else {
	      $sqlfinal = $sql." WHERE inscripciones.id_curso =".$c ;
     }else{
      $sqlfinal = $sql." WHERE cursos.id_turno =".$d ;
     }
    }
  
    
	}else{
	   if($c==0){
      $sqlfinal =  $sql." WHERE (ApellidoNombre LIKE '%" .$keywords. "%')" ;
     }else{
        if($d==0){
            $sqlfinal =sql;
                 
    	    }else{
	    $sqlfinal = $sql." WHERE (ApellidoNombre LIKE '%" .$keywords."%') and inscripciones.id_curso = ".$c  ;
         }	
        }
}
echo $sqlfimal;
$result = $con->query($sqlfinal);


require_once 'encabezado.php';

if( $result->num_rows > 0){

	?>
	<br>
<div class="container">
  <form action="" method="POST">
	Apellido y Nombre
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
    <label for="turno">turnos</label> 
         <select name ="turno" id ="turno">
         <option  value="0">seleccione turno</option>

        <?php
         $query = $con-> query ("SELECT * FROM turnos");
         while ($valores = mysqli_fetch_array($query)){
        echo '<option value="'.$valores["id_turno"].'"> '.$valores["turnoH"].' </option>';
        }
         ?>
        </select>	            	
	<input type="submit" name="search" id="search" value="buscar">
  </form>

    <h2>Listado de inscriptos</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Alumno</td>
			<td>Curso</td>
      <td>turno</td>
		</tr>
	<?php
	while( $row = $result->fetch_assoc()){ 
		echo "<form action='borrarInscripto.php' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['id_alumno']."' name='userid' />"; //added
		echo "<tr>";
		echo "<td>".$row['ApellidoNombre'] . "</td>";
		echo "<td>".$row['nombre_curso'] . "</td>";
        echo "<td>".$row['id_turno'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Borrar' class='btn btn-danger' /></td>";  
		echo "<td><a href='editarIncripto.php?id=".$row['id_alumno']."' class='btn btn-info'>Editar</a></td>";
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

