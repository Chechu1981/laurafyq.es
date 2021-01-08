<?php
include_once 'conexion/bbdd.php';
$cursos = mysqli_query($conn, "SELECT * FROM cursos");
?>
<nav id="menu" class="navbar navbar-expand-md navbar-dark  bg-secondary">
    <a class="navbar-brand mr-4" id="inicio" href="#"><img src="./img/favicon-32x32.png" class="" alt="icon"></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <?php while ($fila = mysqli_fetch_row($cursos)) { ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#"
                     data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><?php echo $fila[2] . " " . $fila[1]; ?></a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <?php
                        $temas = mysqli_query($conn, "SELECT DISTINCT nombre,curso FROM material WHERE curso = '" . $fila[2] . strtolower(substr($fila[1], 0, 3)) . "' ORDER BY nombre ASC");
                        while ($filaT = mysqli_fetch_row($temas)) {
                            ?>
                    <a class="dropdown-item" href="#"
                        onclick="tema('<?php echo $filaT[1] . "','" . $filaT[0]; ?> ')"><?php echo $filaT[0] ?></a>
                    <?php } ?>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</nav>