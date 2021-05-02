<?php

include_once '../conexion/bbdd.php';
header('Content-Type: text/html; charset=ISO-8859-1');

$id = utf8_decode($_POST["id"]);
$fichero = "SELECT * FROM material WHERE id= " . $id;
$ficheroFila = mysqli_query($conn, $fichero);

$consulta = "DELETE FROM material WHERE id = " . $id;



if ($conn->query($consulta)) {
    echo utf8_decode("Se eliminó el registro correctamente");
    while ($nombre = mysqli_fetch_row($ficheroFila)) {
        echo '../uploads/' . utf8_decode($nombre[4]);
        unlink('../uploads/' . utf8_decode($nombre[4]));
    }
} else {
    echo utf8_decode("Ocurrió un error");
}
?>