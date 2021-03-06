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
        height: 1600px;
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
        margin-top: 5px;
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
        height: 1300px;
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

        width: 100%;
        background-color: #2D9AB7;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
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


    input[type=date],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
	
	button {
		 width: 100%;
        background-color: #2D9AB7;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
 
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro Usuario</title>
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
	<script type="text/javascript" src="jquery-3.5.1.js"></script>	
<script type="text/javascript">
$(document).ready(function(){
    $("#hide").on('click', function() {
        $("#element").hide();
        return false;
    });
    
    $("#show").on('click', function() {
        $("#element").show();
        return false;
    });
});
</script>
</head>

<script type="text/javascript">

        function ConfirmADD()
        {
            var respuesta = confirm("Estas seguro de que deseas agregar el prestamo?");

            if(respuesta == true) {
                return true;
            } else {
                return false;
            }
        }

</script>

<body>
    <!-- Main Container -->
    <div class="container">
        <!-- Navigation -->
        <header> <a href="">
                <h4 class="logo">Registro Usuario</h4>
            </a>
            <nav>
                <ul>
                    <li><a href="bibliotecario_index.html">Inicio</a></li>
                    <li><a href="registro_usuario.html">Registro Usuario</a></li>
                    <li><a href="registro_prestamo.html">Registro Prestamo</a></li>
					<li><a href="Solicitud_Prestamo.html">Solicitud de Prestamo</a></li>
					
                </ul>
            </nav>
        </header>
        <!-- Hero Section -->
        <section class="hero" id="hero">
            <h2 class="hero_header">BIBLIOTECA <span class="light">VIRTUAL</span></h2>
            <p class="tagline">Control de prestamo de libros de Biblioteca</p>
        </section>
        <!-- About Section -->
        <section class="about" id="about">

        </section>
        <!-- Stats Gallery Section -->
        <!-- Parallax Section -->
        <section class="banner">
            <h2 class="hero_header">Solicitud de Prestamo</h2>
            <p class="tagline">Ingrese la informaci??n del Usuario que desea registrar</p>

            <div>
				<form action="registro_prestamo.php" method="post">
	
                    <label for="fname">Numero Documento</label>
                    <select name="id_user" id="id_user">
                    <option value="0">Seleccione:</option>
                    <?php
                    $puerto = "localhost";
                    $usuario = "root";
                    $pass = "";
                    $dbname = "biblioteca" ;
                    $conexion = mysqli_connect($puerto,$usuario,$pass,$dbname);
                    $query = $conexion -> query ("SELECT * from usuarios");

                    while ($valores = mysqli_fetch_array($query)) {

                        echo '<option value= "'.$valores[id_usuario].'">'.$valores[id_usuario].'</option>';
                    }          
                    ?>
                    </select>
                   

                    <label for="fname">ID Bibliotecario</label>
                    <select name="id_bibli" id="id_bibli">
                    <option value="0">Seleccione:</option>
                    <?php
                    $puerto = "localhost";
                    $usuario = "root";
                    $pass = "";
                    $dbname = "biblioteca" ;
                    $conexion = mysqli_connect($puerto,$usuario,$pass,$dbname);
                    $query = $conexion -> query ("SELECT * from bibliotecarios");

                    while ($valores = mysqli_fetch_array($query)) {

                        echo '<option value= "'.$valores[id_bib].'">'.$valores[id_bib].'</option>';

                    }          
                    ?>
                    </select>

                    
                    <label for="fname">Multa mayor a diez d??as</label>
                    <input type="text" id="multa" name="multa" placeholder=""><br>

                    <label for="fname">Fecha de Prestamo</label>
                    <input type="date" id="fecha_prestamo" name="fecha_prestamo" placeholder=""><br>

                    <label for="fname">Fecha de Devoluci??n</label>
                    <input type="date" id="fecha_devolucion" name="fecha_devolucion" placeholder=""><br>

                    				
					<label for="fname">Libro a prestar</label>
                    <select name="book" id="book">
                    <option value="0">Seleccione:</option>
                    <?php
                    $puerto = "localhost";
                    $usuario = "root";
                    $pass = "";
                    $dbname = "biblioteca" ;
                    $conexion = mysqli_connect($puerto,$usuario,$pass,$dbname);
                    $query = $conexion -> query ("SELECT * from libros");

                    while ($valores = mysqli_fetch_array($query)) {

                        echo '<option value= "'.$valores[ISBN].'">'.$valores[lib_nom].'</option>';
                    }          
                    ?>
                    </select>
					<div>
					<a class="button" href="#" id="show">Agregar otro Libro</a>
						<a class="button" href="#" id="hide">Cancelar</a>

					<div id="element" style="display: none;">						
					<label for="fname">Libro a prestar</label>
                    <select name="book" id="book">
                    <option value="0">Seleccione:</option>
                    <?php
                    $puerto = "localhost";
                    $usuario = "root";
                    $pass = "";
                    $dbname = "biblioteca" ;
                    $conexion = mysqli_connect($puerto,$usuario,$pass,$dbname);
                    $query = $conexion -> query ("SELECT * from libros");

                    while ($valores = mysqli_fetch_array($query)) {

                        echo '<option value= "'.$valores[ISBN].'">'.$valores[lib_nom].'</option>';
                    }          
                    ?>
                    </select>
					</div>
						
					</div>

					<button type="submit" href='registro_prestamo.php' onclick="return ConfirmADD()">Generar Prestamo</button> 				
				

 </form>
            </div>

        </section>
        <!-- More Info Section -->
        <!-- Footer Section -->

        <!-- Copyrights Section -->
        <div class="copyright">Universidad Cooperativa de Colombia</div>
    </div>
    <!-- Main Container Ends -->
</body>

</html>