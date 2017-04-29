<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	
	<form class="form-horizontal col-md-offset-5" action="inicio.php">
		<div class="form-group">
			<div class="col-sm-4">
				<input type="email" class="form-control" id="inputEmail3"
					placeholder="Email">
			</div></div>
		<div class="form-group">
			<div class="col-sm-4">
		
				<input type="password" class="form-control" id="inputPassword3"
					placeholder="Senha">
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
				<a class="text-left"><i>Criar usuario</i></a> <br /> <a
					class="text-left"><i>Esqueci minha senha</i></a>
			</div>
		</div>
	</form>
	</div>
</body>
</html>
