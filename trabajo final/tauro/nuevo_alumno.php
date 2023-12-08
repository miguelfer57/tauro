<?php

require_once 'conexion.php';

require_once 'encabezado.php';
?>
<body>
<div class="container text-center mt-3 ">
<div class="row">
<div class="col-md-3 ">
</div>
	<div class="col-md-6 col-md-offset-3 border border-danger  border-4 rounded text-danger  ">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Agregar Alumno</h3> 
			<form action="alta_alumno.php" method="POST">
				<label for="ApellidoNombre">Apellido y Nombre</label>
				<input type="text" id="ApellidoNonbre"  name="ApellidoNombre" class="form-control"><br>
				<label for="dni">DNI</label>
        		<input type="text"  name="dni" id="dni" class="form-control"><br>
				<label for="fechaNacimiento">Fecha de nacimiento</label>
				<input type="text"  name="fechaNacimiento" id="fechaNacimiento" class="form-control"><br>
                <label for="telefono">Telefono</label>
				<input type="text"  name="telefono" id="telefono" class="form-control"><br>
                <label for="direccion">Dirección</label>
				<textarea rows="4" name="direccion" class="form-control"></textarea><br>
				<label for="contacto">Contacto</label> 
				<input type="text"  name="contacto" id="contacto" class="form-control"><br>
				<br>
				<input type="submit" name="addnew" class="btn btn-outline-danger" value="Agregar Alumno">
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
      <a href="alumnos.php" class="btn btn-danger mt-5">Volver</a>
    <div>
 
</body>
