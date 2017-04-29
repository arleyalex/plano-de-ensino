<?php require_once "config.php"; ?> 

<?php require_once DBAPI; ?>

<?php include( HEADER_TEMPLATE ); ?>

<h1 align="center">SiPEWeb</h1>
<hr />

<form class="form-horizontal" action="" method="post">
	<div class="form-group">
		<label for="nome" class="col-sm-2 control-label">Nome Completo</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="nome1">
		</div>
	</div>
	<div class="form-group">
		<label for="login" class="col-sm-2 control-label">Login</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="login1">
		</div>
	</div>
	<div class="form-group">
		<label for="senha" class="col-sm-2 control-label">Senha</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="senha1">
		</div>
	</div>
	<div class="form-group">
		<label for="senha" class="col-sm-2 control-label">Sexo</label>
		<div class="form-group">
			<div class="radio col-sm-2">
				<label> <input type="radio" id="sexom" name="sexo" value="masc">&nbsp;Masculino <br />
				<input type="radio" id="sexof" name="sexo" value="fem">&nbsp;Feminino
				</label>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="nivel" class="col-sm-2 control-label">Nivel</label>
		<div class="form-group">
			<div class="radio col-sm-2">
				<label>
				<input type="radio" id="coord" name="optnivel" value="coord">&nbsp;Coordenador <br />
				<input type="radio" id="prof" name="optnivel" value="prof">&nbsp;Professor <br/>
				<input type="radio" id="aluno" name="optnivel" value="aluno">&nbsp;Aluno				
				</label>
			</div>
		</div>
	</div>
	<div class="form-group">
			<div class="col-sm-3 control-label">
				<button type="submit" class="btn btn-primary">Criar</button>
			</div>
		
			<div class="col-sm-1 control-label">
				<button type="reset" class="btn btn-default">Limpar</button>
			</div>
		</div>
</form>

<?php include(FOOTER_TEMPLATE); ?>