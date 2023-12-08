<?php
require_once 'conexion.php';
require_once 'navegador.php';
?>

<body >


<div class="container mt-2">   
 <div class="row">  
  <div class="col-sm-12 mt-2">
   <img src="imagenes/2.jpg" class="img-fluid rounded mx-auto d-block img-thumbnail"  alt="tauro computacion" >
  </div>
  <div class="col-sm-3  mt-2">
  </div>
  <div class="col-sm-6 nt-2">
   <!-- carrusel -->
   <h2 class="text-center text-danger">Cursos de verano</h2>
   <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/555.jpg" class="d-block w-100" alt="..."  >
    </div>
    <div class="carousel-item">
      <img src="imagenes/666.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagenes/777.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button"  data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
 
<!-- tarjetas  -->

<section id="titulo-card" class="mt-md-5">
   <h2 class="text-center text-danger">Nuestros Cursos</h2>

<div class="container  mt-3">
  
  <div class="card-group">
  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img class="w-100" src="imagenes/10.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center text-danger">Operador de PC full</h5>
        <p class="card-text text-center text-danger"> Dias: Miercoles y Sabados.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img class="w-100" src="imagenes/11.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center text-danger">Edicion de Videos</h5>
        <p class="card-text text-center text-danger">Dias: Miercoles y Viernes</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img class="w-100" src="imagenes/12.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center text-danger">Dideño Grafico</h5>
        <p class="card-text text-center text-danger">Dias Lunes y Jueves</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img class="w-100" src="imagenes/13.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center text-danger">Curso de Adobe Photoshop</h5>
        <p class="card-text text-center text-danger">Dias Martes y Jueves  </p>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
<section>


  <div class= "container mt-3" >
    <div class="row text-center  ">
    <div class="col-sm-8  ">
     <h2 class="text-danger">CURSOS PRESENCIALES Y VIRTUALES!!! <h2>
     
     <p class="fs-6 text-start text-danger">Usted podrá comenzar el curso en forma inmediata sin depender de una fecha de Inicio puntual. Disponemos de una amplia y flexible franja horaria, donde jamás perderá una clase. <br>
      A partir del 2023 hemos implementado nuestra Plataforma (e-learning) para el dictado de cursos a distancia por Internet<br>
      De esta manera cualquier persona de Bahía Blanca, de la zona o del pais podrá hacer una curso o carrera sin moverse desde su casa o su trabajo, en el horario que mejor le resulte. Consúltenos!!!.
     </p>
          
			<p class="text-align: center text-danger">De Lunes a Viernes de 8 a 20 hs.<br>
				<strong class="text-danger text-align: center;">SALTA 415 - BAHIA BLANCA - <br>
         <p class="fs-4">- BUENOS AIRES - </p>
         <p> - ARGENTINA -</p></strong><br>
        <p class="fs-4 text-danger">Escribinos al instante por WhatsApp haciendo clic en el siguiente icono: </p><br>
        <a href="https://api.whatsapp.com/send?phone=+542914398081" target="_blank"><img src="imagenes/logow1.jpg" class="img-thumbnail rounded mx-auto d-block" width="111" height="112"></a>
      </div>   
  <div class="col-sm-4 border border-2 border-danger ">
    <div class="text-center text-danger">
    <h5>Amplia franja horaria</h5>
    <i class="fa fa-calendar" style="font-size:48px;color:red"></i>
    <p class="text-align: justify text-danger">Con el reconocimiento de numerosas empresas de la ciudad y la zona, nos caracterizamos por la seriedad y la responsabilidad en cada curso o carrera que dictamos. Buscamos que cada persona se sienta preparada para aprender a manejar su computadora, optimizando sus conocimientos para insertarse en el mundo laboral.</p>
    </div>
    <div class="text-center text-danger">
    <h5  >Certificacion</h5>
    <img width="111" height="112" src="imagenes/iconoCert.jpg" >
    <p>Al termino de cada curso se entrega un certificado de asistencia al mismo, contando con la posibilidad de rendir un examen gratuito y adquirir el certificado de asistencia y aprobación.</p>
    </div>
  </div>
 </div>    
 </div> 

 </section>


 <section>
<br>
<hr class="text-danger">
  <div class= "container mt-3" >
    <div class="row text-center  ">
    <div class="col-sm-12  ">
     <h2 class="text-danger id='nosotros'  ">EL INSTITUTO <h2>
     
     <div class="card mb-3 border border-danger" style="max-width: 900px;">
  <div class="row g-0">
    <div class="col-sm-4">
      <img src="imagenes/tau1.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-sm-8 ">
      <div class="card-body ">
        <h5 class="card-title text-danger">TAURO COMPUTACION</h5>
        <p class="card-text text-danger fs-5">Seriedad y responsabilidad
          Estos cursos y carreras logran así un Standard con nivel Nacional e Internacional en más de 90 
          Centros Educativos de Formación System existentes en Argentina y Latinoamérica.<br>
          TAURO Computación brinda a sus clientes una gran variedad de carreras y cursos, flexibles a sus días y horarios.</p>
        
      </div>
    </div>
  </div>
</div>


     </div>    
 </div> 

 </section>  
 <br>
 <br>
</body>
<?php
 require_once 'footer.php';
?>
