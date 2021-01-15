<?php

namespace classes\Db;

use \PDO;
use PDOException;

class Database{
    /**
    * Host de conexão com o banco de dados
    * @var string
    */
    const HOST = 'localhost';

    /**
    * Nome do banco de dados
    * @var string
    */
    const NAME = 'wiki_carros';

    /**
    * Usuário do banco
    * @var string
    */
    const USER = 'Poleto';

    /**
    * Senha de acesso ao banco de dados
    * @var string
    */
    const PASS = 'Poleto10!';

    /**
    * Nome da tabela a ser manipulada
    * @var string
    */
    private $table;

    /**
    * Instancia de conexão com o banco de dados
    * @var PDO
    */
    private $connection;

    /**
    * Define a tabela e instancia e conexão
    * @param string $table
    */
    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }

    /**
    * Método responsável por criar uma conexão com o banco de dados
    */
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }

    /**
    * Método responsável por executar queries dentro do banco de dados
    * @param  string $query
    * @param  array  $params
    * @return PDOStatement
    */
    public function execute($query, $params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }

    }

    /**
    * Método responsável por inserir dados no banco
    * @param  array $values [ field => value ]
    * @return integer ID inserido
    */
    public function insert($values){
        //dados query
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');
        //echo "<pre>"; print_r($fields); echo "</pre>"; exit;

        //Monta a query
        $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',', $binds).')';
        //var_dump($values) ;
        //Executa o insert
        $this->execute($query, array_values($values));

        //Retorna o ID inserido
        return $this->connection->lastInsertId();
    }

    /**
    * Método responsável por executar uma consulta no banco
    * @param  string $where
    * @param  string $order
    * @param  string $limit
    * @param  string $fields
    * @return PDOStatement
    */
    public function select($where = null, $order = null, $limit = null, $fields = '*'){
        //DADOS DA QUERY
        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER BY '.$order : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit : '';

    //MONTA A QUERY
        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;

    //EXECUTA A QUERY
        return $this->execute($query);
    }

    /**
    * Método responsável por executar atualizações no banco de dados
    * @param  string $where
    * @param  array $values [ field => value ]
    * @return boolean
    */
    public function update($where,$values){
        //echo "<pre>"; print_r($where); echo "</pre>"; exit;
        //DADOS DA QUERY
        $fields = array_keys($values);

        //MONTA A QUERY
        $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).' WHERE '.$where;

        //EXECUTAR A QUERY
        $this->execute($query,array_values($values));

        //RETORNA SUCESSO
        return true;
    }

    public function delete($where){
        $query = 'DELETE FROM '.$this->table.' WHERE '.$where;

        $this->execute($query);

        return true;
    }
}