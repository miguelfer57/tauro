<?php 
  
  require_once 'conexion.php';
  require_once 'encabezado.php';
 ?>

<?php 
     if(isset($_POST['id_profesor']))
     {
         $id_profesor= $_POST['id_profesor'];
        
         
        $query ="UPDATE profesores SET activo = 0 WHERE id_curso = $id_curso";
         
         if( $con->query($query) === TRUE){
				echo "<div class='alert alert-success'>profesor eliminado correctamente</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: Ocurrió un error mientras se aliminada el profesor</div>";
			} 
     }    
 ?>
 <!-- a BACK button to go to the home page -->
 <div class="container text-center mt-5">
      <a href="profesores.php" class="btn btn-warning mt-5">Volver</a>
    <div>

  
