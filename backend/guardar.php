<?php

include_once '../conexion/bbdd.php';
header('Content-Type: text/html; charset=ISO-8859-1');
if (isset($_POST["nombre"]) && $_POST["nombre"] != "") {
    $nombre = utf8_decode($_POST["nombre"]);
    $descripcion = utf8_decode($_POST["descripcion"]);
    $tipo = utf8_decode($_POST["tipo"]);
    $archivo = utf8_decode($_POST["nombreFichero"]);
    $extension = explode(".",utf8_decode($_POST["nombreFichero"]));
    $curso = utf8_decode($_POST["curso"]);
    $tamano = utf8_decode($_POST["tamano"]);
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