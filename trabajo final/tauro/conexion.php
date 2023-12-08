<?php 
 require_once 'conexion.php';

$localhost 	= "localhost"; 
$username 	= "root"; 
$password 	= ""; 
$dbname 	= "tauro"; 
 
$con = new mysqli($localhost, $username, $password, $dbname); 

if($con->connect_error) {
    die("connection failed : " . $con->connect_error);
} 
 define('NUM_ITENS_BY_PAGE',3);
?>
