<?php
    $BANCO = ("host=localhost dbname=sipedb port=5432 user=sipe password=senac123");
    $CONEXAO = pg_connect($BANCO);

if (!$CONEXAO) {
    echo 'erro banco de dados nao conectado';
} else {
	$SQL = 
	
	
pg_close($CONEXAO);
?>


<?php require_once DBAPI; ?>

<?php include( HEADER_TEMPLATE ); ?>

<h1>Cadastro de Curso</h1>
<hr />

<form class="col-md-offset-2" action="" method="post">
	<div class="row">
	<div class="form-group col-md-2">
	<label for="numero">Número</label>
	<input type="number" class="form-control" name="numeroCurso">
	</div>
	<div class="form-group col-md-1">
	<label for="codigo">Código</label>
	<input type="text" class="form-control" name="codigo">
	</div>
	<div class="form-group col-md-1">
	<label for="sigla">Sigla</label>
	<input type="text" class="form-control" name="txtSigla">
	</div>
	<div class="form-group col-md-6">
	<label for="nome">Nome do Curso</label>
	<input type="text" class="form-control" name="nome">
	</div>
	<div class="form-group col-md-2">
	<label for="cargahoraria">Carga Horária</label>
	<input type="number" class="form-control" name="chcurso">
	</div>
	</div>
	<div class="row">
	<div class="form-group col-md-2">	
		<label for="nivel" class="control-label">Nivel</label>
			      <select class="form-control" id="nivel">
			        <option>Tecnológico</option>
			        <option>Graduação</option>
			        <option>Bacharelado</option>
			      </select>
	</div>	
	</div>
	<div class="row">
	<div class="form-group col-md-2">
	<label for="matricula">Matricula</label>
	<input type="number" class="form-control" name="txtMatricula">
	</div>
	</div>
	<div class="row">
	<div class="col-md-offset-3 col-md-4">
	<div class="form-group col-md-6">
	<button class="btn btn-primary">Cadastrar</button>
	</div>
	<div class="form-group col-md-6">
	<a href="../pagIniciais/curso.php" class="btn btn-default">Cancelar</a>
	</div>
	</div>
	</div>
</form>
<?php include(FOOTER_TEMPLATE); ?>