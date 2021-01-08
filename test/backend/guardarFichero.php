<?php
header('Content-Type: text/html; charset=ISO-8859-1');
$tipo = $_FILES['archivo']['type'];
$tamanio = $_FILES['archivo']['size'];
$archivotmp = utf8_decode($_FILES['archivo']['tmp_name']);
$target_dir = "../uploads/";
$target_file = $target_dir . basename(utf8_decode($_FILES['archivo']['name']));
echo $target_file;
$respuesta = new stdClass();
$respuesta->mensaje = "";
if (move_uploaded_file($archivotmp, $target_file)) {
    $respuesta->estado = true;
} else {
    $respuesta->estado = false;
    $respuesta->mensaje = "El archivo no se pudo subir al servidor, inténtalo mas tarde";
}
