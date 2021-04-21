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


    

        $ID_USU = utf8_decode($_POST['id_usuario']);
        $USU_NOM = utf8_decode($_POST['firstname']);
        $USU_NOM2 = utf8_decode($_POST['flastname']);
        $USU_PAIS = utf8_decode($_POST['pais']);
        $USU_NAC = utf8_decode($_POST['borndate']);
        $USU_MUE = utf8_decode($_POST['diedate']);
        $USU_DIR = utf8_decode($_POST['address']);
        $USU_MAIL = utf8_decode($_POST['mail']);
        $USU_TELEF = utf8_decode($_POST['phone']);
        $USU_SEXO = utf8_decode($_POST['sexo']);

        $insert = "INSERT INTO autores (id_autor, aut_nom, aut_ape, aut_pais, aut_fecha_nac, aut_fecha_mu, aut_sexo) VALUES ('$ID_USU', '$USU_NOM', '$USU_NOM2', '$USU_PAIS', '$USU_APE2', '$USU_NAC', '$USU_SEXO')";

        $registroautor = mysqli_query($conexion, $insert);

        if( $registroautor )
        {
            
            $insert2 = "INSERT INTO phones (telefono,id_tipo_tel) values ('$USU_TELEF','2')";
            $insert3 = "INSERT INTO correos (correo) values ('$USU_MAIL')";
            $insert4 = "INSERT INTO direcciones (direccion) values ('$USU_DIR')";
            

            if( mysqli_query($conexion, $insert2) && mysqli_query($conexion, $insert3) && mysqli_query($conexion, $insert4)) {


                $consulta2 = "SELECT correos.id_correo from correos where correos.correo = '$USU_MAIL' ";
                $res  = mysqli_query($conexion,$consulta2);
                while ($f =mysqli_fetch_array($res)){
                    //echo "<p>";
                    $dat1 = $f ["id_correo"];
                    //echo $dat1;
                }                
                $insert5 = "INSERT INTO correo_autor values ('$dat1', '$ID_USU', '$hoy')";
                if (mysqli_query($conexion,$insert5)){
                    $v=0;
                }else{
                    die('Error conexion,insert5');
                }
///////////////////////////////////////////////////////////////////////////////////////////////////////

                $consulta3 = "SELECT phones.id_telefono from phones where phones.telefono = '$USU_TELEF' ";
                $res2 = mysqli_query($conexion,$consulta3);
                while ($f2 =mysqli_fetch_array($res2)){
                    $dat2 = $f2 ["id_telefono"];
                }
                $insert6 = "INSERT INTO phone_autores values ('$dat2', '$ID_USU', '$hoy')";
                if (mysqli_query($conexion,$insert6)){
                   $v++;
                }else{
                    //die('Error conexion,insert6');
                    echo $dat2;
                }
//////////////////////////////////////////////////////////////////////////////////////////////////////

                $consulta4 = "SELECT direcciones.id_direccion from direcciones where direcciones.direccion = '$USU_DIR' ";
                $res3 = mysqli_query($conexion,$consulta4);
                while ($f3 =mysqli_fetch_array($res3)){
                    $dat3 = $f3 ["id_direccion"];
                }
                $insert7 = "INSERT INTO direccion_autor values ('$dat3', '$ID_USU', '$hoy')";
                if(mysqli_query($conexion,$insert7)){
                    $v++;
                }else{
                    //die('Error conexion,insert7');
                    echo $dat3;
                }


                if($v == 2){
                    //header('Location: Success.html');
                    header('Location: ../Autores.php');
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