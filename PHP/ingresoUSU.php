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

    $USU_ID = utf8_decode($_POST['id']);
    $USU_PSS = utf8_decode($_POST['pass']);

    if($USU_ID == null){
        die ('el campo n° doc esta vacio');
    }else if($USU_PSS == null){
        die('el campo contraseña esta vacio');
    }else{


        $sql = "SELECT usuarios.id_usuario from usuarios where usuarios.id_usuario = '$USU_ID' and usuarios.usu_clave = '$USU_PSS'";
        $res  = mysqli_query($conexion,$sql);
        while ($f =mysqli_fetch_array($res)){
            $dat1 = $f ["id_usuario"];
        }

        if($dat1 == null){
            die ('El usuario no existe'); // js USUARIO NO EXISTE
        }else{
            die ('usuario existente'); // ingreso del usuario
        }

    }


}

?>