<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Incluir Curso</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo1">Matricula</label>
      <input type="number" class="form-control" min="0" max="999" name="sipebd['matricula']" required />
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="name">Nome do Curso</label>
      <input type="text" class="form-control" max="250" name="sipebd['nome']" required />
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Sigla do curso</label>
      <input type="text" class="form-control" min="0" max="5" name="sipebd['sigla']" required />
    </div>
	
    <div class="form-group col-md-1">
      <label for="campo3">Tipo</label>
      <input type="text" class="form-control" name="sipebd['tipo']">
    </div>
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-7">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>