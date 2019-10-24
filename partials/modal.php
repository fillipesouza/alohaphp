

<!-- Modal -->
<div class="modal fade" id="modal-criacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Criação do Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="src/controllers/usuarios/insereusuario.php" method="post">
        <div class="modal-body">
        <div class="form-group">
            <label for="rm">RM</label>
            <input type="text" class="form-control" name="rm" id="cr-rm" aria-describedby="helpId" placeholder="">
            
        </div>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="cr-nome" aria-describedby="helpId" placeholder="">
            
        </div>
        <div class="form-group">
            <label for="curso">Curso</label>
            <input type="text" class="form-control" name="curso" id="cr-curso" aria-describedby="helpId" placeholder="">
        </div>
            
        </div>
        <div class="modal-footer">
            
            <button type="submit" class="btn btn-primary">Criar Usuário</button>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="modal-edicao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edição do Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="src/controllers/usuarios/modificausuario.php" method="post">
        <div class="modal-body">
        <input type="hidden" id="ed-rm" name="rm">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="ed-nome" aria-describedby="helpId" placeholder="">
            
        </div>
        <div class="form-group">
            <label for="curso">Curso</label>
            <input type="text" class="form-control" name="curso" id="ed-curso" aria-describedby="helpId" placeholder="">
        </div>
            
        </div>
        <div class="modal-footer">
            
            <button type="submit" class="btn btn-primary">Editar Usuário</button>
        </div>
      </form>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="modal-delecao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deleção do Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="src/controllers/usuarios/modificausuario.php" method="post">
        <div class="modal-body">
        <input type="hidden" id="dl-rm" name="rm">            
        </div>
        <div class="modal-footer">            
            <button type="submit" class="btn btn-danger">Deletar Usuario</button>
        </div>
      </form>
    </div>
  </div>
</div>