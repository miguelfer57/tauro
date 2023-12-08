<?php 

require_once 'conexion.php';
require_once 'encabezado.php';
?>

<?php
   if(isset($_GET['id']))
    {
      $id_alumno = $_GET['id']; 
    }
      $query="SELECT * FROM alumnos WHERE id_alumno = $id_alumno ";
      $result = $con->query($query); 
      
      while( $row = $result->fetch_assoc()){ 
          $id_alumno = $row['id_alumno'];
          $ApellidoNombre  = $row['ApellidoNombre'];
          $dni 	= $row['dni'];
          $fechaNacimiento 	= $row['fechaNacimiento'];
          $telefono 	= $row['telefono'];
          $direccion 	= $row['direccion'];
          $contacto  	= $row['contacto'];
          $activo       = $row['activo'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $id = $_GET['id'];
      $ApellidoNombre = $_POST['ApellidoNombre'];
      $dni = $_POST['dni'];
      $fechaNacimiento	= $_POST['fechaNacimiento'];
      $telefono	= $_POST['telefono'];
      $direccion 	= $_POST['direccion'];
      $contacto  	= $_POST['contacto'];
      
      // SQL query to update the data in user table where the id = $id_alumno
      $query = "UPDATE alumnos SET ApellidoNombre = '{$ApellidoNombre}' , dni = '{$dni}' , fechaNacimiento = '{$fechaNacimiento}' , telefono = '{$telefono}' , direccion = '{$direccion}', contacto = '{$contacto}' WHERE id_alumno = $id_alumno";
      
      if( $con->query($query) === TRUE){
				echo "<div class='alert alert-success'>Usuario editado correctamente</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: Ocurrió un error mientras se agregaba el usuario</div>";
			} 
    }             
?>

<h1 class="text-center">Actualizacion de datos de alumno</h1>
  <div class="container ">
    <div class="col-md-6 offset-md-3 ">
    <form class="row" action="" method="post">
      <div class="form-group">
        <label for="ApellidoNombre" >ApellidoNombre</label>
        <input type="text" name="ApellidoNombre" class="form-control" value="<?php echo $ApellidoNombre  ?>">
      </div>

      <div class="form-group">
        <label for="dni" >dni</label>
        <input type="text" name="dni"  class="form-control" value="<?php echo $dni  ?>">
      </div>
      <div class="form-group">
        <label for="fechaNacimiento" >fecha de nacimiento</label>
        <input type="date" name="fechaNacimiento"  class="form-control" value="<?php echo $fechaNacimiento ?>">
      </div>
      <div class="form-group">
        <label for="telefono" >telefono</label>
        <input type="text" name="telefono"  class="form-control" value="<?php echo $telefono ?>">
      </div>
   
      <div class="form-group">
        <label for="direccion" >direccion</label>
        <input type="text" name="direccion"  class="form-control" value="<?php echo $direccion  ?>">
      </div>    
      <div class="form-group">
        <label for="contacto" >contacto</label>
        <input type="text" name="contacto"  class="form-control" value="<?php echo $contacto  ?>">
      </div>
      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form> 
   </div>   
  </div>

   

 <!-- a BACK button to go to the home page -->
 <div class="container text-center mt-5">
      <a href="alumnos.php" class="btn btn-warning mt-5"> volver </a>
    <div>