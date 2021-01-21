<?php

require __DIR__.'/vendor/autoload.php';
define('TITLE', 'Editar carro');

use classes\Entity\Carro;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}
//$formaction = 'editar.php';
$update = true;
//echo "<pre>"; print_r($_GET); echo "</pre>"; exit;

//Consulta carro
$obCarro = Carro::getCarro($_GET['id']);
//Validação do carro

if(!$obCarro instanceof Carro){
    echo "<pre>"; print_r($obCarro); echo "</pre>"; exit;
    header('location: index.php?status=erro');
    exit;
}

//Validação do POST
if(isset($_POST['descricao']) || isset($_POST['placa']) || isset($_POST['codigoRenavam']) || isset($_POST['anoModelo']) || isset($_POST['anoFabricacao'])
|| isset($_POST['cor']) || isset($_POST['km']) || isset($_POST['marca']) || isset($_POST['preco']) || isset($_POST['precoFipe']))
{
    if (!empty($_POST['descricao']) || !empty($_POST['placa']) || !empty($_POST['codigoRenavam']) ||
    !empty($_POST['anoModelo']) || !empty($_POST['anoFabricacao']) || !empty($_POST['cor'])  ||
    !empty($_POST['km']) || !empty($_POST['marca']) || !empty($_POST['preco']) || !empty($_POST['precoFipe'])){

        $update                     = true;
        $obCarro->descricao         = addslashes($_POST['descricao']);
        $obCarro->placa             = addslashes($_POST['placa']);
        $obCarro->codigoRenavam     = addslashes($_POST['codigoRenavam']);
        $obCarro->anoModelo         = addslashes($_POST['anoModelo']);
        $obCarro->anoFabricacao     = addslashes($_POST['anoFabricacao']);
        $obCarro->cor               = addslashes($_POST['cor']);
        $obCarro->km                = addslashes($_POST['km']);
        $obCarro->marca             = addslashes($_POST['marca']);
        $obCarro->preco             = addslashes($_POST['preco']);
        $obCarro->precoFipe         = addslashes($_POST['precoFipe']);
        /*$obCarro->arCondicionado  = addslashes($_POST['arCondicionado']);
        $obCarro->airBag            = addslashes($_POST['airBag']);
        $obCarro->cdPlayer          = addslashes($_POST['cdPlayer']);
        $obCarro->direcaoHidraulica = addslashes($_POST['direcaoHidraulica']);
        $obCarro->vidroEletrico     = addslashes($_POST['vidroEletrico']);
        $obCarro->travaEletrica     = addslashes($_POST['travaEletrica']);
        $obCarro->cambioAutomatico  = addslashes($_POST['cambioAutomatico']);
        $obCarro->rodasLiga         = addslashes($_POST['rodasLiga']);
        $obCarro->alarme            = addslashes($_POST['alarme']);
        */

        $obCarro->atualizar();

        header('location: index.php?status=success');
        exit;
    }
    header('location: index.php?status=erro');
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';



