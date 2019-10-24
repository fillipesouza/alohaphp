<?php
session_start();
?>
<?php include_once('src/models/usuario.php'); ?>
<?php
$listaDeUsuarios = array();
$usuario1 = Usuario::criaUsuario(24,"Mat Costa","Informática");
$usuario2 = Usuario::criaUsuario(38,"Felipe Aug","Informática");
array_push($listaDeUsuarios, $usuario1);
array_push($listaDeUsuarios, $usuario2);
?>
<?php include_once "partials/head.php"; ?>

<?php 
   if( isset($_GET["msg"])) {
      echo("Usuário Inserido com Sucesso");
   }
?>

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>RM</th>
            <th>NOME</th>
            <th>CURSO</th>
            <th>EDITAR</th>
            <th>REMOVER</th>+++
        </tr>
        </thead>
        <tbody>
            <?php foreach($listaDeUsuarios as $usuario){ ?>
                 <tr>
                    <td><?=$usuario->rm ?></td>
                    <td><?=$usuario->nome ?></td>
                    <td><?=$usuario->curso ?></td>
                    <td><a onclick="modalEditar(<?=$usuario->rm?>, '<?=$usuario->nome?>', '<?=$usuario->curso?>')" data-toggle="modal" data-target="#modal-edicao"> edit </a></td>
                    <td><a onclick="modalDeletar(<?=$usuario->rm?>)" data-toggle="modal" data-target="#modal-delecao"> delete </a> </td>
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