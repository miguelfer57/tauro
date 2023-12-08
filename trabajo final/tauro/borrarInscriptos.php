<?php 
  
  require_once 'conexion.php';
  require_once 'encabezado.php';
 ?>

<?php 
     if(isset($_POST['nombre_curso']))
     {
         $id_curso= $_POST['nombre_curso'];
       
        $query ="UPDATE inscripciones SET activo = 0 WHERE id_inscripcon = $id_curso ";
         echo $query;
         if( $con->query($query) === TRUE){
          echo $query;
				echo "<div class='alert alert-success'>inscripcion fue eliminado correctamente</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: Ocurrió un error mientras se aliminada la inscripcion</div>";
			} 
     }    
 ?>
 <!-- a BACK button to go to the home page -->
 <div class="container text-center mt-5">
      <a href="inscriptos.php" class="btn btn-danger mt-5">Volver</a>
    <div>