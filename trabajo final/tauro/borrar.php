<?php 
  
  require_once 'conexion.php';
  require_once 'encabezado.php';
 ?>

<?php 
     if(isset($_POST['id_alumno']))
     {
         $id_alumno= $_POST['id_alumno'];
        //echo $id_alumno;
         // SQL query to delete data from user table where id = $id_alumno;
         //$query = "DELETE FROM alumnos WHERE id_alumno = $id_alumno"; 
        $query ="UPDATE alumnos SET activo = 0 WHERE id_alumno = $id_alumno";
         echo $query;
         if( $con->query($query) === TRUE){
				echo "<div class='alert alert-success'>Alumno eliminado correctamente</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: Ocurrió un error mientras se aliminada el alumno</div>";
			} 
     }    
 ?>
 <!-- a BACK button to go to the home page -->
 <div class="container text-center mt-5">
      <a href="alumnos.php" class="btn btn-warning mt-5">Volver</a>
    <div>

  
