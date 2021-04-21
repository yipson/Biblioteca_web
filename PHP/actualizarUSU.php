<?php
$puerto = "localhost";
$usuario = "root";
$pass = "";
$dbname = "biblioteca" ;
$conexion = mysqli_connect($puerto,$usuario,$pass,$dbname);

$id=utf8_decode($_POST['id_usuario']);
$fname=utf8_decode($_POST['firstname']);
$sname=utf8_decode($_POST['secondname']);
$flname=utf8_decode($_POST['flastname']);
$slname=utf8_decode($_POST['slastname']);
$born=utf8_decode($_POST['borndate']);
$address=utf8_decode($_POST['address']);
$mail=utf8_decode($_POST['mail']);
$phone=utf8_decode($_POST['phone']);
$pass=utf8_decode($_POST['password']);



$query = "UPDATE usuarios SET usu_nom='$fname' where id_usuario = '$id'";
$update= mysqli_query($conexion, $query);

$query2 = "UPDATE usuarios SET usu_2nom='$sname' where id_usuario = '$id'";
$update2= mysqli_query($conexion, $query2);

$query3 = "UPDATE usuarios SET usu_ape='$flname' where id_usuario = '$id'";
$update3= mysqli_query($conexion, $query3);

$query4 = "UPDATE usuarios SET usu_2ape='$slname' where id_usuario = '$id'";
$update4= mysqli_query($conexion, $query4);

$query5 = "UPDATE usuarios SET usu_fec_na='$born' where id_usuario = '$id'";
$update5= mysqli_query($conexion, $query5);
////////////////////////////////////////////////////////////////////////

$select="SELECT usuarios.id_usuario, direcciones.id_direccion from usuarios INNER JOIN direccion_usuario on direccion_usuario.id_usuario=usuarios.id_usuario INNER JOIN direcciones on direcciones.id_direccion=direccion_usuario.id_direccion where usuarios.id_usuario = '$id' ";
$res = mysqli_query($conexion,$select);
$filas=mysqli_fetch_array($res);
$iddir = $filas ['id_direccion'];
$query6 = "UPDATE direcciones SET direccion='$address' where id_direccion = '$iddir'";
$update6= mysqli_query($conexion, $query6);
/////////////////////////////////////////////////////////////////////////

$select2="SELECT usuarios.id_usuario, correos.id_correo from usuarios INNER JOIN correo_usuario on correo_usuario.id_usuario=usuarios.id_usuario INNER JOIN correos on correos.id_correo=correo_usuario.id_correo where usuarios.id_usuario ='$id' ";
$res2 = mysqli_query($conexion,$select2);
$filas2 = mysqli_fetch_array($res2);
$idmail = $filas2['id_correo'];
$query7 = "UPDATE correos SET correo='$mail' where id_correo = '$idmail'";
$update7= mysqli_query($conexion, $query7);
//////////////////////////////////////////////////////////////////////////

$select3="SELECT usuarios.id_usuario, phones.id_telefono from usuarios INNER JOIN phone_usuarios on phone_usuarios.id_usuario=usuarios.id_usuario INNER JOIN phones on phones.id_telefono=phone_usuarios.id_telefono where usuarios.id_usuario= '$id' ";
$res3 = mysqli_query($conexion,$select3);
$filas3=mysqli_fetch_array($res3);
$idph = $filas3['id_telefono'];
$query8 = "UPDATE phones SET telefono='$phone' where id_telefono = '$idph'";
$update8= mysqli_query($conexion, $query8);

$query9 = "UPDATE usuarios SET usu_clave='$pass' where id_usuario = '$id'";
$update9= mysqli_query($conexion, $query9);



    if( $update || $update2 || $update3 || $update4 || $update5 || $update6 || $update7 || $update8 || $update9 ){
        //die('REGISTRADO'); // 
        header ('Location: ../listarUSU.php');
    }
?>