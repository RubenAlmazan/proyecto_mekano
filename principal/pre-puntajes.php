<!DOCTYPE html>

<?php

include('../conexion/conexion.php');

?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Puntajes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="icon" href="../imagenes/icono.png" type="image/x-icon">

</head>

<body style="background-image: url('../imagenes/pre---ejercicio.jpg'); background-size: 1365px 735px; color:white;">
	<header style="border-style: dotted; background-color: black;" class="p-1 mb-5">

		<div align="center">
			<a href="menu-principal.html"> <img src="../imagenes/logo-rem.png" alt="" width="435" height="70" /> </a>
		</div>


	</header>

	<div style="position:absolute; top: 13px; left: 15px">
		<a href="menu-principal.html"> <img src="../imagenes/regreso.png" alt="" width="60" height="60" /></a>
	</div>

	<h1 align="center" style="color:white; line-height: 0%"> BIENVENIDO AL RECORD DE PUNTAJES</h1>

	<div id="logo" style="position:absolute; top: 180px; left: 132px">
		<p align="center" style="color:white; line-height: 0%">FÁCIL</p>
		<img src="../imagenes/facil.png" width="90" height="90">
	</div>

	<div style="position:absolute; top: 300px; left: 0px">
		<?php
		$sql = "SELECT * FROM facil
			ORDER BY puntaje DESC
			LIMIT 15";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		echo "<table class='text-center' border='5' align='center' TABLE WIDTH='55%' frame='hsides'>";
		echo "<tr> <th bgcolor='blue'> Nombre </th> <th bgcolor='blue'> Puntaje </th> </tr>";
		foreach ($stmt->fetchAll() as $nivel_facil) {
			echo "<tr>
				<td style='width: 250px;' bgcolor='#ffffff'> <font color='black'>" . $nivel_facil['nombre'] . "</font> </td>
				<td style='width: 100px;' bgcolor='#ffffff'> <font color='black'>" . $nivel_facil['puntaje'] . "</font> </td>
				</tr>";
		}
		echo "</table>";
		?>
	</div>

	<div id="logo" style="position:absolute; top: 180px; left: 385px">
		<p align="center" style="color:white; line-height: 0%">MEDIO</p>
		<img src="../imagenes/medio.png" width="90" height="90">
	</div>

	<div style="position:absolute; top: 300px; left: 250px">
		<?php
		$sql = "SELECT * FROM medio
			ORDER BY puntaje DESC
			LIMIT 15";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		echo "<table class='text-center' border='5' align='center' TABLE WIDTH='55%' frame='hsides'>";
		echo "<tr> <th bgcolor='green'> Nombre </th> <th bgcolor='green'> Puntaje </th> </tr>";
		foreach ($stmt->fetchAll() as $nivel_facil) {
			echo "<tr>
				<td style='width: 250px;' bgcolor='#ffffff'> <font color='black'>" . $nivel_facil['nombre'] . "</font> </td>
				<td style='width: 100px;' bgcolor='#ffffff'> <font color='black'>" . $nivel_facil['puntaje'] . "</font> </td>
				</tr>";
		}
		echo "</table>";
		?>
	</div>

	<div id="logo" style="position:absolute; top: 180px; left: 633px">
		<p align="center" style="color:white; line-height: 0%">DIFICIL</p>
		<img src="../imagenes/dificil.png" width="90" height="90">
	</div>

	<div style="position:absolute; top: 300px; left: 500px">
		<?php
		$sql = "SELECT * FROM dificil
			ORDER BY puntaje DESC
			LIMIT 15";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		echo "<table class='text-center' border='5' align='center' TABLE WIDTH='55%' frame='hsides'>";
		echo "<tr> <th bgcolor='yellow'> <font color='black'> Nombre </font> </th> <th bgcolor='yellow'> <font color='black'> Puntaje </font></th> </tr>";
		foreach ($stmt->fetchAll() as $nivel_facil) {
			echo "<tr>
				<td style='width: 250px;' bgcolor='#ffffff'> <font color='black'>" . $nivel_facil['nombre'] . "</font> </td>
				<td style='width: 100px;' bgcolor='#ffffff'> <font color='black'>" . $nivel_facil['puntaje'] . "</font> </td>
				</tr>";
		}
		echo "</table>";
		?>
	</div>

	<div id="logo" style="position:absolute; top: 180px; left: 880px">
		<p align="center" style="color:white; line-height: 0%">MUY DIFICIL</p>
		<img src="../imagenes/mixto.png" width="90" height="90">
	</div>

	<div style="position:absolute; top: 300px; left: 750px">
		<?php
		$sql = "SELECT * FROM mixto
			ORDER BY puntaje DESC
			LIMIT 15";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		echo "<table class='text-center' border='5' align='center' TABLE WIDTH='55%' frame='hsides'>";
		echo "<tr> <th bgcolor='red'> Nombre </th> <th bgcolor='red'> Puntaje </th> </tr>";
		foreach ($stmt->fetchAll() as $nivel_facil) {
			echo "<tr>
				<td style='width: 250px;' bgcolor='#ffffff'> <font color='black'>" . $nivel_facil['nombre'] . "</font> </td>
				<td style='width: 100px;' bgcolor='#ffffff'> <font color='black'>" . $nivel_facil['puntaje'] . "</font> </td>
				</tr>";
		}
		echo "</table>";
		?>
	</div>

	<div id="logo" style="position:absolute; top: 180px; left: 1130px">
		<p align="center" style="color:white; line-height: 0%">COMPLETO</p>
		<img src="../imagenes/fase-completo.png" width="90" height="90">
	</div>

	<div style="position:absolute; top: 300px; left: 1000px">
		<?php
		$sql = "SELECT * FROM completo
			ORDER BY puntaje DESC
			LIMIT 15";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		echo "<table class='text-center' border='5' align='center' TABLE WIDTH='55%' frame='hsides'>";
		echo "<tr> <th bgcolor='black'> Nombre </th> <th bgcolor='black'> Puntaje </th> </tr>";
		foreach ($stmt->fetchAll() as $nivel_facil) {
			echo "<tr>
				<td style='width: 250px;' bgcolor='#ffffff'> <font color='black'>" . $nivel_facil['nombre'] . "</font> </td>
				<td style='width: 100px;' bgcolor='#ffffff'> <font color='black'>" . $nivel_facil['puntaje'] . "</font> </td>
				</tr>";
		}
		echo "</table>";
		?>
	</div>

	<br><br><br>
</body>

</html>

<hr>


</body>

</html>