<?php include_once "partials/userheader.php"; ?>
<?php
  require_once "src/helpers/banco.php";
  require_once "src/models/usuarioDAO.php";
  $usuarioDAO = new UsuarioDAO($pdo);
  $listaDeUsuarios = $usuarioDAO->readAll();
 
?>

<?php include_once "partials/head.php"; ?>

<h3><?=$_SESSION['nome_usuario'] ?></h3>
<img src="fotos/<?=$_SESSION['foto_usuario']?>" alt="">

<form action="src/controllers/fotos.php" method="post"  enctype='multipart/form-data'>
<div class="form-group">
  <label for="foto">Foto</label>
  <input type="file" class="form-control-file" name="foto" id="foto" placeholder="" aria-describedby="fileHelpId">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

<?php include_once "partials/footer.php"; ?>