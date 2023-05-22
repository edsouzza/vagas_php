<?php

namespace App\Entity;

use App\Db\Database;

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
      //DEFINIR A DATA
      $this->data = date('Y-m-d H:i:s');

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


}