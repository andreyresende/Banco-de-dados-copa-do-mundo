<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Partida;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
  }

//CONSULTA A PARTIDA
$obPartida = Partida::getPartida($_GET['id']);

//VALIDAÇÃO DA PARTIDA
if(!$obPartida instanceof Partida){
  header('location: index.php?status=error');
  exit;
}


//Validação do POST
if(isset($_POST['excluir'])){
    $obPartida->excluir();
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar_exclusao_partida.php';
include __DIR__.'/includes/footer.php';