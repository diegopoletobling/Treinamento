<?php

require __DIR__.'/vendor/autoload.php';

use classes\Entity\Carro;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}
//echo "<pre>"; print_r($_GET); echo "</pre>"; exit;

//Consulta carro
$obcarro = Carro::getCarro($_GET['id']);

//Validação do carro
if(!$obcarro instanceof Carro){
    header('location: index.php?status=erro');
    exit;
}

//Validação do POST
if(isset($_POST['excluir'])){

    $obcarro->excluir();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-excluir.php';
include __DIR__.'/includes/footer.php';



