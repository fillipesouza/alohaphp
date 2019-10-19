

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <input type="text" class="form-control" name="rm" id="rm" aria-describedby="helpId" placeholder="">
            
        </div>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" aria-describedby="helpId" placeholder="">
            
        </div>
        <div class="form-group">
            <label for="curso">Curso</label>
            <input type="text" class="form-control" name="curso" id="curso" aria-describedby="helpId" placeholder="">
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="">
        </div>

            
        </div>
        <div class="modal-footer">
            
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>