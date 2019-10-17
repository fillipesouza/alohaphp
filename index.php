<?php
include_once("src/helpers/banco.php");
include_once("src/models/cursoDAO.php");
include_once("src/models/usuarioDAO.php");


/*$dao = new CursoDAO($pdo);
$curso = Curso::criaCurso(1,"Informatica",58);
$dao->save($curso);
*/
$usuarioDAO = new UsuarioDAO($pdo);
$usuario = Usuario::criaUsuario(183,"Estefani",8);
$usuario->setarSenha("Estefani183");
$usuarioDAO->save($usuario);


?>