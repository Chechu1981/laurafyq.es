<script src="js/login.js" type="text/javascript" ></script>
<header>
	<div class="w3-container w3-black">
		<h1>BIENVENIDO A LAURAFYQ.ES</h1>
	</div>
</header>
		<div class="w3-container w3-green">
			<h1>Registrarse</h1>
		</div>
		<div>
                    <form class="w3-container" method="post">
				<p>
					<label class="w3-label">Nombre de usuario</label>
					<input class="w3-input w3-border" type="text" id="usuario">
				</p>
				<p>
					<label class="w3-label">Password</label>
					<input class="w3-input w3-border" type="password" id="pas">
				</p>
				<p>
					<input type="hidden" name="registrarse" value="registrarse">
                                        <button class="w3-btn w3-green" id="aceptarR" >Registrarse</button>
				</p>
				<p><a href="./">Ahora no</a></p>
			</form>
		</div>
<footer>
	<div class="w3-container w3-black">
            <h4>LauraFyQ.es - <?php echo date('Y');?></h4>
	</div>
</footer>
