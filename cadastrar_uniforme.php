<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Uniforme;

//Validação do POST
if(isset($_POST['cor'])){
    $obUniforme = new Uniforme;
    $obUniforme->cor    = $_POST['cor'];
    $obUniforme->cadastrar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_uniforme.php';
include __DIR__.'/includes/footer.php';