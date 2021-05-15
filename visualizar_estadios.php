<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Estadio;

$estadios = Estadio::getEstadios();


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/tabela_estadios.php';
include __DIR__.'/includes/footer.php';