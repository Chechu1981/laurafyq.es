<?php
include_once 'conexion/bbdd.php';
$sentencia1 = mysqli_query($conn, "SELECT * FROM cursos");
while ($fila = mysqli_fetch_row($sentencia1)) {
    ?> 
    <div id="<?php echo $fila[2] . strtolower(substr($fila[1], 0, 1)) ?>" class="boton-alu boton-sel">
        <img alt="curso" width="220px" src="img/<?php echo $fila[2] . strtolower(substr($fila[1], 0, 1)) ?>.png" alt=""/>
    </div>       
    <?php
}