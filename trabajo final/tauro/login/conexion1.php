<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "login";

$con = mysqli_connect($host, $username, $password, $database);

if($con === false) die("ERROR: " . mysqli_connect_error());
