<?php

require __DIR__.'/vendor/autoload.php';
define('TITLE', 'Editar carro');

use classes\Entity\Carro;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}
$formaction = 'editar.php';
$update = true;
//echo "<pre>"; print_r($_GET); echo "</pre>"; exit;

//Consulta carro
$obcarro = Carro::getCarro($_GET['id']);
//Validação do carro

if(!$obcarro instanceof Carro){
    echo "<pre>"; print_r($obcarro); echo "</pre>"; exit;
    header('location: index.php?status=erro');
    exit;
}

//Validação do POST
if(isset($_POST['descricao']))
{
    $update                     = true;
    $obcarro->descricao         = addslashes($_POST['descricao']);
    $obcarro->placa             = addslashes($_POST['placa']);
    $obcarro->codigoRenavam     = addslashes($_POST['codigoRenavam']);
    $obcarro->anoModelo         = addslashes($_POST['anoModelo']);
    $obcarro->anoFabricacao     = addslashes($_POST['anoFabricacao']);
    $obcarro->cor               = addslashes($_POST['cor']);
    $obcarro->km                = addslashes($_POST['km']);
    $obcarro->marca             = addslashes($_POST['marca']);
    $obcarro->preco             = addslashes($_POST['preco']);
    $obcarro->precoFipe         = addslashes($_POST['precoFipe']);
    /*$obcarro->arCondicionado    = addslashes($_POST['arCondicionado']);
    $obcarro->airBag            = addslashes($_POST['airBag']);
    $obcarro->cdPlayer          = addslashes($_POST['cdPlayer']);
    $obcarro->direcaoHidraulica = addslashes($_POST['direcaoHidraulica']);
    $obcarro->vidroEletrico     = addslashes($_POST['vidroEletrico']);
    $obcarro->travaEletrica     = addslashes($_POST['travaEletrica']);
    $obcarro->cambioAutomatico  = addslashes($_POST['cambioAutomatico']);
    $obcarro->rodasLiga         = addslashes($_POST['rodasLiga']);
    $obcarro->alarme            = addslashes($_POST['alarme']);
    */

    $obcarro->atualizar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';


