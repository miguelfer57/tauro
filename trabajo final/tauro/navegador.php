<?php
 require_once 'conexion.php';
 

 ?>
  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    
    <link rel="stylesheet"  href="./css/estilos.css"  type="text/css">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>tauroeduca</title>
  </head>
       <!-- seccion del administrador-->
  <body>
  <div class="container ">
  <div clas="row">
   <div class="col-sm-12"> 
   <nav class="navbar navbar-expand-lg bg-danger ">
   <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
        
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alumnos
          </a>
      <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="nuevo_alumno.php">Ingresos de alumnos</a></li>
            <li><a class="dropdown-item" href="alumnos.php">Listado de alumnos</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profesores
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="nuevo_profesor.php">Ingreso de profesor</a></li>
            <li><a class="dropdown-item" href="profesores.php">Listado de Profesores</a></li>
           
           
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cursos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="inscripcion.php">inscripciones de alumnos</a></li>
            <li><a class="dropdown-item" href="inscriptos.php">alumnos inscriptos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="inscripcionProf.php">inscripcion profesores</a></li>
            <li><a class="dropdown-item" href="inscriptosProf.php">profesores inscriptos</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login/registrosUser.php" >Registro de Usuarios</a>
        </li>
      </ul>
      
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-danger " href="./login/cerrarSeccion.php?cerrar=yes" role="botton">cerrar seccion</a> 
  
</div>
   </div>
  </nav>
  </div>
 </div>
</div>

                                 <!--  seccion publica-->
      
      <div class="container bg-danger mt-2 ">
        <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-danger border border-danger">
            <div class="container-fluid">
             
              <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                  <a class="nav-link active " aria-current="page" href="https://tauroeduca.com.ar/moodle/" target="_blank"> <img src="imagenes/moodle.png" alt=""></a>
                  
                  <a class="nav-link " href="contacto.php"><p class="text-light  ">contacto</p></a>
                  <a class="nav-link " href="#"><p class="text-light  ">cursos</p></a>
                </div>
              </div>
            
            <div class="col position-relative">

            <div class="position-absolute top-50 start-0 translate-middle">
              <a class="btn btn-danger " href="login/login.html" role="botton">Login</a> 
            </div>

              <div class="position-absolute top-50 start-50 translate-middle">
                <a class="btn btn-danger " href="login/registro.html" role="botton">Registrarse</a> 
              </div>
            </div>
          </div>
          </nav>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>   
    
  


  
