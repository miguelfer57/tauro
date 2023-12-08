<?php
require_once "conexion1.php";

if(isset($_POST['newUser'])) {
    $Apellido = trim($_POST["Apellido"]);
    $Nombre = trim($_POST["Nombre"]);
   
    $email = trim($_POST["email"]);
    $passwords = $_POST["passwords"];

    $sqlvalidar = "SELECT * FROM registrousuarios WHERE email = '$email';";


       // no esta en base datos el email
    if($con->query($sqlvalidar)->num_rows == 0){

    $sql = "INSERT INTO registrousuarios (Apellido, Nombre ,email, passwords) VALUES ('$Apellido', '$Nombre','$email', '$passwords')";
    
    if($con->query( $sql) === TRUE) {
        
        echo "<p>Registro ingresado correctamente.</p>";
        echo "<a href='../index.php'>Inicio</a>";
    }else{
        echo "<div class='alert alert-danger'> ERROR : OCURRIO UN ERROR MIENTRA SE AGREGABA EMAIL</div>";
    }
  }
  else{
    echo "<div class='alert alert-danger'> ERROR : YA EXITE USUARIO CON ESE EMAIL </div>";  
  }

  mysqli_close($con);
    
}


?>
<!-- a BACK button to go to the home page -->
<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-outline-danger">Volver</a>
    <div>