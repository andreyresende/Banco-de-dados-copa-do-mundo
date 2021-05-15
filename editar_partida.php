<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar partida');

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
if(isset($_POST['selecao_1'],$_POST['selecao_2'],$_POST['cor_uniforme_1'],$_POST['cor_uniforme_2'],$_POST['penalti_1'],$_POST['penalti_2'],$_POST['juiz'],$_POST['estadio'],$_POST['fase'])){
    $obPartida->selecao_1         = $_POST['selecao_1'];
    $obPartida->selecao_2         = $_POST['selecao_2'];
    $obPartida->cor_uniforme_1    = $_POST['cor_uniforme_1'];
    $obPartida->cor_uniforme_2    = $_POST['cor_uniforme_2'];
    $obPartida->penalti_1         = $_POST['penalti_1'];
    $obPartida->penalti_2         = $_POST['penalti_2'];
    $obPartida->juiz              = $_POST['juiz'];
    $obPartida->estadio           = $_POST['estadio'];
    $obPartida->fase              = $_POST['fase'];
    $obPartida->atualizar();
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_partida.php';
include __DIR__.'/includes/footer.php';