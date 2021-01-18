<?php

require __DIR__.'/vendor/autoload.php';

use \classes\Entity\Carro;
use \classes\Db\Pagination;

//BUSCA
$busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);

//FILTRO
$filtroOpcionais = filter_input(INPUT_GET, 'opcionais', FILTER_SANITIZE_STRING);
$filtroOpcionais = in_array($filtroOpcionais, ['1']) ? $filtroOpcionais : '';
//echo "<pre>"; print_r($filtroOpcionais); echo "</pre>";

//CONDIÇÔES SQL
$cond =[
    strlen($busca) ? 'descricao LIKE "%'.str_replace(' ','%', $busca).'%"' :null,
    strlen($filtroOpcionais) ? 'opcionais = "'.$filtroOpcionais.'"' :null
];
//REMOVE POSIÇÔES VAZIAS
$cond = array_filter($cond);

$where = implode(' AND ', $cond);

$quantidadeCarros = Carro::getQuantidadeCarros($where);

//PAGINAÇÃO
$obPagination = new Pagination($quantidadeCarros, $_GET['pagina'] ?? 1, 5);

//OBTEM CARROS
$carros = Carro::getCarros($where,null,$obPagination->getLimit());

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/list.php';
include __DIR__.'/includes/footer.php';

?>