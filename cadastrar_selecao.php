<?php

require __DIR__.'/vendor/autoload.php';


use \App\Entity\Selecao;

//Validação do POST
if(isset($_POST['nome'],$_POST['cor_uniforme_1'],$_POST['cor_uniforme_2'],$_POST['grupo'],$_POST['pontos_grupo'],$_POST['bandeira'])){
    $obGol = new Selecao;
    $obGol->nome = $_POST['nome'];
    $obGol->grupo = $_POST['grupo'];
    $obGol->pontos_grupo = $_POST['pontos_grupo'];
    $obGol->cor_uniforme_1  = $_POST['cor_uniforme_1'];
    $obGol->cor_uniforme_2 = $_POST['cor_uniforme_2'];
    $obGol->bandeira = $_POST['bandeira'];
    $obGol->cadastrar();
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_selecao.php';
include __DIR__.'/includes/footer.php';