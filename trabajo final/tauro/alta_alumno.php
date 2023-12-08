<?php
require_once 'conexion.php';
require_once 'encabezado.php';

if(isset($_POST['addnew'])){
    if(empty ($_POST['ApellidoNombre']) || empty ($_POST['dni']) || empty ($_POST['fechaNacimiento']) || empty ($_POST['telefono']) || empty ($_POST['direccion']) || empty ($_POST['contacto']) ){
        echo "debe completar todos los campos.";
 } else{
    $ApellidoNombre = $_POST['ApellidoNombre'];
    $dni = $_POST['dni'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $contacto = $_POST['contacto'];
    
    $sql = "INSERT INTO alumnos (ApellidoNombre,dni,fechaNacimiento,telefono,direccion, contacto, activo)
     VALUES ('$ApellidoNombre', '$dni', '$fechaNacimiento','$telefono', '$direccion', '$contacto', 1)";
     echo $sql;
     if ($con->query ($sql) === true) {
        echo"<div class='alert alert-success'>usuario agregado correctamente.</div>";
  }else{
    echo"<div class='alert alert-danger'>error : ocurrio un error mientra se agregaba el usuario.</div>";
  }
 }
}
  

?>
<!-- a BACK button to go to the home page -->
<div class="container text-center mt-5">
      <a href="alumnos.php" class="btn btn-outline-danger">Volver</a>
    <div>
