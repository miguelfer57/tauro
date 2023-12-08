<?php 

require_once 'conexion.php';
require_once 'encabezado.php';
?>

<?php
   if(isset($_GET['id']))
    {
      $id_alumno = $_GET['id']; 
    }
      $query=" SELECT alumnos.id_alumno,alumnos.ApellidoNombre, cursos.nombre_curso
      FROM (inscripciones left join alumnos on inscripciones.id_alumno=alumnos.id_alumno)
      left join cursos on inscripciones.id_curso=cursos.id_curso" ;
      $result = $con->query($query); 
      
      while( $row = $result->fetch_assoc()){ 
          $id_alumno = $row['id_alumno'];
          $ApellidoNombre  = $row['ApellidoNombre'];
          $curso 	= $row['id_curso'];
         
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $id = $_GET['id'];
      $ApellidoNombre = $_POST['ApellidoNombre'];
      $curso = $_POST['curso'];
     
      
      // SQL query to update the data in user table where the id = $id_alumno
      $query = "UPDATE alumnos SET ApellidoNombre = '{$ApellidoNombre}' , id_curso = '{$curso}' ,  WHERE id_alumno = $id_alumno";
      
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
	
    </form>

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-danger mt-2" value="update">
      </div>
    </form> 
   </div>   
  </div>

   

 <!-- a BACK button to go to the home page -->
 <div class="container text-center mt-5">
      <a href="alumnos.php" class="btn btn-warning mt-5"> volver </a>
    <div>