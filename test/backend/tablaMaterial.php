<script src="./js/eliminar.js" type="text/javascript"  ></script>
<table class="tabla tablaDatos">
    <thead>
        <tr>
            <th>NOMBRE</th>
            <th>DESCRIPCIÓN</th>
            <th>FICHERO</th>
            <th>CURSO</th>
            <th>TIPO</th>
            <th>TAMAÑO</th>
            <th>EXTENSIÓN</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        include_once '../conexion/bbdd.php';
        $sentencia = mysqli_query($conn, "SELECT * FROM material ORDER BY id DESC");
        while ($fila = mysqli_fetch_row($sentencia)) {
            if (is_numeric($fila[2])) {
                $size = round($fila[2] / 10000, 2);
            } else {
                $size = 0;
            }
            ?>
            <tr class="trhover">
                <td><?php echo utf8_encode($fila[1]) ?></td>
                <td><?php echo utf8_encode($fila[6]) ?></td>
                <td><a href="../uploads/<?php echo utf8_encode($fila[4]) ?>" target="_blank" ><?php echo utf8_encode($fila[4]) ?></a></td>
                <td><?php echo utf8_encode($fila[7]) ?></td>
                <td><?php echo $fila[3] ?></td>
                <td><?php echo str_replace('.', ',', $size) ?> Mb</td>        
                <td><?php echo $fila[5] ?></td>
                <td class="accion"><button id="eliminar" class="go" style="border:none;background-color: transparent" value="<?php echo $fila[0]; ?>" type="button" onclick="editar(<?php echo $fila[0]; ?>)">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </button></td>
                <td class="accion" ><button id="eliminar" class="go" style="border:none;background-color: transparent" value="<?php echo $fila[0]; ?>" type="button" onclick="eliminar(<?php echo $fila[0]; ?>)">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                        </svg>
                    </button></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
