window.addEventListener('load', init);

// Globals

// Available Levels
const levels = {
  easy: 8
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

const words = [
	'1azxxw23cvg5',
	'2sxe5678ggnc', 
	'y6gbnkyuioj1',
	'vf5678yghjnb',
	'10alcm57ehda',
	'alsjf7tyvn3w',
	'1234ertyghjd', 
	'xmvzdlfkewo1',
	'103eqrouipad',
	'567yuijkxcvw', 
	'werfghbnmzx9', 
	'657489vnfjie', 
	'7ujdfbvreua2', 
	'laos749sncn4', 
	'zxcvbnm56yhj', 
	'lokmju7dvfr4', 
	'milooihgxse3',
	'zawert65nu89', 
	'345ghfjkdvqq', 
	'bhgut758493o', 
	'bvncmskoei31',
	'la0293847tyh',
	'cmdke85849ei'
];

// Initialize Game
function init() {
  // Show number of seconds in UI
  // Load word from array
  showWord(words);
  // Start matching on word input
	wordInput.addEventListener('input', startMatch);
  // Call countdown every second
  setInterval(countdown, 1000);
  // Check game status
  setInterval(checkStatus, 50);
}

// Start match
function startMatch() {
  if (matchWords()) {
    isPlaying = true;
    time = currentLevel + 1;
    showWord(words);
    wordInput.value = '';
    score++;
  }
  
  // If score is -1, display 0
  if (score === -1) {
    scoreDisplay.innerHTML = 0;
  } else {
    scoreDisplay.innerHTML = score;
  }
}

// Match currentWord to wordInput
function matchWords() {
  if (wordInput.value === currentWord.innerHTML) {
    message.innerHTML = 'Perfecto. Sigue así!!!';
	const music = new Audio('../imagenes/acierto.mp3');
	music.play()
    return true;
  } else {
    message.innerHTML = '';
    return false;
  }
}

// Pick & show random word
function showWord(words) {
  // Generate random array index
  const randIndex = Math.floor(Math.random() * words.length);
  // Output random word
  currentWord.innerHTML = words[randIndex];
}

// Countdown timer
function countdown() {
  // Make sure time is not run out
  if (time > 0) {
    // Decrement
    time--;
  } else if (time === 0) {
    // Game is over
    isPlaying = false;
  }
  

  // Show time
  timeDisplay.innerHTML = time;
}

function enviar()
{
	let nombre = score; 
	message.innerHTML = nombre; 
	window.location = "1-4-2-recibe_verdadero_facil.php?nom=" + nombre;
}
	
function enviar1()
{
	let nombre = score; 
	//message.innerHTML = nombre; 
	window.location = "1-4-1-recibe_falso_facil.php?nom=" + nombre;
}

// Check game status
function checkStatus() {
  
	time = -1;
	isPlaying = false;
  
}