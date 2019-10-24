<?php
 require_once "../../helpers/banco.php";
 require_once "../../models/usuarioDAO.php";
 $usuarioDAO = new UsuarioDAO($pdo);
 $rm = $_POST["rm"];
 $nome = $_POST["nome"];
 $senha = $_POST["senha"];
 $curso = $_POST["curso"];
 
 $usuario = Usuario::criaUsuario($rm,$nome,$curso);
 $usuario->setarSenha($senha);
 $usuarioDAO->save($usuario);
 
 header("Location: /alohaphp/index.php?op=c&msg=ok");
?>