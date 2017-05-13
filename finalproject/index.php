<?php
    $BANCO = ("host=localhost dbname=sipedb port=5432 user=sipe password=senac123");
    $CONEXAO = pg_connect($BANCO);

if (!$CONEXAO) {
    echo 'Erro, banco de dados nao conectado!';
} else {
	$SQL = 
	
	
pg_close($CONEXAO);
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SiPEWeb</title>
<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="col-md-offset-5">
			<h1>&nbsp;&nbsp;SiPEWeb</h1>
		</div>
		<!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<hr />
		<form class="form-horizontal col-md-offset-5" action="./pagIniciais/inicio.php">
			<div class="form-group">
				<div class="col-sm-4">
					<div class="input-group">
						<span class="input-group-addon"> <i
							class="glyphicon glyphicon-user"></i></span> <input type="text"
							id="email" class="form-control" placeholder="Usuario">
					</div>
					<br />
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div class="input-group">
						<span class="input-group-addon"><i
							class="glyphicon glyphicon-lock"></i></span> <input
							type="password" id="senha" class="form-control"
							placeholder="Senha">
					</div>
					<br />
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
					<div class="checkbox">
						<label> <input type="checkbox"> Lembrar me
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<button type="submit" class="btn btn-primary">Entrar</button>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-3">
					<a href="./pagCadastro/cadUsuario.php" class="text-left"><i>Criar usuário</i></a>
					<br /> <a class="text-left"><i>Esqueci minha senha</i></a>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
