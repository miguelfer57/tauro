<?php

require_once 'conexion.php';

require_once 'encabezado.php';
?>
<body>
<div class="container text-center mt-3">
<div class="row">
	<div class="col-3">

	</div>
	<div class="col-md-6 col-md-offset-3 border border-danger  border-4 rounded text-danger">
		<div class="box ">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Agregar Profesor</h3> 
			<form action="alta_profesor.php" method="POST">
				<label for="ApellidoNombreProf">Apellido y Nombre</label>
				<input type="text" id="ApellidoNombreProf"  name="ApellidoNombreProf" class="form-control"><br>
				<label for="dni">dni</label>
        		<input type="text"  name="dni" id="dni" class="form-control"><br>
				<label for="fechaNacimiento">fecha de nacimiento</label>
				<input type="text"  name="fechaNacimiento" id="fechaNacimiento" class="form-control"><br>
                <label for="telefono">telefono</label>
				<input type="text"  name="telefono" id="telefono" class="form-control"><br>
                <label for="direccion">Dirección</label>
				<textarea rows="4" name="direccion" class="form-control"></textarea><br>
				<label for="contacto">Email</label> 
				<input type="text"  name="contacto" id="contacto" class="form-control"><br>
				

				<br>
				<label for="nacionalidades">Nacionalidad</label> <br>
                <select name ="nacionalidades" id ="nacionalidades" class="form-select form-select-sm" aria-label=".form-select-sm example" >
                <option  value="0">seleccione nacionalidad</option>
                <?php
                    $query = $con-> query ("SELECT * FROM nacionalidad");
                    while ($valores = mysqli_fetch_array($query)){
                       echo '<option value="'.$valores["id_nacionalidad"].'"> '.$valores["nombre_pais"].' </option>';
                    }
                    ?>
                </select>
				 <br>
				<br>
				<br>
				<input type="submit" name="addnew" class="btn btn-outline-danger" value="Agregar Profesor">
				<br>
			</form>
			<br>		
				
		</div>
	</div>
  </div>
 
</div>
<!-- a BACK button to go to the home page -->
<div class="container text-center text-white mt-5">
      <a href="profesores.php" class="btn btn-danger mt-5">Volver</a>
    <div>
 
 
</body>
