<?php

require __DIR__.'/vendor/autoload.php';
define('TITLE', 'Cadastrar carro');

use classes\Entity\Carro;
$obcarro = new Carro;
//echo "<pre>"; print_r($obcarro); echo "</pre>"; exit;

$formaction = 'cadastrar.php';
if(isset($_POST['descricao']))
{

    $update = false;
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
    $obcarro->arCondicionado    = addslashes($_POST['arCondicionado']);
    $obcarro->airBag            = addslashes($_POST['airBag']);
    $obcarro->cdPlayer          = addslashes($_POST['cdPlayer']);
    $obcarro->direcaoHidraulica = addslashes($_POST['direcaoHidraulica']);
    $obcarro->vidroEletrico     = addslashes($_POST['vidroEletrico']);
    $obcarro->travaEletrica     = addslashes($_POST['travaEletrica']);
    $obcarro->cambioAutomatico  = addslashes($_POST['cambioAutomatico']);
    $obcarro->rodasLiga         = addslashes($_POST['rodasLiga']);
    $obcarro->alarme            = addslashes($_POST['alarme']);
    //echo "<pre>"; print_r($obcarro); echo "</pre>"; exit;
    $obcarro->Cadastrar();
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';



