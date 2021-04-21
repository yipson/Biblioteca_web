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
   
    $consulta="SELECT prestamos.id_prestamo, prestamos.pres_fech_pres, bibliotecarios.bib_nom, bibliotecarios.bib_ape, prestamos.pres_vlr_tot_mult from prestamos
    inner join bibliotecarios on bibliotecarios.id_bib = prestamos.id_bib where prestamos.id_usu = 4";

    $datos= mysqli_query($conexion,$consulta);

    while ($fila =mysqli_fetch_array($datos))
    {
        echo "<p>";
        echo $fila ["id_prestamo"];
        echo "-";
        echo $fila["pres_fech_pres"];
        echo "-";
        echo $fila ["bib_nom"];
        echo "-";
        echo $fila ["bib_ape"];
        echo "-";
        echo $fila ["pres_vlr_tot_mult"];
        echo "</p>";
    }
}

?>