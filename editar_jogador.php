<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Jogador');

use \App\Entity\Jogador;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
  }

//CONSULTA O JOGADOR
$obJogador = Jogador::getJogador($_GET['id']);

//VALIDAÇÃO DO Jogador
if(!$obJogador instanceof Jogador){
  header('location: index.php?status=error');
  exit;
}


//Validação do POST
if(isset($_POST['nome'],$_POST['selecao'],$_POST['idade'],$_POST['gols'])){
    $obJogador->nome    = $_POST['nome'];
    $obJogador->selecao = $_POST['selecao'];
    $obJogador->idade   = $_POST['idade'];
    $obJogador->gols    = $_POST['gols'];
    $obJogador->atualizar();
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_jogador.php';
include __DIR__.'/includes/footer.php';