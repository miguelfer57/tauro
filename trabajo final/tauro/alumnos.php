<?php
require_once 'conexion.php';
require_once 'encabezado.php';


$sql 	= "SELECT COUNT(*) as total_alumnos FROM alumnos ";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$num_total_rows = $row['total_alumnos'];
?>

<h1 class="lead"><?php echo $num_total_rows; ?> elementos listados de 3 en 3</h1>

<?php
if ($num_total_rows > 0) {
    $page = false;

    //examino la pagina a mostrar y el inicio del registro a mostrar
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    }

    if (!$page) {
        $start = 0;
        $page = 1;
    } else {
        $start = ($page - 1) * NUM_ITENS_BY_PAGE ;
    }

      //calculo el total de paginas
      $total_pages=ceil($num_total_rows / NUM_ITENS_BY_PAGE );

      //pongo el numero de registros total, el tamaño de pagina y la pagina que se muestra
    //echo '<h3>Numero de usuarios: '.$num_total_rows.'</h3>';
   // echo '<h3>En cada pagina se muestran ' NUM_ITEMS_BY_PAGE  ' usuarios.</h3>';
   // echo '<h3>Mostrando la pagina '.$page.' de ' .$total_pages.' paginas.</h3>';
  
   $result = $con->query(
    'SELECT * FROM alumnos order by ApellidoNombre DESC LIMIT '.$start.', '.NUM_ITENS_BY_PAGE.' ' );
    
     
 
    
  if ($result->num_rows > 0) {
    ?>
    <div class="container  text-center text-danger">
     <div class=" ">
       <h2>Listado de alumnos</h2>
  </div>
    <table class="table table-danger table-striped text-danger ">
      <tr>
        <td>Apellido Nombre</td>
        <td>Dni</td>
        <td> Fecha de Nacimiento</td>
        <td>telefono</td>
        <td>Dirección</td>
        <td>Contacto</td>
        
        <td width="70px">Borrar</td>
        <td width="70px">Editar</td>
      </tr>
    <?php
    while( $row = $result->fetch_assoc()){ 
      echo "<form action='borrar.php' method='POST'>";	//added
      echo "<input type='hidden' value='". $row['id_alumno']."' name='id_alumno' />"; //added
      echo "<tr>";
      echo "<td>".$row['ApellidoNombre'] . "</td>";
      echo "<td>".$row['dni'] . "</td>";
      echo "<td>".$row['fechaNacimiento'] . "</td>";
      echo "<td>".$row['telefono'] . "</td>";
      echo "<td>".$row['direccion'] . "</td>";
      echo "<td>".$row['contacto'] . "</td>";
      
      echo "<td><input type='submit' name='delete' value='Borrar' class='btn btn-danger' /></td>";  
      echo "<td><a href='editar.php?id=".$row['id_alumno']."' class='btn btn-info'>Editar</a></td>";
      echo "</tr>";
      echo "</form>"; //added 
    }
    echo '<nav>';
    echo '<ul class="pagination">';
    if ($total_pages > 1) {
      if ($page != 1) {
        echo '<li class="page-item"><a class="page-link" href="alumnos2.php?page='.($page-1).'"><span aria-hidden="true">&laquo;</span></a></li>';
      }

      for ($i=1;$i<=$total_pages;$i++) {
        if ($page == $i) {
          echo '<li class="page-item active"><a class="page-link" href="alumnos.php">'.$page.'</a></li>';
        } else {
          echo '<li class="page-item"><a class="page-link" href="alumnos.php?page='.$i.'">'.$i.'</a></li>';
        }
      }

      if ($page != $total_pages) {
        echo '<li class="page-item"><a class="page-link" href="alumnos.php?page='.($page+1).'"><span aria-hidden="true">&raquo;</span></a></li>';
      }
    }
  }
?>
</table>
</div>
<?php 
}
else
{
echo "<br><br>No se encontraron registros";
}
?>

  
  
    
   
   

 </body>
 </html>




