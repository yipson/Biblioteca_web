<html>

<style>

    input[type=submit] {
        width: 100%;
        background-color: #2D9AB7;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

</style>

<?php

$puerto = "localhost";
$usuario = "root";
$pass = "";
$dbname = "biblioteca" ;
$conexion = mysqli_connect($puerto,$usuario,$pass,$dbname);

if(!$conexion) {

    die('No se ha podido conectar con la base de datos');

} else {

    $ID_USU = utf8_decode($_POST['id_user']);
    $ID_BIBLI = utf8_decode($_POST['id_bibli']);
    $USU_MULTA = utf8_decode($_POST['multa']);
    $FECH_PRES = utf8_decode($_POST['fecha_prestamo']);
    $FECH_DEV = utf8_decode($_POST['fecha_devolucion']);
    $ID_LIBRO = utf8_decode($_POST['book']);


    $select="SELECT id_prestamo FROM prestamos WHERE id_prestamo=(SELECT MAX(id_prestamo) FROM prestamos) ";

                    
    $INGRESAR = "INSERT INTO prestamos (id_usu, id_bib, pres_vlr_tot_mult, pres_fech_pres) VALUES ('$ID_USU', '$ID_BIBLI', '$USU_MULTA', '$USU_FECHA')";
    $INGRESAR2 = "INSERT INTO detalle_prestamo (fec_pres, fec_dev, vlr_multa, tot_multa) VALUES ('$FECH_PRES', '$FECH_DEVO', '$USU_MULTA', '$USU_MULTA')";

    $prestamo = mysqli_query($conexion, $INGRESAR);
    $detalle = mysqli_query($conexion, $INGRESAR2);

    if( mysqli_query($conexion, $INGRESAR) || mysqli_query($conexion, $INGRESAR2)) {

        echo '<script language="javascript">';
        echo 'alert ("Registro completado")';
        echo '</script>';
        
        
    }else{

        header('Location: Error.html');
    }      

}
?>



<form action="Solicitud_Prestamo.php" method="post">
    <input type="submit" value="Registrar otro prestamo"> <br>
</form>

<form action="bibliotecario_index.html"  method="post">
    <input type="submit" value="Menú Principal"> <br>
</form>

</html>