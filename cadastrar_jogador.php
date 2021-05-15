<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Jogador');
use \App\Entity\Jogador;
$obJogador = new Jogador;

//Validação do POST
if(isset($_POST['nome'],$_POST['selecao'],$_POST['idade'],$_POST['gols'])){
    $obJogador->nome    = $_POST['nome'];
    $obJogador->selecao = $_POST['selecao'];
    $obJogador->idade   = $_POST['idade'];
    $obJogador->gols    = $_POST['gols'];
    $obJogador->cadastrar();
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_jogador.php';
include __DIR__.'/includes/footer.php';