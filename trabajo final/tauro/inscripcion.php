<?php
   require_once 'conexion.php';
   require_once 'encabezado.php';
?>
<div class="container mt-3">
    <div class="row">
      <div class="col-3">

      </div>
     <div class= "col-md-6 col-md-offset-3 border border-danger  border-4 rounded text-danger mt-5 text-center">
        <div class = "box">
            <h3><i class="glyphicon glyphicon-plus"></i>Inscripcion de Alumno</h3>
             <form action="inscribir.php" method="POST">
               
                <label for="alumno"> alumnos</label> <br>
                <select name ="alumno" id ="alumno"class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
                <option  value="0">seleccione alumno</option>
                <?php
                    $query = $con->query ("SELECT * FROM alumnos WHERE activo=1 order by ApellidoNombre ");
                    while ($valores = mysqli_fetch_array($query)){
                       // echo "<p> '<option value='.$valores[id_alumno].'> $valores[ApellidoNombre] </option>'</p>";
                       echo '<option value="'.$valores["id_alumno"].'"> '.$valores["ApellidoNombre"].' </option>';  
                    }
                    ?>
                 </select >
                 <br><br>
                 <label for="curso" >cursos</label> <br>
                <select name ="curso" id ="curso" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
                <option  value="0" >seleccione curso</option>
                <?php
                    $query = $con-> query ("SELECT * FROM cursos");
                    while ($valores = mysqli_fetch_array($query)){
                       echo '<option value="'.$valores["id_curso"].'"> '.$valores["nombre_curso"].' </option>';
                    }
                    ?>
                </select >
                <br><br>
                <label for="turno">turnos</label> <br>
                <select name ="turno" id ="turno"class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
                <option  value="0">seleccione turno</option>
                <?php
                    $query = $con-> query ("SELECT * FROM turnos");
                    while ($valores = mysqli_fetch_array($query)){
                       echo '<option value="'.$valores["id_turno"].'"> '.$valores["turnoH"].' </option>';
                    }
                    ?>
                </select>
                <br><br>
                <input type = "submit" name="addnew" class="btn btn-outline-danger" value="inscribir"><br>
             </form>
           <br><br>
        </div>

     </div>
    </div>

    </div>

<!-- a BACK button to go to the home page -->
   <div class="container text-center mt-5">
      <a href="alumnos.php" class="btn btn-danger mt-5"> volver </a>
   </div>




