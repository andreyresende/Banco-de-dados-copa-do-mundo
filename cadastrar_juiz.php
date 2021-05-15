<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Juiz;

//Validação do POST
if(isset($_POST['nome'])){
    $obJuiz = new Juiz;
    $obJuiz->nome    = $_POST['nome'];
    $obJuiz->cadastrar();
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_juiz.php';
include __DIR__.'/includes/footer.php';