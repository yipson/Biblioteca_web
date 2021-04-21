<?php

$puerto = "localhost";
$usuario = "root";
$pass = "";
$dbname = "biblioteca" ;
$conexion = mysqli_connect($puerto,$usuario,$pass,$dbname);

$ide=$_REQUEST['id'];

$sql = "UPDATE editoriales SET eliminar='1' where id_edit = '$ide'";
$res=mysqli_query($conexion, $sql);

if($res){
    header ('Location: Editoriales.php');
}

?>