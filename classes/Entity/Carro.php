<?php

namespace classes\Entity;

use classes\Db\Database;

class Carro
{

    /**
     * Identificador único de carro
     * @var integer
     */
    public $id;

    /**
     * Descrição de carro
     * @var string
     */
    public $descricao;

    /**
     * Número da placa do veículo
     * @var string
     */
    public $placa;

    /**
     * Código RENAVAM
     * @var string
     */
    public $codigoRenavam;

    /**
    * Ano do modelo do veículo
    * @var int
    */
    public $anoModelo;

    /**
    * ano de fabricação do veículo
    * @var int
    */
    public $anoFrabricacao;

    /**
    * Cor do veículo
    * @var string
    */
    public $cor;

    /**
    * Quilometragem do veículo
    * @var int
    */
    public $km;

    /**
    * Marca do veículo
    * @var string
    */
    public $marca;

    /**
    * Preço a ser vendido o veículo
    * @var float
    */
    public $preco;

    /**
    * Preço do veículo estabelecido pela FIPE
    * @var float
    */
    public $precoFipe;

    /**
    * Checkbox
    * @var boolean (s/n)
    */
    public $arCondicionado;

    /**
    * Checkbox
    * @var boolean (s/n)
    */
    public $airBag;

    /**
    * Checkbox
    * @var boolean (s/n)
    */
    public $cdPlayer;

    /**
    * Checkbox
    * @var boolean (s/n)
    */
    public $direcaoHidraulica;

    /**
    * Checkbox
    * @var boolean (s/n)
    */
    public $vidroEletrico;

    /**
    * Checkbox
    * @var boolean (s/n)
    */
    public $travaEletrica;

    /**
    * Checkbox
    * @var boolean (s/n)
    */
    public $cambioAutomatico;

    /**
    * Checkbox
    * @var boolean (s/n)
    */
    public $rodasLiga;

    /**
    * Checkbox
    * @var boolean (s/n)
    */
    public $alarme;

    /**
    * Método responsável por cadastrar novos automóveis no banco
    * @return boolean
    */
    public function Cadastrar(){
        $obDatabase = new Database('carros');
        $obDatabase->insert([
                                'descricao'         => $this->descricao,
                                'placa'             => $this->placa,
                                'codigoRenavam'     => $this->codigoRenavam,
                                'anoModelo'         => $this->anoModelo,
                                'anoFabricacao'     => $this->anoFrabricacao,
                                'cor'               => $this->cor,
                                'km'                => $this->km,
                                'marca'             => $this->marca,
                                'preco'             => $this->preco,
                                'precoFipe'         => $this->precoFipe,
                                'arCondicionado'    => $this->arCondicionado,
                                'airBag'            => $this->airBag,
                                'cdPlayer'          => $this->cdPlayer,
                                'direcaoHidraulica' => $this->direcaoHidraulica,
                                'vidroEletrico'     => $this->vidroEletrico,
                                'travaEletrica'     => $this->travaEletrica,
                                'cambioAutomatico'  => $this->cambioAutomatico,
                                'rodasLiga'         => $this->rodasLiga,
                                'alarme'            => $this->alarme
                            ]);
        //echo "<pre>"; print_r($obDatabase); echo "</pre>"; exit;
    }
}