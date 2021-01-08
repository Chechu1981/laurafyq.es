<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head id="recusrsos">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css" />
    <meta name="Description" content="Contenido didáctico de física y química de secundaria" />
    <title>Laura Royuela Romero</title>
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" />
    <link href="css/propias.css" rel="stylesheet" type="text/css" />
    <link href="css/toast.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <header style="">

        <!-- Barra de menús -->
        <?php
            if (isset($_GET['mensaje']))
                echo $_GET['mensaje'];
            include_once './login/conexion.php';
            include_once './login/usuario.php';
            session_start();
            if (isset($_POST['salir'])) {
                session_unset();
            }
            if (isset($_SESSION['usuario'])) {
                $usuario1 = $_SESSION['usuario'];
                ?><input type="hidden" id="sessionId" value="<?php echo session_id(); ?>"></input><?php
                include_once 'helper/menuMaster.php';
            }
            ?>
    </header>

    <div class="container">


        <?php
            if (!isset($_POST['meritos'])) {
                include_once 'helper/menuMaterial.php';
            }
            ?>
        <section id="tablaReg">

            <section id="tabla" style="padding: 0em;display: block;align-content: center">
                <div class="col-lg-8 mx-auto tabla">
                    <table>
                        <tr>
                            <td><img alt="quimica" src="img/vbla_040g_151020.png" style="float: left"
                                    id="logearse"></img></td>
                            <td>
                                <h1 class="titulo">FÍSICA Y QUÍMICA</h1>
                            </td>
                        </tr>
                    </table>
                </div>
            </section>
            <div style="clear:both;"></div>
            <div class="col-lg-12 mx-auto ">
                <?php
                    include_once 'helper/menuCursos.php';
                    ?>
            </div>
        </section>
    </div>
    </div>
    <div style="clear: both"></div>
    <footer class="bg-secondary">
        Laura Royuela Romero. Profesora de física y química de secundaria.
    </footer>
    <div id="cajacookies">
        <p><button onclick="aceptarCookies('y')"> Aceptar y cerrar éste
                mensaje</button>
            <button onclick="aceptarCookies('n')" class="pull-right">Cerrar este mensaje</button>
            Éste sitio web usa cookies, si permanece aquí acepta su uso.
            Puede leer más sobre el uso de cookies en nuestra <a href="politica.html">política de privacidad</a>.
        </p>
    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/propias.js" type="text/javascript"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->
    <script>
    /* ésto comprueba la localStorage si ya tiene la variable guardada */
    function compruebaAceptaCookies() {
        if (localStorage.aceptaCookies == 'true') {
            cajacookies.style.display = 'none';
        }
    }

    /* aquí guardamos la variable de que se ha
    aceptado el uso de cookies así no mostraremos
    el mensaje de nuevo */
    function aceptarCookies(q) {
        if (q == 'y') {
            localStorage.aceptaCookies = 'true';
            cajacookies.style.display = 'none';
        } else {
            localStorage.aceptaCookies = 'false';
            cajacookies.style.display = 'none';
        }

    }
    
    /* ésto se ejecuta cuando la web está cargada */
    $(document).ready(function() {
        compruebaAceptaCookies();
    });
    </script>

</body>

</html>