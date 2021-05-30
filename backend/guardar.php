<?php

include_once '../conexion/bbdd.php';
include_once 'file.php';

$fichero = new file(
    utf8_decode($_POST["nombre"]),
    utf8_decode($_POST["nombreFichero"]),
    $_POST["tamano"],
    $_POST["extension"],
    $_POST['id']
);

header('Content-Type: text/html; charset=ISO-8859-1');
if (isset($_POST["nombre"]) && $_POST["nombre"] != "") {
    $nombre = $fichero->getName();
    $descripcion = utf8_decode($_POST["descripcion"]);
    $tipo = $fichero->getType();
    $archivo = $fichero->getRename().".".$fichero->getType();
    $extension = $fichero->getType();
    $curso = utf8_decode($_POST["curso"]);
    $tamano = $fichero->getSize();
    $respuesta = "";
    $consulta = "INSERT INTO material (nombre, descripcion, tipo, ruta, extension,curso,tamano)VALUES('$nombre','$descripcion','$tipo','$archivo','$extension[1]','$curso','$tamano')";
    //echo "INSERT INTO material (nombre, descripcion, tipo, ruta, extension,curso,tamano)VALUES('$nombre','$descripcion','$tipo','$archivo','$extension[1]','$curso','$tamano')";
    if ($conn->query($consulta)) {
        $respuesta->mensaje = "Se guardo correctamente";
    } else {
        $respuesta->mensaje = "Ocurrio un error";
    }
    echo json_encode($respuesta);
} else {
    echo "Debes indicar un título al documento.";
}
?>