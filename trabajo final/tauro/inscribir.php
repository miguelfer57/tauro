<?php 
require_once 'conexion.php';
require_once 'encabezado.php';

	if(isset($_POST['addnew'])){
		if(( $_POST['alumno']==0) || ( $_POST['curso']==0) || ( $_POST['turno']==0)){
			echo "Debe elegir un alumno, curso y turno"; 
		}else{		
			$alumno  = $_POST['alumno'];
			$curso = $_POST['curso'];
			$turno = $_POST['turno'];

			$sql = "INSERT INTO inscripciones (id_alumno,id_curso,id_turno)  VALUES($alumno,$curso,$turno)";
		   
			//	echo $sql;
			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Inscripción exitosa</div>";
			}else{
				echo $sql;
				echo "<div class='alert alert-danger'>Error: Ocurrió un error en la inscrpción</div>";
			}
		}
	}
?>

<!-- a  button to go to the home page -->
<div class="container text-center mt-5">
      <a href="alumnos.php" class="btn btn-info mt-5"> volver </a>
    <div>
