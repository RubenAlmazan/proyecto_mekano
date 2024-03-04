 <!DOCTYPE html>

 <?php

	include('../conexion/conexion.php');

	?>

 <html lang="es-ES">

 <head>
 	<meta charset="utf-8">
 	<title>Puntaje</title>

 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
 	<link rel="icon" href="../imagenes/icono.png" type="image/x-icon">
 </head>

 <body style="background-image: url('../imagenes/tablero.png'); background-size: 1530px 750px; color:white;">
 	<header style="border-style: dotted; background-color: black;" class="p-1 mb-5">

 		<div style="text-align: center;">
 			<a href="../principal/menu-principal.html"> <img src="../imagenes/logo-rem.png" alt="" width="435" height="70" /> </a>
 		</div>



 	</header>

 	<div style="position:absolute; top: 13px; left: 15px">
 		<a href="inicio-facil.php"> <img src="../imagenes/regreso.png" alt="" width="60" height="60" /></a>
 	</div>

 	<div style="position:absolute; top: 21px; left: 1245px">
 		<audio src="../imagenes/musica.mp3" loop> <code>audio</code> </audio>
 		<button id="boton">Motivacion</button>
 		<style>
 			/* Estilo para el botón */
 			#boton {
 				padding: 10px 15px;
 				font-size: 15px;
 				background-color: blue;
 				/* Color de fondo */
 				color: white;
 				/* Color del texto */
 				border: none;
 				/* Sin borde */
 				border-radius: 5px;
 				/* Bordes redondeados */
 				cursor: pointer;
 				/* Cursor al pasar el ratón */
 				transition: background-color 0.3s;
 				/* Efecto de transición en el color de fondo */
 			}

 			/* Cambio de color al pasar el ratón sobre el botón */
 			#boton:hover {
 				background-color: white;
 				color: black;

 			}
 		</style>
 		<script type="text/javascript">
 			var v = document.getElementsByTagName("audio")[0];
 			var sound = false;

 			var boton = document.getElementById("boton");
 			boton.addEventListener("click", function() {
 				if (!sound) {
 					v.play();
 					this.innerHTML = "Relajate";
 					sound = true;
 				} else {
 					v.pause();
 					this.innerHTML = "Motivacion";
 					sound = false;
 				}
 			});
 		</script>
 	</div>


 	<div style="text-align: center;">
 		<br>
 		<?php
			$nombre = $_GET['score'];
			$objetivo = $_GET['objetivo'];
			?>
 		<br><br><br><br>

 		<?php
			if ($nombre == $objetivo) { ?>
 			<h1 style="text-align: center; color: white; line-height: 0%; position: relative; top: -115px;">FELICIDADES</h1>
 			<br>

 			<p style="text-align: center; position: relative; top: -100px;">Tu puntaje es de: <?php echo $nombre; ?> puntos de <?php echo $objetivo; ?> puntos posibles</p>

 			<p style="text-align: center; line-height: 100%; position: relative; top: -10px;">
 				<b>
 					<p align="center" style="line-height: 100%"><b>
 							<font size=7>Haz pasado el nivel FÁCIL del Proyecto Me-K-No </font>
 						</b></p>
 				</b>
 			</p>
 			<br><br>
 			<h5 style="text-align: center; position: relative; top: 20px;">Registra tu nombre para guardar tu puntuación</h5>

 			<form action="guardar-facil.php" method="POST">
 				<label for="nombre"></label><br>
 				<input type="text" name="nombre" style="text-align: center; width: 450px; position: relative; top: 10px; " required pattern="[A-Za-z0-9\s]+"><br>
 				<label for="puntaje"></label>
 				<input name="puntaje" type="hidden" value="<?php echo $nombre; ?>">
 				<input name="objetivo" type="hidden" value="<?php echo $objetivo; ?>">

 				<br>
 				<input type="submit" value="Guardar" style="width: 100px; position: relative; top: 10px;">
 				<br><br>
 			</form>

 		<?php
			} else {
			?>
 			<h1 style="text-align: center; color: white; line-height: 0%; position: relative; top: -115px;">SIGUE INTENTANDO</h1>
 			<br>

 			<p style="text-align: center; position: relative; top: -100px;">Tu puntaje es de: <?php echo $nombre; ?> puntos de <?php echo $objetivo; ?> puntos posibles</p>


 			<p style="text-align: center; line-height: 100%; position: relative; top: -10px;">
 				<b>
 					<font size="7">Te falta poco para pasar el nivel FÁCIL</font>
 				</b>
 			</p>
 			<br><br>
 			<h5 style="text-align: center; position: relative; top: 20px;">Registra tu nombre para guardar tu puntuación</h5>

 			<form action="guardar-facil.php" method="POST">
 				<label for="nombre"></label><br>
 				<input type="text" name="nombre" style="text-align: center; width: 450px; position: relative; top: 10px; " required pattern="[A-Za-z0-9\s]+"><br>
 				<label for="puntaje"></label>
 				<input name="puntaje" type="hidden" value="<?php echo $nombre; ?>">
 				<input name="objetivo" type="hidden" value="<?php echo $objetivo; ?>">
 				<br>
 				<input type="submit" value="Guardar" style="width: 100px; position: relative; top: 10px;">
 				<br><br>
 			</form>
 		<?php
			}
			?>

 	</div>



 	</div>

 </body>

 </html>