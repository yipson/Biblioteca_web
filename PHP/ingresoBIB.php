<?php

$puerto = "localhost";
$usuario = "root";
$pass = "";
$dbname = "biblioteca" ;

$conexion = mysqli_connect($puerto,$usuario,$pass,$dbname);


if(!$conexion)
{
    die('No se ha podido conectar con la base de datos');
    
    
}else{

    $BIB_ID = utf8_decode($_POST['id']);
    $BIB_PSS = utf8_decode($_POST['pass']);

    if($BIB_ID == null){
        die ('el campo n° doc esta vacio');
    }else if($BIB_PSS == null){
        die('el campo contraseña esta vacio');
    }else{


        $sql = "SELECT bibliotecarios.id_bib from bibliotecarios where bibliotecarios.id_bib = '$BIB_ID' and bibliotecarios.bib_clave = '$BIB_PSS'";
        $res  = mysqli_query($conexion,$sql);
        while ($f =mysqli_fetch_array($res)){
            $dat1 = $f ["id_bib"];
        }

        if($dat1 == null){
            die ('El bibliotecario no existe'); // js USUARIO NO EXISTE
        }else{
            //include '../Funcion1.php';
            //bib($dat1);
            header('Location: ../bibliotecario_index.php');
        }

    }


}

?>