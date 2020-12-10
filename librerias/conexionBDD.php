<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$bdat = 'bdd_clinica_odonto';
$conn = new mysqli($host,$user,$pass,$bdat);

if ($conn->connect_errno > 0){
    die('Error de conexion ' . $conn->connect_error);
}
