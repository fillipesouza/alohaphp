<?php
include_once("src/helpers/banco.php");
include_once("src/models/cursoDAO.php");


$dao = new CursoDAO($pdo);
$curso = new Curso(0, "Cozinha", 24);
$dao->save($curso);

//$results = $dao->readAll();
//print_r($results);

$cursoMod = new Curso(1,"Info",56);
//$dao->update($cursoMod);
$dao->delete($cursoMod);


?>