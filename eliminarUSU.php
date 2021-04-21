<?php

$puerto = "localhost";
$usuario = "root";
$pass = "";
$dbname = "biblioteca" ;
$conexion = mysqli_connect($puerto,$usuario,$pass,$dbname);

$ide=$_REQUEST['id'];

$sql = "UPDATE usuarios SET eliminar='1' where id_usuario = '$ide'";
$res=mysqli_query($conexion, $sql);

if($res){
    header ('Location: listarUSU.php');
}

?>