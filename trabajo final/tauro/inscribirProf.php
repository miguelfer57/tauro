<?php 
require_once 'conexion.php';
require_once 'encabezado.php';

	if(isset($_POST['addnew'])){
		if(( $_POST['profesor']==0) || ( $_POST['curso']==0) || ( $_POST['turno']==0)){
			echo "Debe elegir un profesor, curso y turno"; 
		}else{		
			$profesor  = $_POST['profesor'];
			$curso = $_POST['curso'];
			$turno = $_POST['turno'];

			$sql = "INSERT INTO inscripciones (id_profesor,id_curso,id_turno)  VALUES($profesor,$curso,$turno)";
		   
			//	echo $sql;
			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Inscripción de profesor exitosa</div>";
			}else{
				echo $sql;
				echo "<div class='alert alert-danger'>Error: Ocurrió un error en la inscrpción del profesor</div>";
			}
		}
	}
?>

<!-- a  button to go to the home page -->
<div class="container text-center mt-5">
      <a href="profesores.php" class="btn btn-danger mt-5"> volver </a>
    <div>
