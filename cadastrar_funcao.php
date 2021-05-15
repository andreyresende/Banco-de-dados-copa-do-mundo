<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Funcao;

//Validação do POST
if(isset($_POST['nome'])){
    $obFuncao       = new Funcao;
    $obFuncao->nome = $_POST['nome'];
    $obFuncao->cadastrar();
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_funcao.php';
include __DIR__.'/includes/footer.php';