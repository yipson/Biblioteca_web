<!doctype html>
<html lang="en-US">
<style>
    @charset "UTF-8";

    /* Body */
    body {
        font-family: source-sans-pro;
        background-color: #f2f2f2;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        font-style: normal;
        font-weight: 200;
    }

    /* Container */
    .container {
        width: 90%;
        margin-left: auto;
        margin-right: auto;
        height: 1000px;
        background-color: #FFFFFF;
    }

    /* Navigation */
    header {
        width: 100%;
        height: 5%;
        background-color: #52bad5;
        border-bottom: 1px solid #2C9AB7;
    }

    .logo {
        color: #fff;
        font-weight: bold;
        text-align: undefined;
        width: 10%;
        float: left;
        margin-top: 15px;
        margin-left: 25px;
        letter-spacing: 4px;
    }

    nav {
        float: right;
        width: 50%;
        text-align: right;
        margin-right: 25px;
    }

    header nav ul {
        list-style: none;
        float: right;
    }

    nav ul li {
        float: left;
        color: #FFFFFF;
        font-size: 14px;
        text-align: left;
        margin-right: 25px;
        letter-spacing: 2px;
        font-weight: bold;
        transition: all 0.3s linear;
    }

    ul li a {
        color: #FFFFFF;
        text-decoration: none;
    }

    ul li:hover a {
        color: #2C9AB7;
    }

    .hero_header {
        color: #FFFFFF;
        text-align: center;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        letter-spacing: 4px;
    }

    /* Hero Section */
    .hero {
        background-color: #B3B3B3;
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .light {
        font-weight: bold;
        color: #717070;
    }

    .tagline {
        text-align: center;
        color: #FFFFFF;
        margin-top: 4px;
        font-weight: lighter;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* About Section */
    .text_column {
        width: 29%;
        text-align: justify;
        font-weight: lighter;
        line-height: 25px;
        float: left;
        padding-left: 20px;
        padding-right: 20px;
        color: #A3A3A3;
    }

    .about {
        padding-left: 25px;
        padding-right: 25px;
        padding-top: 35px;
        display: inline-block;
        background-color: #FFFFFF;
        margin-top: 0px;
    }

    /* Stats Gallery */
    .stats {
        color: #717070;
        margin-bottom: 5px;
    }

    .gallery {
        clear: both;
        display: inline-block;
        width: 100%;
        background-color: #FFFFFF;
        /* [disabled]min-width: 400px;
*/
        padding-bottom: 35px;
        padding-top: 0px;
        margin-top: -5px;
        margin-bottom: 0px;
    }

    .thumbnail {
        width: 25%;
        text-align: center;
        float: left;
        margin-top: 35px;
    }

    .gallery .thumbnail h4 {
        margin-top: 5px;
        margin-right: 5px;
        margin-bottom: 5px;
        margin-left: 5px;
        color: #52BAD5;
    }

    .gallery .thumbnail p {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        color: #A3A3A3;
    }

    /* Parallax Section */
    .banner {
        background-color: #2D9AB7;
        background-image: url(../images/parallax.png);
        height: 700px;
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .parallax {
        color: #FFFFFF;
        text-align: right;
        padding-right: 100px;
        padding-top: 110px;
        letter-spacing: 2px;
        margin-top: 0px;
    }

    .parallax_description {
        color: #FFFFFF;
        text-align: right;
        padding-right: 100px;
        width: 30%;
        float: right;
        font-weight: lighter;
        line-height: 23px;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
    }

    /* More info */
    footer {
        background-color: #FFFFFF;
        padding-bottom: 35px;
    }

    .footer_column {
        width: 50%;
        text-align: center;
        padding-top: 30px;
        float: left;
    }

    footer .footer_column h3 {
        color: #B3B3B3;
        text-align: center;
    }

    footer .footer_column p {
        color: #717070;
        background-color: #FFFFFF;
    }

    .cards {
        width: 100%;
        height: auto;
        max-width: 400px;
        max-height: 200px;
    }

    footer .footer_column p {
        padding-left: 30px;
        padding-right: 30px;
        text-align: justify;
        line-height: 25px;
        font-weight: lighter;
        margin-left: 20px;
        margin-right: 20px;
    }

    .button {
        width: 200px;
        margin-top: 40px;
        margin-right: auto;
        margin-bottom: auto;
        margin-left: auto;
        padding-top: 20px;
        padding-right: 10px;
        padding-bottom: 20px;
        padding-left: 10px;
        text-align: center;
        vertical-align: middle;
        border-radius: 0px;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 2px;
        border: 3px solid #FFFFFF;
        color: #FFFFFF;
        transition: all 0.3s linear;
    }

    .button:hover {
        background-color: #FEFEFE;
        color: #C4C4C4;
        cursor: pointer;
    }

    .copyright {
        text-align: center;
        padding-top: 20px;
        padding-bottom: 20px;
        background-color: #717070;
        color: #FFFFFF;
        text-transform: uppercase;
        font-weight: lighter;
        letter-spacing: 2px;
        border-top-width: 2px;
    }

    .footer_banner {
        background-color: #B3B3B3;
        padding-top: 60px;
        padding-bottom: 60PX;
        margin-bottom: 0px;
        background-image: url(../images/pattern.png);
        background-repeat: repeat;
    }

    footer {
        display: inline-block;
    }

    .hidden {
        display: none;
    }

    /* Mobile */
    @media (max-width: 320px) {
        .logo {
            width: 100%;
            text-align: center;
            margin-top: 13px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
        }

        .container header nav {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            width: 100%;
            float: none;
            display: none;
        }

        nav ul li {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            width: 100%;
            text-align: center;
        }

        .text_column {
            width: 100%;
            text-align: justify;
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        .thumbnail {
            width: 100%;
        }

        .footer_column {
            width: 100%;
            margin-top: 0px;
        }

        .parallax {
            text-align: center;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            padding-top: 40%;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            width: 100%;
            font-size: 18px;
        }

        .parallax_description {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            width: 90%;
            margin-top: 25px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 12px;
            float: none;
            text-align: center;
        }

        .banner {
            background-color: #2D9AB7;
            background-image: none;
        }

        .tagline {
            margin-top: 20px;
            line-height: 22px;
        }

        .hero_header {
            padding-left: 10px;
            padding-right: 10px;
            line-height: 22px;
            text-align: center;
        }
    }

    /* Small Tablets */
    @media (min-width: 321px)and (max-width: 767px) {
        .logo {
            width: 100%;
            text-align: center;
            margin-top: 13px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            color: #043745;
        }

        .container header nav {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            width: 100%;
            float: none;
            overflow: auto;
            display: inline-block;
            background: #52bad5;
        }

        header nav ul {
            padding: 0px;
            float: none;
        }

        nav ul li {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            width: 100%;
            text-align: center;
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .text_column {
            width: 100%;
            text-align: left;
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        .thumbnail {
            width: 100%;
        }

        .footer_column {
            width: 100%;
            margin-top: 0px;
        }

        .parallax {
            text-align: center;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            padding-top: 40%;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            width: 100%;
            font-size: 18px;
        }

        .parallax_description {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            margin-top: 30%;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            float: none;
            width: 100%;
            text-align: center;
        }

        .thumbnail {
            width: 50%;
        }

        .parallax {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            padding-top: 20%;
        }

        .parallax_description {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            width: 100%;
            padding-top: 30px;
        }

        .banner {
            padding-left: 20px;
            padding-right: 20px;
        }

        .footer_column {
            width: 100%;
        }
    }

    /* Small Desktops */
    @media (min-width: 768px) and (max-width: 1096px) {
        .text_column {
            width: 100%;
        }

        .thumbnail {
            width: 50%;
        }

        .text_column {
            width: 100%;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        .banner {
            margin-top: 0px;
            padding-top: 0px;
        }
    }

    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

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

    input[type=password],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }



    input[type=submit]:hover {
        background-color: #717070;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    #customers {
        font-family: source-sans-pro;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1.5px solid #28C2CC;
        padding: 5px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        padding-left: 5;
        text-align: center;
        background-color: #AFC1C2;
        color: #657172;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro</title>
    <link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
    <!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
    <script>var __adobewebfontsappname__ = "dreamweaver"</script>
    <script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Main Container -->
    <div class="container">
        <!-- Navigation -->
        <header> <a href="index.html">
                <h4 class="logo">Cerrar Sesion</h4>
            </a>
            <nav>
                <ul>
                    <li><a href="listarUSU.php">Usuarios</a></li>
                    <li><a href="libros.php">Libros</a></li>
                    <li><a href="registro_prestamo.php">Registro Prestamo</a></li>
                    <li><a href="registro_usuario.html">Registro Usuario</a></li>                    
                    <li><a href="bibliotecario_index.php">Inicio</a></li>                     
                </ul>
            </nav>
        </header>
        <!-- Hero Section -->
        <section class="hero" id="hero">
            <h2 class="hero_header">BIBLIOTECA <span class="light">VIRTUAL</span></h2>
            <p class="tagline">Control de libros</p>
        </section>
        <!-- About Section -->
        <section class="about" id="about">

        </section>
        <!-- Stats Gallery Section -->
        <!-- Parallax Section -->
        <section class="banner">
            <h2 class="hero_header">Editar Editorial</h2>
            <p class="tagline">Aquí, podra ingresar o modificar infromacion de las editoriales</p>

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

                $ID = $_REQUEST['id'];

                $consulta = "SELECT editoriales.id_edit, editoriales.edi_nombre, correos.correo, phones.telefono, direcciones.direccion from editoriales INNER JOIN correo_editorial on correo_editorial.id_edit=editoriales.id_edit INNER JOIN correos on correos.id_correo=correo_editorial.id_correo INNER JOIN phone_editorial on phone_editorial.id_editorial=editoriales.id_edit INNER JOIN phones on phones.id_telefono=phone_editorial.id_telefono INNER JOIN direccion_editorial on direccion_editorial.id_edit=editoriales.id_edit INNER JOIN direcciones on direcciones.id_direccion=direccion_editorial.id_direccion WHERE editoriales.id_edit='$ID'";

                $res = mysqli_query($conexion,$consulta);
                
                                 
                while ($fila = mysqli_fetch_array($res)){
                    
                    
            ?>

<div>
	<form action="PHP/actualizarEDIT.php"  method="POST">

                <label for="fname" >ID</label>
                <input type="text" name="ID" readonly="readonly" value="<?php  echo $fila['id_edit'] ?>">

                <label for="fname">Nombre</label>
                <input type="text" name="NOMBRE" value="<?php  echo $fila['edi_nombre'] ?>">

                <label for="fname">Correo</label>
                <input type="text" name="CORREO" value="<?php  echo $fila['correo'] ?>">

                <label for="fname">Telefono</label>
                <input type="text" name="TELEFONO" value="<?php  echo $fila['telefono'] ?>">

                <label for="fname">Direccion</label>
                <input type="text" name="DIRECCION" value="<?php  echo $fila['direccion'] ?>">


                    <input type="submit" name="" value="Actualizar">

	</form>
                <?php } ?>
</div>



            <?php
            }
            ?>


        </section>
        <!-- More Info Section -->
        <!-- Footer Section -->

        <!-- Copyrights Section -->
        <div class="copyright">Universidad Cooperativa de Colombia</div>
    </div>
    <!-- Main Container Ends -->
</body>
</html>