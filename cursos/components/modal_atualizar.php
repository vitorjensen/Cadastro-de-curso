

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atualzar dados de </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="atualizar_curso.php" enctype="multipart/form-data">

        <div class="form-group">
            <label for="recipient-name" class="col-form-label">ID do curso:</label>
            <input type="text" name="txt_codigo" class="form-control" id="recipient-id" readonly>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nome do curso:</label>
            <input type="text" name="txt_nome_curso" class="form-control" id="recipient-nome-curso">
          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Descrição:</label>
            <input type="text" name="txt_descricao" class="form-control" id="recipient-descricao">
          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Professor:</label>
            <input type="text" name="txt_professor" class="form-control" id="recipient-professor">
          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Duração:</label>
            <input type="text" name="txt_duracao" class="form-control" id="recipient-duracao">
          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Status do curso:</label>
          <select id="recipient-status" name="txt_status" class="form-control">
          <option value="0">0</option>
         <option value="1">1</option>
          </select>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Atualzar</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>