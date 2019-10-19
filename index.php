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
<? include_once "partials/head.php"; ?>

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
                    <td> edit </td>
                    <td> delete </td>
                 </tr>
            <?php } ?>
        </tbody>
        <tfoot>
        <tr><td colspan="5" ><button type="button" class="btn btn-primary">CRIAR USUARIO</button> </td></tr>
        </tfoot>
</table>

<? include_once "partials/foot.php"; ?>