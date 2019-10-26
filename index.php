<?php 
session_start();
if(isset($_SESSION['logado'])){
  if(isset($_SESSION['ehAdmin']) && $_SESSION['ehAdmin']){
    header('Location: admin.php');
  } else {
    header('Location: home.php');
  }
} else {
  header('Location: login.php');
}


?>