<?php
session_start();
if (!isset($_SESSION['usuario'])) {

}
?>


<div class="w3-container w3-black w3-center">
    <h1>BIENVENIDO A TU CUENTA EN ECODEUP</h1>
</div>
<p></p>
<form class="w3-container" action="controller_login.php" method="post">
    <input type="hidden" name="salir" value="salir">
    <button class="w3-btn w3-green">Salir</button>
</form>
