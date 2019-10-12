<?php
include_once("src/helpers/banco.php");
include_once("/src/models/curso.php");
include_once("/src/models/cursoDAO.php");


$dao = new CursoDAO($pdo);
$curso = new Curso(0, "Cozinha", 24);
$dao->save($curso);


/*
$sql = "SELECT * FROM tb_cursos";
$stmt = $pdo->query($sql);
$cursos = $stmt->fetchAll(PDO::FETCH_CLASS, "Curso");
foreach ($cursos as $curso) {
    echo $curso->nome;
}

$stmt = $pdo->prepare('INSERT INTO tb_cursos values (?)');
$curso = new Curso();
$curso->nome = "Mecanica";  $curso->professor = 4; $curso->curso_id = 2;
$dados = serialize($curso);
print_r($dados);
$stmt->execute(array($dados));
*/

?>