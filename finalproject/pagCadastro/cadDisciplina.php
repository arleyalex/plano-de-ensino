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

<h1>Cadastro de Disciplina</h1>
<hr />

<form class="col-md-offset-2" action="" method="post">
	<div class="row">
		<div class="form-group col-md-1">
			<label for="codigo">Código</label> 
			<input type="text" class="form-control" name="codigo">
		</div>
		<div class="form-group col-md-7">
			<label for="nome">Nome</label> 
			<input type="text" class="form-control" name="nome">
		</div>
		<div class="form-group col-md-2">
			<label for="cargahoraria">Carga Horaria</label> <input type="number"
				class="form-control" name="chDisc" min="0" max="999">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-10">
			<label for="ementa">Ementa</label>
			<textarea class="form-control" name="txtementa" rows="4"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-10">
			<label for="objetivo">Objetivo</label>
			<textarea class="form-control" name="txtobjetivo" rows="4"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-10">
			<label for="bbbasica">Bibliografia Básica</label>
			<textarea class="form-control" name="txtbbbasica" rows="4"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-10">
			<label for="bbcompl">Bibliografia Complementar</label>
			<textarea class="form-control" name="txtbbcompl" rows="4"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-md-offset-3 col-md-4">
			<div class="col-md-6">
				<button class="btn btn-primary">Cadastrar</button>
			</div>
			<div class="col-md-6">
				<a href="disciplina.php" class="btn btn-default">Cancelar</a>
			</div>
		</div>
	</div>
</form>
<?php include(FOOTER_TEMPLATE); ?>