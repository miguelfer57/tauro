<?php
require_once 'conexion.php';
require_once 'encabezado.php';

if(isset($_POST['addnew'])){
    if(empty ($_POST['ApellidoNombreProf']) || empty ($_POST['dni']) || empty ($_POST['fechaNacimiento']) || empty ($_POST['telefono']) || empty ($_POST['direccion']) || empty ($_POST['contacto']) ){
        echo "debe completar todos los campos.";
 } else{
    $ApellidoNombreProf = $_POST['ApellidoNombreProf'];
    $dni = $_POST['dni'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $contacto = $_POST['contacto'];
    $nacionalidades = $_POST['nacionalidades'];
    
    $sql = "INSERT INTO profesores (ApellidoNombreProf,dni,fechaNacimiento,telefono,direccion, contacto, id_nacionalidad, activo)
     VALUES ('$ApellidoNombreProf', '$dni', '$fechaNacimiento','$telefono', '$direccion', '$contacto',$nacionalidades, 1)";
     echo $sql;
     if ($con->query ($sql) === true) {
        echo"<div class='alert alert-success'>profesor agregado correctamente.</div>";
  }else{
    echo"<div class='alert alert-danger'>error : ocurrio un error mientra se agregaba el profesor.</div>";
  }
 }
}
  

?>
<!-- a BACK button to go to the home page -->
<div class="container text-center mt-5">
      <a href="profesores.php" class="btn btn-info mt-5">Volver</a>
    <div>
