<?php

require __DIR__.'/vendor/autoload.php';
define('TITLE', 'Cadastrar carro');

use classes\Entity\Carro;
$obcarro = new Carro;
//echo "<pre>"; print_r($obcarro); echo "</pre>"; exit;

//$formaction = 'cadastrar.php';
if(isset($_POST['descricao']) || isset($_POST['placa']) || isset($_POST['codigoRenavam']) || isset($_POST['anoModelo']) || isset($_POST['anoFabricacao'])
|| isset($_POST['cor']) || isset($_POST['km']) || isset($_POST['marca']) || isset($_POST['preco']) || isset($_POST['precoFipe'])){

    if (!empty($_POST['descricao']) || !empty($_POST['placa']) || !empty($_POST['codigoRenavam']) ||
        !empty($_POST['anoModelo']) || !empty($_POST['anoFabricacao']) || !empty($_POST['cor'])  ||
        !empty($_POST['km']) || !empty($_POST['marca']) || !empty($_POST['preco']) || !empty($_POST['precoFipe'])){

        $update                     = false;
        $obcarro->descricao         = addslashes($_POST['descricao']);
        if($obcarro->descricao == ""){
            echo "Preencha o campo descrição!";
        }
        $obcarro->placa             = addslashes($_POST['placa']);
        if(strlen($obcarro->placa) != 8 || !preg_match("^[a-zA-Z]{3}[0-9][A-Za-z0-9][0-9]{2}$", $obcarro->placa)){
            echo "Preencha o campo placa corretamente!";
        }
        $obcarro->codigoRenavam     = addslashes($_POST['codigoRenavam']);
        if(strlen($obcarro->codigoRenavam) != 11 || !is_numeric($obcarro->codigoRenavam)){
            echo "Preencha o campo codigoRenavam corretamente!";
        }
        $obcarro->anoModelo         = addslashes($_POST['anoModelo']);
        if(strlen($obcarro->anoModelo) != 4){
            echo "Preencha o campo anoModelo corretamente!";
        }
        $obcarro->anoFabricacao     = addslashes($_POST['anoFabricacao']);
        if(strlen($obcarro->anoFabricacao) != 4){
            echo "Preencha o campo anoFabricacao corretamente!";
        }
        $obcarro->cor               = addslashes($_POST['cor']);
        $obcarro->km                = addslashes($_POST['km']);
        if(!is_numeric($obcarro->km)){
            echo "Preencha o campo codigoRenavam corretamente!";
        }
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

        $obcarro->Cadastrar();
        header('location: index.php?status=success');
        exit;
    }
    header('location: index.php?status=erro');
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';



