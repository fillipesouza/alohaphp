<?php 
session_start();
if(isset($_SESSION['logado'])){
  header('Location: admin.php');
} else {
  header('Location: login.php');
}


?>