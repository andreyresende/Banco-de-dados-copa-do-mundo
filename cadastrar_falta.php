<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Falta;

//Validação do POST
$obFalta = new Falta;
if(isset($_POST['cartao'])){
    if($_POST['cartao'] == 'vermelho'){
        $obFalta->cartao_vermelho = 1;
        $obFalta->cartao_amarelo  = 0;
    }
    elseif($_POST['cartao'] == 'amarelo'){
        $obFalta->cartao_amarelo  = 1;
        $obFalta->cartao_vermelho = 0;
    }
    else{
        $obFalta->cartao_amarelo  = 0;
        $obFalta->cartao_vermelho = 0;
    }
}
else{
    $obFalta->cartao_amarelo  = 0;
    $obFalta->cartao_vermelho = 0;
}
if(isset($_POST['partida'],$_POST['minuto'],$_POST['agente'])){
    $obFalta->partida = $_POST['partida'];
    $obFalta->minuto  = $_POST['minuto'];
    $obFalta->agente = $_POST['agente'];
    $obFalta->cadastrar();
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_falta.php';
include __DIR__.'/includes/footer.php';