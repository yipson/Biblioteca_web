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


        $ID = utf8_decode($_POST['id']);
        $NAME = utf8_decode($_POST['name']);
        $MAIL = utf8_decode($_POST['mail']);
        $PHONE = utf8_decode($_POST['phone']);
        $ADRESS = utf8_decode($_POST['adress']);

        $insert = "INSERT INTO editoriales (id_edit, edi_nombre) VALUES ('$ID', '$NAME')";

        $registro = mysqli_query($conexion, $insert);

        if( $registro )
        {
            
            $insert2 = "INSERT INTO phones (telefono,id_tipo_tel) values ('$PHONE','2')";
            $insert3 = "INSERT INTO correos (correo) values ('$MAIL')";
            $insert4 = "INSERT INTO direcciones (direccion) values ('$ADRESS')";
            

            if( mysqli_query($conexion, $insert2) && mysqli_query($conexion, $insert3) && mysqli_query($conexion, $insert4)) {


                $consulta2 = "SELECT correos.id_correo from correos where correos.correo = '$MAIL' ";
                $res  = mysqli_query($conexion,$consulta2);
                while ($f =mysqli_fetch_array($res)){
                    //echo "<p>";
                    $dat1 = $f ["id_correo"];
                    //echo $dat1;
                }                
                $insert5 = "INSERT INTO correo_editorial values ('$dat1', '$ID', '$hoy')";
                if (mysqli_query($conexion,$insert5)){
                    $v=0;
                }else{
                    die('Error conexion,insert5');
                }
///////////////////////////////////////////////////////////////////////////////////////////////////////

                $consulta3 = "SELECT phones.id_telefono from phones where phones.telefono = '$PHONE' ";
                $res2 = mysqli_query($conexion,$consulta3);
                while ($f2 =mysqli_fetch_array($res2)){
                    $dat2 = $f2 ["id_telefono"];
                }
                $insert6 = "INSERT INTO phone_editorial values ('$dat2', '$ID', '$hoy')";
                if (mysqli_query($conexion,$insert6)){
                   $v++;
                }else{
                    //die('Error conexion,insert6');
                    echo $dat2;
                }
//////////////////////////////////////////////////////////////////////////////////////////////////////

                $consulta4 = "SELECT direcciones.id_direccion from direcciones where direcciones.direccion = '$ADRESS' ";
                $res3 = mysqli_query($conexion,$consulta4);
                while ($f3 =mysqli_fetch_array($res3)){
                    $dat3 = $f3 ["id_direccion"];
                }
                $insert7 = "INSERT INTO direccion_editorial values ('$dat3', '$ID', '$hoy')";
                if(mysqli_query($conexion,$insert7)){
                    $v++;
                }else{
                    //die('Error conexion,insert7');
                    echo $dat3;
                }


                if($v == 2){
                    //header('Location: Success.html');
                    header('Location: ../Editoriales.php');
                }else{
                    //die('Error v diferente');
                    echo('Error v diferente');
                }


            }else{

                header('Location: Error.html');
            }       
        
        }else
        {
            header('Location: Error.html');

        }
           

}

?>