<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Partida;

$partidas = Partida::getPartidas();


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/tabela_partidas.php';
include __DIR__.'/includes/footer.php';