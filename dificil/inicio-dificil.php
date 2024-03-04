<!DOCTYPE html>

<?php

include('../conexion/conexion.php');

?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Nivel Dificil</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="icon" href="../imagenes/icono.png" type="image/x-icon">
</head>

<body style="background-image: url('../imagenes/pre---ejercicio.jpg'); background-size: 1365px 662px; color:white;">
	<header style="border-style: dotted; background-color: black;" class="p-1 mb-5">

		<div align="center">
			<a href="../principal/menu-principal.html"> <img src="../imagenes/logo-rem.png" alt="" width="435" height="70" /> </a>
		</div>


	</header>

	<div style="position:absolute; top: 13px; left: 15px">
		<a href="../principal/menu-principal.html"> <img src="../imagenes/regreso.png" alt="" width="60" height="60" /></a>
	</div>

	<div style="position:absolute; top: 21px; left: 1245px">
		<audio src="../imagenes/musica3.mp3" loop> <code>audio</code> </audio>
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

	<h1 align="center" style="color: white; line-height: 0%; text-shadow: 4px 4px 8px #333; position: relative; top: -5px;"> BIENVENIDO AL NIVEL DIFICIL</h1>

	<div style="position:absolute; top: 150px; left: 60px">
		<br><br>
		<h3 align="center" style="line-height: 100%"><b>Instrucciones</b></h3>
		<h4 align="center">Utilice todas las teclas disponibles en el teclado </h4>
		<h4 align="center">Teclee la palabra que se mostrará en pantalla en el menor tiempo posible </h4>
		<br>
		<h4 align="center">--- Tendrá 7 segundos por palabra ---</h4><br>
				<! –– y cada vez que aumente tu puntaje, se irá reduciendo el tiempo que tendrás para teclear cada palabra ––>
					<h3 align="center" style="line-height: 20%">Completa <b>20</b> palabras para pasar al siguiente nivel</h3> <br><br>
					<h4 align="center">En este nivel encontrarás: </h4>
					<h4 align="center">Palabras en mayusculas, minúsculas y números</h4>
	</div>

	<div style="position:absolute; top: 170px; left: 940px">

		<?php
		$sql = "SELECT * FROM dificil
		ORDER BY puntaje DESC
		LIMIT 15";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		echo "<table class='text-center' border='5' align='center' frame='hsides'>";
		echo "<tr> <th bgcolor='black' colspan='2' height='40'> Mejores puntuaciones - Dificil </th> </tr>";
		echo "<tr> <th bgcolor='blue'> Nombre </th> <th bgcolor='blue'> Puntaje </th> </tr>";
		foreach ($stmt->fetchAll() as $nivel_facil) {
			echo "<tr>
			<td style='width: 250px;' bgcolor='#ffffff'> <strong style='color: black;'>" . $nivel_facil['nombre'] . "</strong></td>
			<td style='width: 100px;' bgcolor='#ffffff'> <strong style='color: black;'>" . $nivel_facil['puntaje'] . "</font> </td>
			</tr>";
		}
		echo "</table>";
		?>

	</div>
	<br><br>
	<div style="position:absolute; top: 590px; left: 355px">
		<a class="boton_personalizado" href="nivel-dificil.php">Iniciar NIVEL DIFICIL</a>
		<style type="text/css">
			.boton_personalizado {
				padding: 10px;
				font-weight: 600;
				font-size: 20px;
				color: #ffffff;
				background-color: blue;
				border-radius: 6px;
				border: 5px solid black;
			}

			.boton_personalizado:hover {
				color: #1883ba;
				background-color: #ffffff;
			}
		</style>

	</div>

</body>

</html>

<hr>




</body>

</html>