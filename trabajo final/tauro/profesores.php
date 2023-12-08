<?php
require_once 'conexion.php';
require_once 'encabezado.php';
$keywords="";
if(isset($_POST['search'])){
   //recogemos las claves enviadas
  $keywords = $_POST['keywords'];

}
 if($keywords==""){
   $sql = " SELECT * FROM profesores left join nacionalidad on profesores.id_nacionalidad=nacionalidad.id_nacionalidad WHERE profesores.activo=1"; 

}else{
   $sql = 
   " SELECT * FROM profesores left join nacionalidad on profesores.id_nacionalidad=nacionalidad.id_nacionalidad where (ApellidoNombreProf LIKE '%" .$keywords. "%')";
   
}
   $result = $con->query($sql);

 
   if ($result->num_rows > 0)
    {
       ?>
       <br>
     <div class="container text-danger">
      <form action="" method="POST">
	         Apellido y Nombre
	    <input type="text" id="keywords" name="keywords" size="30" maxlength="30" >
	    <input type="submit" name="search" id="search" value="buscar" >
     </form>

       <div class= "container text-center mt-5">
       <h2>Listado de Profesores</h2>
       <table class="table table-danger table-striped text-danger">
        <tr>
         <td>Apellido y Nombre</td>
         <td>dni</td>
         <td>fecha de nacimiento</td>
         <td>telefono</td>
         <td>direccion</td>
         <td>contacto</td>
         <td>nacionalidad</td>
        
         
                  
         <td width="70px">borrar</td>
         <td width="70px">editar</td>
        </tr>
       
        <?php
        while( $row = $result->fetch_assoc()){
           echo "<form action ='borrarProf.php' method='POST'> ";  //added
           echo " <input type='hidden' value=' ". $row['id_profesor']." 'name= 'id_profesor'/> "; //added
           echo "<tr>";
           echo "<td>".$row[ 'ApellidoNombreProf'] . "</td>";
           echo "<td>".$row[ 'dni'] . "</td>";
           echo "<td>".$row[ 'fechaNacimiento'] . "</td>";
           echo "<td>".$row[ 'telefono'] . "</td>";
           echo "<td>".$row[ 'direccion'] . "</td>";
           echo "<td>".$row[ 'contacto'] . "</td>";
           echo "<td>".$row[ 'nombre_pais'] ."</td>";
           echo "<td> <input type= 'submit' name='delete' value='borrar' class='btn btn-danger'/></td> ";
           echo  "<td><a href='editarProf.php?id=".$row['id_profesor']."'class='btn btn-info'>Editar</a></td>";
           echo "</tr>";
           echo "</form>"; //added
         }
       
    }         
                   
   ?>
   </table>
  
   </div>
 </body>
 </html>




