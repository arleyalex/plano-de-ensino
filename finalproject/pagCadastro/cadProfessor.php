<?php require_once '../view/config.php'; ?>

<?php require_once DBAPI; ?>

<?php include( HEADER_TEMPLATE ); ?>

<h1 align="center">SiPEWeb</h1>
<hr />

<form class="col-md-offset-2" action="" method="post">
	<div class="row">
		<div class="form-group col-md-3">
			<label for="matr">Matricula*</label>
			<input type="number" class="form-control" id="matriculaProfessor">
		</div>
	<div class="form-group col-md-4">
		<label for="nome">Nome*</label> 
		<input type="text" class="form-control" id="nomeProfessor">
	</div>
	</div>
	<div class="row">
		<div class="form-group col-md-3">
			<label for="cep">CEP*</label>
			<input type="number" class="form-control" id="cepProf">
		</div>
		<div class="form-group col-md-2">
			<label for="numero">Número*</label>
			<input type="number" class="form-control" id="numProf">
		</div>
		<div class="form-group col-md-5">
			<label for="logradouro">Logradouro*</label>
			<input type="text" class="form-control" id="logradouroProf">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-3">
			<label for="compl">Complemento</label>
			<input type="text" class="form-control" id="complemento">
		</div>
		<div class="form-group col-md-3">
			<label for="bairro">Bairro*</label>
			<input type="text" class="form-control" id="bairroProf">
		</div>
		<div class="form-group col-md-3">
			<label for="cidade">Cidade*</label>
			<input type="text" class="form-control" id="cidadeProf">
		</div>
		<div class="form-group col-md-2">
			<label for="uf">UF*</label>
			<select class="form-control" id="ufProf">
			        <option>Selecione</option>
			        <option>AC</option>
			        <option>AL</option>
			        <option>AM</option>
			        <option>BA</option>
			        <option>CE</option>
			        <option>DF</option>
			        <option>ES</option>
			        <option>GO</option>
			        <option>MA</option>
			        <option>MT</option>
			        <option>MS</option>
			        <option>MG</option>
			        <option>PA</option>
			        <option>PB</option>
			        <option>PR</option>
			        <option>PE</option>
			        <option>PI</option>
			        <option>RJ</option>
			        <option>RN</option>
			        <option>RS</option>
			        <option>RO</option>
			        <option>RR</option>
			        <option>SC</option>
			        <option>SP</option>
			        <option>SE</option>
			        <option>TO</option>			        
			      </select>
		</div>
	</div>
	<div class="row">
	<div class="form-group col-md-5">
		<h6><label for="obrigatorio">Itens com "*" são de preenchimento obrigatório.</label></h6>
	</div>
	</div>
	<div class="row">
		<div class="col-md-offset-3 col-md-3">
			<div class="col-md-6">
				<button type="submit" class="btn btn-primary">Criar</button>
			</div>
			<div class="col-md-6">
				<a href="../pagIniciais/usuario.php" class="btn btn-default">Voltar</a>
			</div>
		</div>
	</div>
</form>

<?php include(FOOTER_TEMPLATE); ?>