<?php

include_once '../conexion/bbdd.php';
header('Content-Type: text/html; charset=ISO-8859-1');

$id = ($_POST["id"]);
$descripcion = utf8_decode($_POST["descripcion"]);
$tipo = utf8_decode($_POST["tipo"]);
$curso = utf8_decode($_POST["curso"]);
$nombre = utf8_decode($_POST["nombre"]);

$consulta = "UPDATE material SET descripcion = '$descripcion',nombre = '$nombre',tipo = '$tipo',curso = '$curso' WHERE id = $id";

if ($conn->query($consulta)) {
    $respuesta->mensaje = utf8_decode("Se eliminó el registro correctamente");
} else {
    $respuesta->mensaje = utf8_decode("Ocurrió un error");
}
?>