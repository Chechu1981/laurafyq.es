<?php
include_once 'file.php';
$fichero = new file(
    utf8_decode($_FILES['archivo']['name']),
    utf8_decode($_FILES['archivo']['tmp_name']),
    $_FILES['archivo']['size'],
    $_FILES['archivo']['type'],
    $_POST['fileRename']
);
$tipo = $fichero->getType();
$tamanio = $fichero->getSize();
$archivotmp = utf8_decode($fichero->getRute());
$target_dir = "../uploads/";
$target_file = $target_dir . utf8_encode($fichero->getName());
$respuesta = new stdClass();
$respuesta->mensaje = "";
$rename = $fichero->getRename();
//echo $archivotmp . " / " . utf8_encode($target_file);
if (move_uploaded_file($archivotmp, $target_file)) {
    $respuesta->estado = true;
} else {
    $respuesta->estado = false;
    $respuesta->mensaje = "El archivo no se pudo subir al servidor, inténtalo mas tarde";
}

rename($target_file,$target_dir.$rename.".".$fichero->getType());