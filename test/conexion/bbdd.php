<?php

$servername = "localhost";
$user = "jofwiffs_laura";
$password = "Chechu81+";
$database = "jofwiffs_maestro";
$conn;


try {
    $conn = new mysqli($servername, $user, $password, $database);
    $conn->set_charset('ISO-8859-1');
// set the PDO error mode to exception
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

