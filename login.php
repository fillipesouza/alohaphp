<?php
session_start();
?>
<?php include_once "partials/head.php"; ?>

<form action="src/controllers/autentica.php" method="post">
<div class="form-group">
  <label for="rm">RM</label>
  <input type="text" class="form-control" name="rm" id="rm" aria-describedby="helpId" placeholder="">
</div>
<div class="form-group">
  <label for="senha">Senha</label>
  <input type="password" class="form-control" name="senha" id="senha" aria-describedby="helpId" placeholder="">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include_once "partials/footer.php"; ?>