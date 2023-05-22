<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database{

   /**
    * Host de conexão com o banco de dados
    *@var string
    */
    const HOST = 'localhost';

   /**
    * Nome do banco de dados
    *@var string
    */
    const DBNAME = 'wdev_vagas';

   /**
    * Usuário do banco de dados
    *@var string
    */
    const USER = 'root';

   /**
    * Senha de acesso ao banco de dados
    *@var string
    */
    const PASS = '';

    /**
     * Nome da tabela a ser manipulada
     * @var string
     */
    private $table;

    /**
     * Instancia de conexao com o banco de dados
     * @var PDO
     */
    private $connection;

    /**
     * Define a tabela, instancia e conexao
     * @param string $table
     */

    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    /**
     * Método responsável por criar uma conexão com o banco de dados
     */
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::DBNAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }

     /**
      * Metodo responsável por executar queryies dentro do banco de dados 
      *@param string $query
      *@param array $params
      *return PDOStatement
      */
    public function execute($query, $params =[]){

        try{
            $statement = $this->connection->prepare($query);
            $statement ->execute($params);
            return $statement;
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }

    /**
      * Metodo responsável por inserir dados no banco
      *@param array $values [field => value
      *return integer
      */

    public function insert($values){
       //DADOS DA QUERY
       $fields = array_keys($values);
       $binds  = array_pad([], count($fields),'?');

    //    echo "<pre>"; print_r($values);  echo "</pre>";
       $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
       
       $this->execute($query, array_values($values));

       return $this->connection->lastInsertId();

    }

}