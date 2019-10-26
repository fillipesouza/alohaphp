<?php include_once "partials/adminheader.php"; ?>
<?php
  require_once "src/helpers/banco.php";
  require_once "src/models/usuarioDAO.php";
  $usuarioDAO = new UsuarioDAO($pdo);
  $listaDeUsuarios = $usuarioDAO->readAll();
 
?>

<?php include_once "partials/head.php"; ?>

<?php 
   if( isset($_GET["msg"]) && isset($_GET["op"]) ) {
       $msg = "";
      switch($_GET['op']){
          case 'c':
          $msg = "Usuario Inserido com Sucesso";
             break;
           case 'u':
           $msg = "Usuario Modificado com Sucesso";
             break;
           case 'd':
           $msg = "Usuario Removido com Sucesso";
             break;
           default:
             break;
      }
      if($msg != ''){
          echo "<div id='flash' >".$msg."</div>";
      }
   }


?>

<h3><?php 
if(isset($_SESSION['nome_usuario'])){
 echo 'Bem Vindo, ' . $_SESSION['nome_usuario'];
}
?>
<form method="POST" action="src/controllers/desloga.php">
<button type="submit" class="btn btn-primary">Logout</button>
</form>
</h3>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>RM</th>
            <th>NOME</th>
            <th>CURSO</th>
            <th>EDITAR</th>
            <th>REMOVER</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($listaDeUsuarios as $usuario){ ?>
                 <tr>
                    <td><?=$usuario->rm ?></td>
                    <td><?=$usuario->nome ?></td>
                    <td><?=$usuario->curso ?></td>
                    <td>
                       <a onclick="modalEditar(<?=$usuario->rm?>, '<?=$usuario->nome?>', '<?=$usuario->curso?>')" data-toggle="modal" data-target="#modal-edicao">
                        <i class="fa fa-pencil"></i>
                      </a>
                     </td>
                    <td>
                      <a onclick="modalDeletar(<?=$usuario->rm?>)" data-toggle="modal" data-target="#modal-delecao">
                    <i class="fa fa-times"></i>
                     </a> </td>
                 </tr>
            <?php } ?>
        </tbody>
        <tfoot>
        <tr><td colspan="5" ><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-criacao">
  CRIAR USUARIO
</button> </td></tr>
        </tfoot>
</table>

<?php include_once "partials/modal.php"; ?>

<script>
 function modalEditar(rm, nome, curso){
    document.getElementById('ed-rm').value = rm;
    document.getElementById('ed-nome').value = nome;
    document.getElementById('ed-curso').value = curso;
 }

 function modalDeletar(rm, nome, curso){
    document.getElementById('dl-rm').value = rm;
 }
</script>

<?php include_once "partials/footer.php"; ?>