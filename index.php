<?php

require __DIR__.'/vendor/autoload.php';

use \classes\Entity\Carro;

//BUSCA
$busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);

//FILTRO
$filtroOpcionais = filter_input(INPUT_GET, 'opcionais', FILTER_SANITIZE_STRING);
echo "<pre>"; print_r($filtroOpcionais); echo "</pre>"; exit;

//CONDIÇÔES SQL
$cond =[
    strlen($busca) ? 'descricao LIKE "%'.str_replace(' ','%', $busca).'%"' :null
];
//echo "<pre>"; print_r($cond); echo "</pre>"; exit;

$where = implode(' AND ', $cond);

$carros = Carro::getCarros($where);

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/list.php';
include __DIR__.'/includes/footer.php';

?>