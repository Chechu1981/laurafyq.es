<?php
session_start();

if (!isset($_SESSION['usuario'])) {

}
?>
<script src="js/login.js" type="text/javascript" ></script>
<header>
    <div class="w3-container w3-black w3-center">
        <h1>BIENVENID@ A LAYRAFYQ.ES</h1>
    </div>
</header>


<div class="w3-container w3-green">
    <h2>Login</h2>
</div>

<form class="w3-container"  method="post">
    <p>
        <label class="w3-label">
            Usuario
        </label>
        <input class="w3-input w3-border " type="text" id="usuario">
    </p>
    <p>
        <label class="w3-label">Password</label>
        <input class="w3-input w3-border" type="password" id="pas" autocomplete="on">
    </p>
    <p>
        <input type="hidden" name="entrar" value="entrar">
        <button class="w3-btn w3-green" id="aceptarL" >Aceptar</button>
    </p>
    <!--<p>Si aún no tienes cuenta ve al siguiente link <button type="button" id="registrarse" >Registrarse</button></p>-->
</form>
