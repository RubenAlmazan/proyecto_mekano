 <!DOCTYPE html>
 <html lang="es">

 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<title>Nivel Muy Dificil</title>
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
 		<a href="inicio-mixto.php"> <img src="../imagenes/regreso.png" alt="" width="60" height="60" /></a>
 	</div>

 	<div style="position:absolute; top: 21px; left: 1245px">
 		<audio src="../imagenes/musica4.mp3" loop> <code>audio</code> </audio>
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
 						<h2 style="border:4px solid white">Tiempo:
 							<span id="time">0</span>
 					</strong>
 					<br>
 					</h2>
 				</div>
 				<p style="line-height: 190%;" class="lead"> Escribe palabra en menos de
 					<span id="seconds">10</span> segundos:
 				</p>
 				<h1 style="font-weight: bold;" class="display-2 mb-4" id="current-word">hello</h1>
 				<input type="text" class="form-control form-control-lg" id="word-input" autofocus>
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
 				<div style="position: relative; top: 100px;">
 					<!-- Add a form with hidden input for score -->
 					<form id="scoreForm" action="recibe-mixto.php" method="get" style="display: none;">
 						<input type="hidden" id="scoreInput" name="score" value="0">
 						<input type="hidden" id="objetive" name="objetivo" value="15">

 						<input type="submit" value="Ver puntuación" style="font-size: 18px; padding: 2px 12px; background-color: blue; color: white;">
 					</form>

 				</div>
 			</div>

 		</div>
 	</div>
 	<style>
 		/* Add the following styles to center text in the input field */
 		#word-input {
 			display: flex;
 			align-items: center;
 			justify-content: center;
 			text-align: center;
 		}
 	</style>

 	<script>
 		document.addEventListener('DOMContentLoaded', init);

 		const levels = {
 			easy: 7
 		};

 		const currentLevel = levels.easy;

 		let time = currentLevel;
 		let score = 0;
 		let isPlaying;

 		const wordInput = document.querySelector('#word-input');
 		const currentWord = document.querySelector('#current-word');
 		const scoreDisplay = document.querySelector('#score');
 		const timeDisplay = document.querySelector('#time');
 		const message = document.querySelector('#message');
 		const seconds = document.querySelector('#seconds');
 		const scoreForm = document.querySelector('#scoreForm');
 		const scoreInput = document.querySelector('#scoreInput');

 		const words = [
 			'!C0rtaR', '"Grac1aS', '#Encantad0R', '$P3sO', '%P3sadO', '=)Emit1R', '/Gr4sA', '(Susurr4R',
 			')C3rdO', '=F0ndO', '!Almen6rA', '"Co3eR', '$Can8rejO', '%Arquit5ctO', '#Fan7asmA', '/ExcesO',
 			'(Caba11oS', ')Fu3rzA', '=Actr1Z', '!Pers3guiR', '"B4ndA', '$P1eS', '%Secund4riO', '/Dec1sivO',
 			'(Clas1ficaR', '#Ac7uaR', '=Estru3ndosO', '!Cam1nO', '!Ne9ritA', '#Comp0rtarsE', ')C9bO', '/B0mbarderO',
 			'%Comp4ctO', '#Acar1ciaR', '/Sim1laR', '=Desp4chO', '!Env1aR', '/#Pe1eA', '#Puñ0S', ')Re3mplazaR',
 			'=Aband0naR', '=Resp0ndeR', '$%M4rcaR', '$Mezcl4dA', '"S4cO', '!G1raR', '/Apre5urarsE', '#Entr4teneR',
 			'(Bols1llO', ')Est4blE', '%Ausp1ciosO', '$$R4yO'
 		];

 		function init() {
 			seconds.innerHTML = currentLevel;
 			showWord(words);
 			wordInput.addEventListener('input', startMatch);
 			setInterval(countdown, 1000);
 			setInterval(checkStatus, 50);
 		}

 		function startMatch() {
 			if (matchWords()) {
 				isPlaying = true;
 				time = currentLevel + 1;
 				showWord(words);
 				wordInput.value = '';
 				score++;
 			}

 			scoreDisplay.innerHTML = (score === -1) ? 0 : score;
 		}

 		function matchWords() {
 			if (wordInput.value === currentWord.innerHTML) {
 				message.innerHTML = '¡Perfecto! ¡Sigue así!';
 				const music = new Audio('../imagenes/acierto.mp3');
 				music.play();
 				return true;
 			} else {
 				message.innerHTML = '';
 				return false;
 			}
 		}

 		function showWord(words) {
 			const randIndex = Math.floor(Math.random() * words.length);
 			currentWord.innerHTML = words[randIndex];
 		}

 		function countdown() {
 			if (time > 0) {
 				time--;
 			} else if (time === 0) {
 				isPlaying = false;
 			}

 			timeDisplay.innerHTML = time;
 		}

 		function createScoreButton() {
 			scoreForm.style.display = 'block'; // Display the score form
 			scoreInput.value = score; // Set the score in the hidden input
 		}

 		function checkStatus() {
 			if (score === 15) {
 				time = 0;
 				isPlaying = false;
 				wordInput.value = 'Prueba Finalizada';
 				wordInput.disabled = true; // Disable the input field
 				createScoreButton(); // Display the score form and set the score
 			}

 			if (!isPlaying && time === 0) {
 				wordInput.value = 'Prueba Finalizada';
 				isPlaying = false;
 				wordInput.disabled = true; // Disable the input field
 				createScoreButton(); // Display the score form and set the score

 			}
 		}
 	</script>
 </body>

 </html>