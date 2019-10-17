<?php
include_once("src/helpers/banco.php");
include_once("src/models/cursoDAO.php");


$dao = new CursoDAO($pdo);
$curso = Curso::criaCurso(1,"Informatica",58);
$dao->save($curso);


?>