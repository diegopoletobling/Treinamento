<?php

require __DIR__.'/vendor/autoload.php';

use \classes\Entity\Carro;

$carros = Carro::getCarros();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/list.php';
include __DIR__.'/includes/footer.php';

?>