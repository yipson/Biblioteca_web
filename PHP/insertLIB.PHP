<?php

$puerto = "localhost";
$usuario = "root";
$pass = "";
$dbname = "biblioteca" ;

$conexion = mysqli_connect($puerto,$usuario,$pass,$dbname);

$hoy = date("Y/m/d");

if(!$conexion)
{
    die('No se ha podido conectar con la base de datos');
    
    
}else{

    $ISBN = utf8_decode($_POST['ISBN']);
    $NOMBRE = utf8_decode($_POST['NOMBRE']);
    $EDITORIAL = utf8_decode($_POST['EDITORIAL']);
    $GENERO = utf8_decode($_POST['GENERO']);
    $IDIOMA = utf8_decode($_POST['IDIOMA']);
    $PAGINAS = utf8_decode($_POST['PAGINAS']);


    $insert = "INSERT INTO libros (ISBN, lib_nom, id_edit, id_genero, id_idioma, lib_pag) VALUES ('$ISBN','$NOMBRE','$EDITORIAL','$GENERO','$IDIOMA','$PAGINAS')";

    if( mysqli_query($conexion, $insert)){
        //die('REGISTRADO'); // 
        header ('Location: ../libros.php');
    }


}

?>