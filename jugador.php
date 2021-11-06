<?php include('header.php'); ?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>JUGADOR</h1>
			</div>

			<div class="articulo">
				<article>
<p>A continuacion tendras que llenar este formulario de confirmacion para 
	seguir con tu registro,para que puedas ser un nuevo integrante para cualquiera de 
	nuestros equipos de futbol. <b>OJO:puede que ya no encuentres un espacio en nuestros equipos de futbol,pero
		no te desanimes,puedes seguir intentando en un mes o dos.</B><br><br><br>
</p>
				<?php
// define variables and set to empty values

// define variables and set to empty values
$nombre = $apellido = $sexo = $direccion = $edad = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = test_input($_POST["nombre"]);
  $apellido = test_input($_POST["apellido"]);
  $sexo = test_input($_POST["sexo"]);
  $direccion = test_input($_POST["direccion"]);
  $edad = test_input($_POST["edad"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>CONFIRMACION DE TODOS TUS DATOS:</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  NOMBRE: <input type="text" name="nombre">
  <br><br>
  APELLIDO: <input type="text" name="apellido">
  <br><br>
  EDAD: <input type="number" name="edad">
  <br><br>
  DIRECCION: <textarea name="direccion" rows="5" cols="40"></textarea>
  <br><br>
  SEXO:
  <input type="radio" name="sexo" value="feminino">FEMENINO
  <input type="radio" name="sexo" value="masculino">MASCULINO
  <input type="radio" name="sexo" value="otro">OTRO
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>TUS DATOS INGRESADOS:</h2>";
echo $nombre;
echo "<br>";
echo $apellido;
echo "<br>";
echo $sexo;
echo "<br>";
echo $direccion;
echo "<br>";
echo $edad; 
echo "<br><br><br>"


?>

         
		
         
        
<B>LISTO!,HAS INGRESADO TUS DATOS DE MANERA CORRECTA,ASI QUE TIENES OPORTUNIDAD DE ENTRAR A UNO DE NUESTROS EQUIPOS</B>



					
		
					
	
				</article>
			</div>

<?php include('siderbar.php'); ?>

		</div>
	</section>
	<?php include('footer.php'); ?>

</body>
</html>
