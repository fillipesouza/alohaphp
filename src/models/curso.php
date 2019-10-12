<?php 
class Curso {
  public $curso_id, $nome, $professor;
  function __construct($curso_id, $nome, $professor){
    $this->curso_id = $curso_id;
    $this->nome = $nome;
    $this->professor = $professor;
  }
}
?>