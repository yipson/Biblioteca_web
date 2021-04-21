<?php
$puerto = "localhost";
$usuario = "root";
$pass = "";
$dbname = "biblioteca" ;
$conexion = mysqli_connect($puerto,$usuario,$pass,$dbname);

$ISBN=utf8_decode($_POST['ISBN']);
$NOMBRE=utf8_decode($_POST['NOMBRE']);
$EDITORIAL=utf8_decode($_POST['EDITORIAL']);
$GENERO=utf8_decode($_POST['GENERO']);
$IDIOMA=utf8_decode($_POST['IDIOMA']);
$PAGINAS=utf8_decode($_POST['PAGINAS']);


$update = "UPDATE libros SET lib_nom='$NOMBRE', id_edit='$EDITORIAL', id_genero='$GENERO', id_idioma='$IDIOMA', lib_pag='$PAGINAS' where ISBN ='$ISBN' ";

    if( mysqli_query($conexion, $update)){
        //die('REGISTRADO'); // 
        header ('Location: ../libros.php');
    }
?>