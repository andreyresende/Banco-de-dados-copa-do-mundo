<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Jogador;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
  }

//CONSULTA O JOGADOR
$obJogador = Jogador::getJogador($_GET['id']);

//VALIDAÇÃO DA Jogador
if(!$obJogador instanceof Jogador){
  header('location: index.php?status=error');
  exit;
}


//Validação do POST
if(isset($_POST['excluir'])){
    $obJogador->excluir();
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar_exclusao_jogador.php';
include __DIR__.'/includes/footer.php';