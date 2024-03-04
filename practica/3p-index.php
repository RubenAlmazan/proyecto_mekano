 <!DOCTYPE html>
 <html lang="es">

 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<title>Tres Lineas</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
 	<link rel="icon" href="../imagenes/icono.png" type="image/x-icon">

 </head>

 <body style="background-image: url('../imagenes/tablero.png'); background-size: 1365px 662px; color:white;">
 	<header style="border-style: dotted; background-color: black;" class="p-1 mb-5">

 		<div align="center">
 			<a href="../principal/menu-principal.html"> <img src="../imagenes/logo-rem.png" alt="" width="435" height="70" /> </a>
 		</div>


 	</header>

 	<div style="position:absolute; top: 13px; left: 15px">
 		<a href="../principal/pre-practica.html"> <img src="../imagenes/regreso.png" alt="" width="60" height="60" /></a>
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

 	<div class="container text-center">


 		<div class="row">
 			<div class="col-md-6 mx-auto" style="line-height: 250%">
 				<div>
 					<strong>
 						<h2 style="border:4px solid white">Práctica "Tres Lineas"
 					</strong>
 					<br>
 					</h2>
 				</div>
 				<p style="line-height: 190%;" class="lead"> Teclea lo siguiente</p>
 				<h1 style="font-weight: bold;" class="display-2 mb-4" id="current-word">hello</h1>
 				<input type="text" class="form-control form-control-lg" placeholder="Escribe la palabra..." id="word-input" autofocus>
 				<h4 class="mt-3" id="message"></h4>

 				<div style="position:absolute; top: 350px; left: 175px">
 					<div>
 						<h3>Tu puntuacion:
 							<span id="score">0</span>
 							<br>
 						</h3>
 					</div>
 					<br><br>

 				</div>
 				<div>
 				</div>
 			</div>

 		</div>
 	</div>

 	<script src="3p-dinamica.js"></script>
 </body>

 </html>