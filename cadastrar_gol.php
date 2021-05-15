<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Gol;

//Validação do POST
if(isset($_POST['partida'],$_POST['minuto'],$_POST['jogador'])){
    $obGol = new Gol;
    $obGol->partida = $_POST['partida'];
    $obGol->minuto  = $_POST['minuto'];
    $obGol->jogador = $_POST['jogador'];
    $obGol->cadastrar();
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_gol.php';
include __DIR__.'/includes/footer.php';