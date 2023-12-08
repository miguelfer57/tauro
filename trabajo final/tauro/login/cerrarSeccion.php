<?php
require_once "conexion1.php";


if(isset($_GET['cerrar'])) {

    //Vaciamos y destruimos las variables de sesión
    $_SESSION['id_usuario'] = NULL;
    $_SESSION['Apellido'] = NULL;
    unset($_SESSION['id_usuario']);
    unset($_SESSION['Apellido']);
  
    //Redireccionamos a la pagina index.php
  //  header('Location: ../index.php');
       echo "
           <p >Cerro Seccion</p>
            <a href='../index.php'>Inicio</a>";
  }
  
?>