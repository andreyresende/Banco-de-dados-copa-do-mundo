<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Estádio');

use \App\Entity\Estadio;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
  }

//CONSULTA A Estadio
$obEstadio = Estadio::getEstadio($_GET['id']);

//VALIDAÇÃO DO ESTADIO
if(!$obEstadio instanceof Estadio){
  header('location: index.php?status=error');
  exit;
}


//Validação do POST
if(isset($_POST['nome'],$_POST['cidade'],$_POST['capacidade'])){
    $obEstadio->nome       = $_POST['nome'];
    $obEstadio->cidade     = $_POST['cidade'];
    $obEstadio->capacidade = $_POST['capacidade'];
    $obEstadio->atualizar();
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_estadio.php';
include __DIR__.'/includes/footer.php';