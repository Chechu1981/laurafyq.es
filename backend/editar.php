
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/propias.css" />
        <?php
        include_once '../conexion/bbdd.php';
        $nombre = "";
        $descripcion = "";
        $curso = "";
        $tipo = "";
        $fichero = "SELECT * FROM material WHERE id= '" . $_GET['cursoid'] . "' ORDER by nombre,tipo ASC";
        $ficheroFila = mysqli_query($conn, $fichero);
        while ($col = mysqli_fetch_row($ficheroFila)) {
            $nombre = utf8_encode($col[1]);
            $descripcion = utf8_encode($col[6]);
            $curso = $col[7];
            $tipo = $col[3];
        }
        ?><p></p>
        <div id="dialog-form" title="Create new user" style="margin: 10px">
            <form name="fichero"  id="fichero" onKeyPress="if (event.keyCode === 13 && node.type !== 'TEXTAREA')event.returnValue = false;" >
                <input type="hidden"name="id" id="id" value="<?php echo $_GET['cursoid']; ?>" ></input>
                <span >TÍTULO</span><br/>
                <input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>" /><p></p>
                <span  >DESCRIPCIÓN</span><br/>
                <textarea name="descripcion" id="descripcion" class="textarea" ><?php echo $descripcion ?></textarea><p></p>
                <span >TIPO</span>
                <select type="text" name="tipo" id="tipo" >
                    <option></option>
                    <option <?php
                    if ($tipo == "PRESENTACION") {
                        echo 'selected="selected"';
                    }
                    ?> >PRESENTACION</option>
                    <option <?php
                    if ($tipo == "TEMA") {
                        echo 'selected="selected"';
                    }
                    ?> >TEMA</option>
                    <option <?php
                    if ($tipo == "EJERCICIOS") {
                        echo 'selected="selected"';
                    }
                    ?> >EJERCICIOS</option>
                </select><p></p>
                <span>CURSO</span>
                <select type="text" name="curso" id="curso" >
                    <option></option>
                    <?php
                    include_once '../conexion/bbdd.php';
                    $sentencia = mysqli_query($conn, "SELECT * FROM cursos");
                    while ($fila = mysqli_fetch_row($sentencia)) {
                        ?>
                        <option <?php
                        if ($curso == $fila[2] . substr($fila[1], 0, 3)) {
                            echo 'selected="selected"';
                        }
                        ?> value="<?php echo $fila[2] . substr($fila[1], 0, 3) ?>"><?php echo $fila[2] . 'º ' . $fila[1] ?></option>
                        <?php }  ?>
                </select> <p></p>

                <p></p>
            </form>
            <button id="guardar">Guardar</button>
        </div>
        <script src="../vendor/jquery/jquery.js" type="text/javascript"></script>
        <script src="../js/editar.js" type="text/javascript"  ></script>
        