<?php 


echo 'Current PHP version: ' . phpversion();

// header("Location: exercicioA.html");

// Verificando se valor está 'setado'
if(!isset($_POST['celsius'])){$_POST['celsius'] = "";}

// Associando valores do Form as variáveis do servidor
$celsius = $_POST['celsius'];

// Outra forma de calcular
// $fahrenheit = ($celsius * 1.8) + 32; 

$fahrenheit = (9 * $celsius + 160 ) / 5; 
// var_dump($fahrenheit);

