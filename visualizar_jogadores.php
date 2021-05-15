<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Jogador;

$jogadores = Jogador::getJogadores();


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/tabela_jogadores.php';
include __DIR__.'/includes/footer.php';