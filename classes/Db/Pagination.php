<?php

namespace classes\Db;

class Pagination{
    /**
     * Número máximo de registros de uma pagina
     *
     * @var integer
     */
    private $limit;

    /**
     * Quantidade total de resultados do banco
     * @var integer
     */
    private $results;

    /**
     * Quantidade de paginas
     * @var integer
     */
    private $pages;

    /**
     * pagina atual
     * @var integer
     */
    private $currentpage;

    /**
     * contrutor da classe
     *
     * @param integer $results
     * @param integer $currentpage
     * @param integer $limit
     */
    public function __construct($results, $currentpage = 1, $limit = 10){
        $this->results = $results;
        $this->limit = $limit;
        $this->currentpage = (is_numeric($currentpage) and $currentpage > 0) ? $currentpage : 1;
        $this->calculate();
    }
    /**
     * Método que calcula a paginação
     *
     */
    private function calculate(){
        $this->pages = $this->results > 0 ? ceil($this->results / $this->limit) : 1;

        $this->currentpage = $this->currentpage <= $this->pages ? $this->currentpage : $this->pages;
    }

    /**
     * list sql
     *
     * @return string
     */
    public function getLimit(){
        $offset = ($this->limit * ($this->currentpage - 1));
        return $offset.','.$this->limit;
    }

    /**
     * metodo que retorna as opçoes de paginas disponíveis
     *
     * @return array
     */

    public function getPages(){
        if($this->pages == 1) return [];
        for($i = 1; $i <= $this->pages; $i++){
            $paginas[] = [
            'pagina' => $i,
            'atual' => $i == $this->currentpage
            ];
        }
        return $paginas;
    }
    
}