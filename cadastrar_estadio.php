<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Estádio');

use \App\Entity\Estadio;
$obEstadio = new Estadio;

//Validação do POST
if(isset($_POST['nome'],$_POST['cidade'],$_POST['capacidade'])){
    $obEstadio->nome = $_POST['nome'];
    $obEstadio->cidade  = $_POST['cidade'];
    $obEstadio->capacidade = $_POST['capacidade'];
    $obEstadio->cadastrar();
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_estadio.php';
include __DIR__.'/includes/footer.php';