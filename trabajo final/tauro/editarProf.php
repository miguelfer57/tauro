<?php 

require_once 'conexion.php';
require_once 'encabezado.php';
?>

<?php
   if(isset($_GET['id']))
    {
      $id_profesor = $_GET['id']; 
    }
      $query="SELECT * FROM profesores left join nacionalidad on profesores.id_nacionalidad=nacionalidad.id_nacionalidad where id_profesor = $id_profesor";
      $result = $con->query($query); 
      
      while( $row = $result->fetch_assoc()){ 
          $id = $row['id_profesor'];
          $ApellidoNombreProf  = $row['ApellidoNombreProf'];
          $dni 	= $row['dni'];
          $fechaNacimiento 	= $row['fechaNacimiento'];
          $telefono 	= $row['telefono'];
          $direccion 	= $row['direccion'];
          $contacto = $row['contacto'];
          $id_nacionalidad = $row['id_nacionalidad'];
          $activo = $row['activo'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $id = $_GET['id'];
      $ApellidoNombreProf = $_POST['ApellidoNombreProf'];
      $dni = $_POST['dni'];
      $fechaNacimiento	= $_POST['fechaNacimiento'];
      $telefono	= $_POST['telefono'];
      $direccion 	= $_POST['direccion'];
      $correo = $_POST['contacto'];
      $id_nacionalidad = $_POST['id_nacionalidad'];

      
      // SQL query to update the data in user table where the id = $id_alumno
      $query = "UPDATE profesores SET ApellidoNombreProf = '{$ApellidoNombreProf}' , dni = '{$dni}' , fechaNacimiento = '{$fechaNacimiento}' , telefono = '{$telefono}' , direccion = '{$direccion}', contacto = '{$contacto}', id_nacionalidad = '{$id_nacionalidad}' WHERE id_profesor = $id_profesor";
      
      if( $con->query($query) === TRUE){
				echo "<div class='alert alert-success'>Profesor editado correctamente</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: Ocurrió un error mientras se editaba el profesor</div>";
			} 
    }             
?>

<h1 class="text-center">Actualizacion de datos del Profesor</h1>
  <div class="container ">
    <div class="col-md-6 offset-md-3 ">
    <form class="row" action="" method="post">
      <div class="form-group">
        <label for="ApellidoNombreProf" >Apellido Nombre</label>
        <input type="text" name="ApellidoNombreProf" class="form-control" value="<?php echo $ApellidoNombreProf  ?>">
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
        <label for="contacto" >Email</label>
        <input type="text" name="contacto"  class="form-control" value="<?php echo $contacto  ?>">
      </div>
      <label for="id_nacionalidad">Nacionalidad</label> <br>
                <select name ="id_nacionalidad" id ="id_nacionalidad">
                <option  value="0">seleccione nacionalidad</option>
                <?php
                    $query = $con-> query ("SELECT * FROM nacionalidad");
                    while ($valores = mysqli_fetch_array($query)){
                       echo '<option value="'.$valores["id_nacionalidad"].'"> '.$valores["nombre_pais"].' </option>';
                    }
                    ?>
                </select>
				<br><br>	
      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form> 
   </div>   
  </div>

   

 <!-- a BACK button to go to the home page -->
 <div class="container text-center mt-5">
      <a href="profesores.php" class="btn btn-warning mt-5"> volver </a>
    <div>