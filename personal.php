<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>PERSONAL</h1>
			</div>

			<div class="articulo">
				<article>
					<h2>LLENA TUS DATOS PERSONALES</h2><BR>
					<b><P>Llena el sigueinte formulario para poder registrarte y tener la opotunidad 
						de ingresar a uno de los equipos de futbol que tenemos disponibles,despues de llenar podras pasar a la siguiente pestaña y seguir con la confirmacion de tus datos.
					</p></B><br><br>
	
			<form action="jugador.php" method="post">;
			<b>NOMBRE:</b>	<input type="text" name= "nombre"/> <br><br>
			<b>APELLIDO:</b>	<input type="text" name= "apellido"/><br><br>
			<b>EQUIPO:</b>	<input type="text" name= "equipo"/><br><br>
			<b>EDAD:</B> <input type="number" name= "edad"/> <br><br>
			<b>SEXO:</B> <input type="radio" name="sexo"/> <br><br>
			<b>DIRECCION</B> <input type="text" name="direccion"/><br><br>
			<input type="submit" value="enviar" /> 
</form> <br>
<b><p>Despues de llenar con tus datos personales principales espera unos segundos y luego ve y a la pestaña jugador
	para la confirmacion de datos :)</P></B><br>
<div align="center"><a href="#"><img src="img/12.jpg" width="300" height="200" ></a></div>
				</article>
			</div>
<?php include('siderbar.php'); ?>

		</div>
	</section>
	<?php include('footer.php'); ?>
</body>
</html>
