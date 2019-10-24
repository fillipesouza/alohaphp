<?php
 require_once "../../helpers/banco.php";
 require_once "../../models/usuarioDAO.php";
 $usuarioDAO = new UsuarioDAO($pdo);
 $rm = $_POST["rm"];
 $nome = $_POST["nome"];
 $curso = $_POST["curso"];
 
 $usuario = Usuario::criaUsuario($rm,$nome,$curso);
 $usuarioDAO->update($usuario);
 
 header("Location: /alohaphp/index.php?msg=ok");
?>