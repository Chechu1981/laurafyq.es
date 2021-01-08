<div class="w3-container w3-green">
		<h2>Login</h2>
	</div>

	<form class="w3-container" action="login/controller_login.php" method="post">
		<p>
			<label class="w3-label">
				Usuario
			</label>
			<input class="w3-input w3-border " type="text" name="usuario">
		</p>
		<p>
			<label class="w3-label">Password</label>
			<input class="w3-input w3-border" type="password" name="pas">
		</p>
		<p>
			<input type="hidden" name="entrar" value="entrar">
			<button class="w3-btn w3-green">Aceptar</button>
		</p>
<!-- 		<p>Si aún no tienes cuenta ve al siguiente link <a href="registrarse.php">Registrarse</a></p> -->
	</form>
<footer>
	<div class="w3-container w3-black">
		<h4>Física y química (www.laurafyq.es)</h4>
	</div>
</footer>