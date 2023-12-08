<?php
require_once 'conexion.php';
require_once 'login/headLogin.php';
?>
<body>
<div class="container text-center mt-3 ">
<div class="row">
<div class="col-md-3 ">
</div>
	<div class="col-md-6 col-md-offset-3 border border-danger  border-4 rounded text-danger  ">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus">Consulta</i></h3> 
			<form action="https://formsubmit.co/miguelfer1957@gmail.com" method="POST">
				<label for="ApellidoNombre">Apellido y Nombre</label>
				<input type="text" id="ApellidoNonbre"  name="ApellidoNombre" class="form-control" placeholder="Apellido y Nombre" required><br>
				<label for="contacto">Contacto</label> 
				<input type="text"  name="contacto" id="contacto" class="form-control" placeholder="@correo" required ><br>
				<br>
				
                <label for="mensaje">Mensaje</label>
				<textarea rows="4" name="mensaje" class="form-control" required ></textarea><br>
				
				<input type="submit" name="addnew" class="btn btn-outline-danger" value="ENVIAR">
				<br>
				<br>
			</form>
		</div>
	</div>
</div>

</div>

</div>
 <!-- a BACK button to go to the home page -->
 <div class="container text-center text-white mt-5">
      <a href="index.php" class="btn btn-danger mt-5">Volver</a>
    <div>
 
</body>
