<?php require_once '../view/config.php'; ?>

<?php require_once DBAPI; ?>


<?php include( HEADER_TEMPLATE ); ?>

<h1 align="center">Imprimir Plano de Ensino</h1>
<hr />

<form class="form-horizontal col-md-offset-3" action="" method="post">
	<div class="row">
		<div class="form-group col-sd-4">
			<div class="col-md-2">
				<label for="curso">Curso</label> <select class="form-control">
					<option>Curso 1</option>
				</select>
			</div>
			<div class="col-md-2">
				<label for="periodo">Período</label> <select class="form-control">
					<option>1º</option>
				</select>
			</div>
			<div class="col-md-2">
				<label for="disciplina">Disciplina</label> <select
					class="form-control">
					<option>Exemplo</option>
				</select>
			</div>
			<div class="col-md-2">
				<label for="planodeensino">Plano de Ensino</label> <select
					class="form-control">
					<option>Opção 1</option>
				</select>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="form-group">
			<div class="col-md-offset-2 col-md-2 control-label">
				<button type="submit" class="btn btn-primary">Imprimir</button>
			</div>
			<div class="col-sm-1 control-label">
				<a href="../pagIniciais/usuario.php" class="btn btn-default">Voltar</a>
			</div>
		</div>
	</div>
</form>

<?php include(FOOTER_TEMPLATE); ?>