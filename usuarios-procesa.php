<?php 
session_start();
/*if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}*/
require_once('librerias/conexionBDD.php');

$ID_USUARIO = $_POST['id'];
$USUARIO = $_POST['usuario'];
$ID = md5($_POST['password']);
$id_nivel = $_POST['id_nivel'];

if($id == 0){
    $sql = "INSERT into usuarios (usuario,password,id_nivel) values ('$usuario','$password','$id_nivel')";
}else {
    $sql = "UPDATE usuarios set usuario = '$usuario',password = '$password',id_nivel = '$id_nivel' where id = '$id'";
}
$result =  $conn->query($sql);
if (!$result) die('Error al insertar');
header('Location: usuarios.php');
?>