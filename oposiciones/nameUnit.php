<?php
include_once '../conexion/bbdd.php';
$id = $_POST['num'];
$name = mysqli_query($conn, "SELECT * FROM temario WHERE num = ".$id);
$unit = mysqli_fetch_row($name);
echo  utf8_encode($unit[2]);
