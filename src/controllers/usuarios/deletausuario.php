<?php
 require_once "../../helpers/banco.php";
 require_once "../../models/usuarioDAO.php";
 $usuarioDAO = new UsuarioDAO($pdo);
 $rm = $_POST["rm"];

 $usuarioDAO->delete($rm);

 header("Location: /alohaphp/index.php?msg=ok");

 ?>