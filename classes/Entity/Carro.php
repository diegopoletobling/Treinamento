<?php

namespace classes\Entity;

use classes\Db\Database;
use \PDO;

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
    public $anoFabricacao;

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
        $this->id = $obDatabase->insert([
                                'descricao'         => $this->descricao,
                                'placa'             => $this->placa,
                                'codigoRenavam'     => $this->codigoRenavam,
                                'anoModelo'         => $this->anoModelo,
                                'anoFabricacao'     => $this->anoFabricacao,
                                'cor'               => $this->cor,
                                'km'                => $this->km,
                                'marca'             => $this->marca,
                                'preco'             => $this->preco,
                                'precoFipe'         => $this->precoFipe,
                                'arCondicionado'    => intval($this->arCondicionado),
                                'airBag'            => intval($this->airBag),
                                'cdPlayer'          => intval($this->cdPlayer),
                                'direcaoHidraulica' => intval($this->direcaoHidraulica),
                                'vidroEletrico'     => intval($this->vidroEletrico),
                                'travaEletrica'     => intval($this->travaEletrica),
                                'cambioAutomatico'  => intval($this->cambioAutomatico),
                                'rodasLiga'         => intval($this->rodasLiga),
                                'alarme'            => intval($this->alarme)
                            ]);
       // echo "<pre>"; print_r($this); echo "</pre>"; exit;
        return true;
    }

    /**
     * Metodo responsável por atualizar o carro no banco
     *
     * @return boolean
     */
    public function atualizar(){

        //echo "<pre>"; print_r($this->id); echo "</pre>"; exit;
        return (new Database('carros'))->update('id = '.$this->id,[
                                                    'descricao'         => $this->descricao,
                                                    'placa'             => $this->placa,
                                                    'codigoRenavam'     => $this->codigoRenavam,
                                                    'anoModelo'         => $this->anoModelo,
                                                    'anoFabricacao'     => $this->anoFabricacao,
                                                    'cor'               => $this->cor,
                                                    'km'                => $this->km,
                                                    'marca'             => $this->marca,
                                                    'preco'             => $this->preco,
                                                    'precoFipe'         => $this->precoFipe,
                                                    /*'arCondicionado'    => intval($this->arCondicionado),
                                                    'airBag'            => intval($this->airBag),
                                                    'cdPlayer'          => intval($this->cdPlayer),
                                                    'direcaoHidraulica' => intval($this->direcaoHidraulica),
                                                    'vidroEletrico'     => intval($this->vidroEletrico),
                                                    'travaEletrica'     => intval($this->travaEletrica),
                                                    'cambioAutomatico'  => intval($this->cambioAutomatico),
                                                    'rodasLiga'         => intval($this->rodasLiga),
                                                    'alarme'            => intval($this->alarme)*/

                                                ]);
    }

    public function excluir(){
        return (new Database('carros'))->delete('id = '.$this->id);
    }
    /**
     * Método responsável por obter os vaículos do banco de dados
     *
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array
     */
    public static function getCarros($where = null, $order = null, $limit = null){
        return (new Database('carros'))->select($where, $order, $limit)
                                       ->fetchAll(PDO::FETCH_CLASS,self::class);

    }

    /**
     * Método responsável por obter a quantidade de carros do Banco de dados
     *
     * @param string $where
     * @return integer
     */
    public static function getQuantidadeCarros($where = null){
        return (new Database('carros'))->select($where,null,null,'COUNT(*) as qtd')
                                       ->fetchObject()
                                       ->qtd;

    }

    /**
     * Método responsável por buscar o veículo pelo ID
     *
     * @param integer $id
     * @return Carro
     */
    public static function getCarro($id){
        return (new Database('carros'))->select('id = '.$id)
                                      ->fetchObject(self::class);
    }
}