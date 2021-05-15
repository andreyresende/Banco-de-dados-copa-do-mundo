<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Comissao;

//Validação do POST
if(isset($_POST['nome'],$_POST['funcao'],$_POST['selecao'])){
    $obComissao = new Comissao;
    $obComissao->nome = $_POST['nome'];
    $obComissao->funcao  = $_POST['funcao'];
    $obComissao->selecao = $_POST['selecao'];
    $obComissao->cadastrar();
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_comissao.php';
include __DIR__.'/includes/footer.php';