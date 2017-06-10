
<?php require_once '../view/config.php'; ?>




<?php include( HEADER_TEMPLATE ); ?>



<h1 align="center">SiPEWeb</h1>
<hr />

<form class="form-horizontal" action="incluirUser.php" method="post">
	<div class="form-group">
		<label for="nome" class="col-md-5 control-label">Nome Completo</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="nome">
		</div>
	</div>
	<div class="form-group">
		<label for="login" class="col-md-5 control-label">Login</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="login">
		</div>
	</div>
	<div class="form-group">
		<label for="senha" class="col-md-5 control-label">Senha</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="senha">
		</div>
	</div>
	<div class="form-group">
		<label for="sexo" class="col-md-5 control-label">Sexo</label>
		<div class="form-group">
			<div class="radio col-sm-2">
				<label> <input type="radio" id="sexom" name="sexo" value="masculino">&nbsp;Masculino
					<br /> <input type="radio" id="sexof" name="sexo" value="feminino">&nbsp;Feminino
				</label>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label for="nivel" class="col-md-5 control-label">Nivel</label>
		<div class="radio col-sm-2">
			<select class="form-control" id="nivel">
				<option>Coordenador</option>
				<option>Professor</option>
				<option>Auxiliar</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-5 control-label">
			<button type="submit" class="btn btn-primary">Criar</button>
		</div>

		<div class="col-sm-1 control-label">
			<button type="reset" class="btn btn-default">Limpar</button>
		</div>
		<div class="col-sm-1 control-label">
			<a href="../pagIniciais/usuario.php" class="btn btn-default">Voltar</a>
		</div>
	</div>
</form>

<?php include(FOOTER_TEMPLATE); ?>