<?php 

// Verifica se a variável está setada
if (!isset($_GET['nome'])){ 
    $_GET['nome'] = "";
}

if(!isset($_GET['cpf'])){
    $_GET['cpf'] = "";
}

$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
