<?php 
session_start();
if(!isset($_SESSION['logado'])) {
  header('Location: /alohaphp/');
}
if(!$_SESSION['ehAdmin']){
   header('Location: /alohaphp/');
}

?>