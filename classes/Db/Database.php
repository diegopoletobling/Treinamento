<?php

namespace classes\Db;

use \PDO;
use PDOException;

class Database{
    const HOST = 'localhost';
    const NAME = 'wiki_carros';
    const USER = 'Poleto';
    const PASS = 'Poleto10!';

    private $table;
    private $connection;

    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }
}