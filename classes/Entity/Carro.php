<?php

namespace classes\Entity;

class Carro{

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


}
