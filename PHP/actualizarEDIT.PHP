<?php
$puerto = "localhost";
$usuario = "root";
$pass = "";
$dbname = "biblioteca" ;
$conexion = mysqli_connect($puerto,$usuario,$pass,$dbname);

$ID=utf8_decode($_POST['ID']);
$NOMBRE=utf8_decode($_POST['NOMBRE']);
$CORREO=utf8_decode($_POST['CORREO']);
$TELEFONO=utf8_decode($_POST['TELEFONO']);
$DIRECCION=utf8_decode($_POST['DIRECCION']);


$query = "UPDATE editoriales SET edit_nombre='$NOMBRE' where id_edit = '$ID'";
$update= mysqli_query($conexion, $query);
/////////////////////////////////////////////////////////

$select="SELECT editoriales.id_edit, correos.id_correo from editoriales INNER JOIN correo_editorial on correo_editorial.id_edit=editoriales.id_edit INNER JOIN correos on correos.id_correo=correo_editorial.id_correo where editoriales.id_edit ='$ID' ";
$res = mysqli_query($conexion,$select);
$filas=mysqli_fetch_array($res);
$idemail = $filas['id_correo'];
$query2 = "UPDATE correos SET correo='$CORREO' where id_correo = '$idemail'";
$update2= mysqli_query($conexion, $query2);
//////////////////////////////////////////////////////////////////////////

$select2="SELECT editoriales.id_edit, phones.id_telefono from editoriales INNER JOIN phone_editorial on phone_editorial.id_editorial=editoriales.id_edit INNER JOIN phones on phones.id_telefono=phone_editorial.id_telefono where editoriales.id_edit ='$ID' ";
$res2 = mysqli_query($conexion,$select2);
$filas2=mysqli_fetch_array($res2);
$idph = $filas2['id_telefono'];
$query3 = "UPDATE phones SET telefono='$TELEFONO' where id_telefono = '$idph'";
$update3= mysqli_query($conexion, $query3);
/////////////////////////////////////////////////////////////////////////

$select3="SELECT editoriales.id_edit, direcciones.id_direccion from editoriales INNER JOIN direccion_editorial on direccion_editorial.id_edit=editoriales.id_edit INNER JOIN direcciones on direcciones.id_direccion=direccion_editorial.id_direccion where editoriales.id_edit ='$ID' ";
$res3 = mysqli_query($conexion,$select3);
$filas3=mysqli_fetch_array($res3);
$iddr = $filas3['id_direccion'];
$query4 = "UPDATE direcciones SET direccion='$DIRECCION' where id_direccion = '$iddr'";
$update4= mysqli_query($conexion, $query4);



if( $update || $update2 || $update3 || $query4){
    //die('REGISTRADO'); // 
    header ('Location: ../Editoriales.php');
}else{
    die('NO REGISTRADO');
}
?>