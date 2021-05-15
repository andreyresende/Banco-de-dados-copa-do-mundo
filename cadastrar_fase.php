<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Fase;

//Validação do POST
if(isset($_POST['nome'])){
    $obFase = new Fase;
    $obFase->nome = $_POST['nome'];
    $obFase->cadastrar();
    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_fase.php';
include __DIR__.'/includes/footer.php';