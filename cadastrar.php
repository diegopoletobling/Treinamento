<?php

require __DIR__.'/vendor/autoload.php';

use classes\Entity\Carro;


//echo "<pre>"; print_r($_POST); echo "</pre>"; exit;

if(isset($_POST['descricao']))
{

    $obcarro = new Carro;
    $obcarro->descricao         = addslashes($_POST['descricao']);
    $obcarro->placa             = $_POST['placa'];
    $obcarro->codigoRenavam     = $_POST['codigoRenavam'];
    $obcarro->anoModelo         = $_POST['anoModelo'];
    $obcarro->anoFrabricacao    = $_POST['anoFabricacao'];
    $obcarro->cor               = $_POST['cor'];
    $obcarro->km                = $_POST['km'];
    $obcarro->marca             = $_POST['marca'];
    $obcarro->preco             = $_POST['preco'];
    $obcarro->precoFipe         = $_POST['precoFipe'];
    $obcarro->arCondicionado    = $_POST['arCondicionado'];
    $obcarro->airBag            = $_POST['airBag'];
    $obcarro->cdPlayer          = $_POST['cdPlayer'];
    $obcarro->direcaoHidraulica = $_POST['direcaoHidraulica'];
    $obcarro->vidroEletrico     = $_POST['vidroEletrico'];
    $obcarro->travaEletrica     = $_POST['travaEletrica'];
    $obcarro->cambioAutomatico  = $_POST['cambioAutomatico'];
    $obcarro->alarme            = $_POST['alarme'];
    $obcarro->rodasLiga         = $_POST['rodasLiga'];

    echo "<pre>"; print_r($obcarro); echo "</pre>"; exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';



