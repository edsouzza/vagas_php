<?php

namespace App\Entity;

use App\Db\Database;
use \PDO;

class Vaga{

  /**
   * Identificador único da vaga
   * @var integer
   */
    public $id;

    /**
     * Titulo da vaga
     * @var string     
     */
    public $titulo;

    /**
     * Descricao da vaga (pode conter html)
     * @var string
     */
    public $descricao;

    /**
     * Define se a vaga esta ativa ou não
     * @var string
     */
    public $ativo;

    /**
     * Data de publicação da vaga
     * @var string
     */
    public $data;


    /**
     * Método responsável por cadastrar uma nova vaga no banco
     * @return boolean
     */
    public function cadastrar(){
      // DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
      date_default_timezone_set('America/Sao_Paulo');
      //DEFINIR A DATA
      $this->data = date('Y-m-d H:i:s',time());

      //INSERIR A VAGA NO BANCO
      $obDatabase = new Database('vagas');
      $this->id =$obDatabase->insert([
              'titulo'=> $this->titulo,
              'descricao'=> $this->descricao,
              'ativo'=> $this->ativo,
              'data'=> $this->data
      ]);

      // echo "<pre>"; print_r($obDatabase);  echo "</pre>";
      //RETORNAR SUCESSO
      return true;
    }


    /**
     * METODO RESPONSAVEL POR ATUALIZAR A VAGA NO BANCO
     * @return boolean
     */
    public function atualizar(){
        return(new Database('vagas'))->update('id = '.$this->id,[
                            'titulo'=> $this->titulo,
                            'descricao'=> $this->descricao,
                            'ativo'=> $this->ativo,
                            'data'=> $this->data                 
      ]);

      return true;
    }

    /**
     * METODO RESPONSAVEL POR EXCLUIR A VAGA NO BANCO
     * @return boolean
     */
    public function excluir(){
        return(new Database('vagas'))->delete('id = '.$this->id);          
    }

    /*Criando o metodo que vai retornar um array de varias instancias de Vaga
    *obtendo assim os dados para preencher a tabela da listagem, mas não precisamos da
    *instancia real no momento da consulta e sim apenas do response(retorno)
    */
    public static function getVagas($where = null, $order = null, $limit = null){
      return(new Database('vagas'))->select($where,$order,$limit)
                                   ->fetchAll(PDO::FETCH_CLASS,self::class);
    }
   
    /**
     * METODO RESPONSAVEL POR BUSCAR UMA VAGA PASSANDO O ID
     * @param integer $id
     * @return Vaga
     */
    public static function getVAga($id){
      return (new Database('vagas'))->select('id = '.$id)
                                    ->fetchObject(self::class);
    }

}