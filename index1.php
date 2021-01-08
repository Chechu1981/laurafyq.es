<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head id="recusrsos">
        <meta http-equiv="Content-Type" content="width=400, initial-scale=0" name="viewport" />
        <meta name="Description" content="Contenido didáctico de física y química de secundaria" />
        <title>Laura Royuela Romero</title>
        <link rel="icon" type="image/png" href="img/favicon-32x32.png"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/propias.css" rel="stylesheet" type="text/css"/>
        <link href="css/toast.css" rel="stylesheet" type="text/css" />
        <link href="css/menuDesplegable.css" rel="stylesheet" type="text/css" />
        <script src="vendor/jquery/jquery.js" type="text/javascript"></script>
        <script src="vendor/jquery-ui-1.12.1.custom/jquery-ui.min.js" type="text/javascript" ></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/propias.js" type="text/javascript"></script>
    </head>
    <body >
        
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
                    ?><input type="hidden" id="sessionId" value="<?php echo session_id(); ?>" ></input><?php
                    include_once 'helper/menuMaster.php';
                } ?>
                
            </header>
        <div class="container">
            <?php
            if (!isset($_POST['meritos'])) {
                    include_once 'helper/menuMaterial.php';
                }   
            ?>
            <section id="tablaReg" >

                <section id="tabla" style="padding: 0em;display: block;align-content: center" >
                    <div class="col-lg-8 mx-auto tabla" >
                        <table>
                            <tr>
                                <td><img alt="quimica" src="img/vbla_040g_151020.png" style="float: left" id="logearse"></img></td>
                                <td><h1 class="titulo">FÍSICA Y QUÍMICA</h1></td>
                            </tr>
                        </table>


                    </div>
                </section>
                <div style="clear:both;" ></div>
                <div class="col-lg-12 mx-auto "  >
                    <?php
                    include_once 'helper/menuCursos.php';
                    ?> 
                </div>  
            </section> 
        </div>
        <div style="clear: both"></div>
        <footer style="text-align: right;padding-top: 70px;">
            Laura Royuela Romero. Profesora de física y química de secundaria.

        </footer>
    </body>
</html>
