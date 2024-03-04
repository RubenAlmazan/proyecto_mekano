<?php
include('../conexion/conexion.php');

if (!empty($_POST)) {
	#echo var_dump($_POST);

	$nombre = $_POST['nombre'];
	// Use a default value of 0 for puntaje if it's empty
	$puntaje = empty($_POST['puntaje']) ? 0 : $_POST['puntaje'];
	$objetivo = $_POST['objetivo'];

	// Use prepared statements to prevent SQL injection
	$stmt = $conn->prepare("INSERT INTO medio (nombre, puntaje) VALUES (?, ?)");
	$stmt->bindParam(1, $nombre);
	$stmt->bindParam(2, $puntaje);
	$stmt->execute();
}
?>


<!DOCTYPE html>

<html lang="es-ES">

<head>
	<meta charset="utf-8">
	<title>Puntuaciones altas</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="icon" href="../imagenes/icono.png" type="image/x-icon">
</head>

<body style="background-image: url('../imagenes/tablero.png'); background-size: 1530px 750px; color:white;">
	<header style="border-style: dotted; background-color: black;" class="p-1 mb-5">

		<div align="center">
			<a href="../principal/menu-principal.html"> <img src="../imagenes/logo-rem.png" alt="" width="435" height="70" /> </a>
		</div>


	</header>

	<div style="position:absolute; top: 13px; left: 15px">
		<a href="inicio-medio.php"> <img src="../imagenes/regreso.png" alt="" width="60" height="60" /></a>
	</div>

	<div style="position:absolute; top: 21px; left: 1245px">
		<audio src="../imagenes/musica2.mp3" loop> <code>audio</code> </audio>
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
	<div style="position:absolute; top: 97px; left: 290px">
		<h2 align="center">Estas son las mejores puntuaciones para el nivel MEDIO</h2>
	</div>
	<hr>
	<?php
	// Include your database connection file or code here

	$sql = "SELECT * FROM medio
        ORDER BY puntaje DESC
        LIMIT 15";
	$stmt = $conn->prepare($sql);
	$stmt->execute();

	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	echo "<table class='text-center' border='5' align='center' frame='hsides'>";
	echo "<tr> <th bgcolor='blue'> Nombre </th> <th bgcolor='blue'> Puntaje </th> </tr>";
	foreach ($stmt->fetchAll() as $nivel_facil) {
		echo "<tr>
            <td style='width: 250px; font-family:Arial;' bgcolor='#ffffff'> <font color='black'>" . $nivel_facil['nombre'] . "</font> </td>
            <td style='width: 100px; font-family:Arial;' bgcolor='#ffffff'> <font color='black'>" . $nivel_facil['puntaje'] . "</font> </td>
          </tr>";
	}
	echo "</table>";
	?>

	<br>
	<br>
	<div style="position: absolute; top: 94%; left: 50%; transform: translate(-50%, -50%); text-align: center;">

		<?php if ($puntaje ==  $objetivo) { ?>

			<a class="boton_personalizado" href="../dificil/inicio-dificil.php">Siguiente nivel</a><?php
																								} else {
																									?>
			<a class="boton_personalizado" href="inicio-medio.php">Repetir nivel</a>
		<?php
																								}

		?>

		<style type="text/css">
			.boton_personalizado {
				text-decoration: none;
				padding: 10px 130px;
				font-weight: 600;
				font-size: 20px;
				color: #ffffff;
				background-color: #1883ba;
				border-radius: 6px;
				border: 2px solid #0016b0;
			}

			.boton_personalizado:hover {
				color: #1883ba;
				background-color: #ffffff;
			}
		</style>
	</div>

</body>

</html>