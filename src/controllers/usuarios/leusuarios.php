<?php 
require_once "../../helpers/banco.php";
require_once "../../models/usuarioDAO.php";
$usuarioDAO = new UsuarioDAO($pdo);
$listaDeUsuarios = $usuarioDAO->readAll();


?>
