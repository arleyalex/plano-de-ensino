<?php require_once '../view/config.php'; ?>

<?php require_once DBAPI; ?>

<?php include( HEADER_TEMPLATE ); ?>

<h1>Planejamento</h1>
<hr />

<form class="col-md-offset-2" action="" method="post">
	<div class="row">
		<div class="form-group col-md-3">
			<label for="ano">Ano</label> <input type="number"
				class="form-control" name="ano">
		</div>
		<div class="form-group col-md-3">
			<label for="nome">Semestre</label> <input type="number"
				class="form-control" name="semestre" max="10">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-3">
			<label for="dataInicio">Data Inicio:</label> <input type="date"
				class="form-control" name="dtInicio">
		</div>
		<div class="form-group col-md-3">
			<label for="dataInicio">Data Término:</label> <input type="date"
				class="form-control" name="dtTermino">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-3">
			<label for="situacao">Situação: </label>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-3">
			<input type="radio" class="form-group" name="situacao"> Aberto
		</div>
		<div class="col-md-3">
			<input type="radio" class="form-group" name="situacao"> Fechado
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-8">
			<label for="biblBasica">Bibliografia básica:</label>
			<textarea rows="4" class="form-control"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-8">
			<label for="biblBasica">Bibliografia complementar:</label>
			<textarea rows="4" class="form-control"></textarea>
		</div>
	</div>
	<div class="row"></div>
	<br>
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