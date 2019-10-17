<?php 
class Curso {
  public $curso_id, $nome, $professor;
  static function criaCurso($curso_id, $nome, $professor){
    $curso = new Curso();
    $curso->curso_id = $curso_id;
    $curso->nome = $nome;
    $curso->professor = $professor;
    return $curso;
  }
}
?>