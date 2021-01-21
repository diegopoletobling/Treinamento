<?php

require __DIR__.'/vendor/autoload.php';
define('TITLE', 'Cadastrar carro');

use classes\Entity\Carro;

//echo "<pre>"; print_r($obCarro); echo "</pre>"; exit;
if (isset($_POST['descricao']) || isset($_POST['placa']) || isset($_POST['codigoRenavam']) || isset($_POST['anoModelo']) || isset($_POST['anoFabricacao'])
|| isset($_POST['cor']) || isset($_POST['km']) || isset($_POST['marca']) || isset($_POST['preco']) || isset($_POST['precoFipe'])) {
    if (!empty($_POST['descricao']) || !empty($_POST['placa']) || !empty($_POST['codigoRenavam']) ||
        !empty($_POST['anoModelo']) || !empty($_POST['anoFabricacao']) || !empty($_POST['cor'])  ||
        !empty($_POST['km']) || !empty($_POST['marca']) || !empty($_POST['preco']) || !empty($_POST['precoFipe'])) {
        salvar();
        header('location: index.php?status=success');
        exit;
    }
    header('location: index.php?status=erro');
}
//Valida os dados
function validar() {
    $erros = [];
    $obCarro = new Carro;
    $obCarro->descricao = addslashes($_POST['descricao']);
    if ($obCarro->descricao == "") {
        $erros['descricao'] = "O campo descrião precisa ser preenchido";
    }
    $obCarro->placa = addslashes($_POST['placa']);
    if (strlen($obCarro->placa) != 8 || !preg_match("^[a-zA-Z]{3}[0-9][A-Za-z0-9][0-9]{2}$", $obCarro->placa)) {
        $erros['placa'] =  "Preencha o campo placa corretamente!";
    }
    $obCarro->codigoRenavam = addslashes($_POST['codigoRenavam']);
    if (strlen($obCarro->codigoRenavam) != 11 || !is_numeric($obCarro->codigoRenavam)) {
        $erros['codigoRenavam'] =  "Preencha o campo codigoRenavam corretamente!";
    }
    $obCarro->anoModelo = addslashes($_POST['anoModelo']);
    if (strlen($obCarro->anoModelo) != 4) {
        $erros['anoModelo'] =  "Preencha o campo anoModelo corretamente!";
    }
    $obCarro->anoFabricacao = addslashes($_POST['anoFabricacao']);
    if (strlen($obCarro->anoFabricacao) != 4) {
        $erros['anoFabricacao'] =  "Preencha o campo anoFabricacao corretamente!";
    }
    $obCarro->cor = addslashes($_POST['cor']);
    $obCarro->km = addslashes($_POST['km']);
    if (!is_numeric($obCarro->km)) {
        $erros['km'] =  "Preencha o campo codigoRenavam corretamente!";
    }
    $obCarro->marca = addslashes($_POST['marca']);
    $obCarro->preco = addslashes($_POST['preco']);
    $obCarro->precoFipe = addslashes($_POST['precoFipe']);
    $obCarro->arCondicionado = addslashes($_POST['arCondicionado']);
    $obCarro->airBag  = addslashes($_POST['airBag']);
    $obCarro->cdPlayer  = addslashes($_POST['cdPlayer']);
    $obCarro->direcaoHidraulica = addslashes($_POST['direcaoHidraulica']);
    $obCarro->vidroEletrico = addslashes($_POST['vidroEletrico']);
    $obCarro->travaEletrica = addslashes($_POST['travaEletrica']);
    $obCarro->cambioAutomatico = addslashes($_POST['cambioAutomatico']);
    $obCarro->rodasLiga = addslashes($_POST['rodasLiga']);
    $obCarro->alarme = addslashes($_POST['alarme']);
    //echo "<pre>"; print_r($obCarro); echo "</pre>"; exit;
    //retorna um array de onde a 1ª posição é "erros" e a 2ª é "carro"
    return [
        'erros' => $erros,
        'carro' => $obCarro
    ];
}

//Salva os dados no banco caso não haja erros
function salvar() {
    $retorno  = validar();
    echo "<pre>"; print_r($retorno); echo "</pre>"; exit;
    if (COUNT($retorno['erros']) != 0) {
        return $retorno['erros'];
    }
    $retorno['carro']->cadastrar();
}

function editar() {
    $retorno  = validar();
    if (COUNT($retorno['erros']) != 0) {
        return $retorno['erros'];
    }
    $retorno['carro']->atualizar();
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';