<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Estadio;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
  }

//CONSULTA o Estadio
$obEstadio = Estadio::getEstadio($_GET['id']);

//VALIDAÇÃO DO Estadio
if(!$obEstadio instanceof Estadio){
  header('location: index.php?status=error');
  exit;
}


//Validação do POST
if(isset($_POST['excluir'])){
    $obEstadio->excluir();
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar_exclusao_estadio.php';
include __DIR__.'/includes/footer.php';