<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
<title>SiPEWeb</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="<?php echo BASEURL; ?>css/bootstrap.min.css">
<style>
body {
	padding-top: 50px;
	padding-bottom: 20px;
}
</style>
<link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css" />
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand">SiPEWeb</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false"> Menu <span class="caret"></span>
					</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo BASEURL; ?>./pagIniciais/inicio.php">Inicio</a></li>
							<li><a href="<?php echo BASEURL; ?>./pagIniciais/curso.php">Curso</a></li>
							<li><a href="<?php echo BASEURL; ?>./pagIniciais/disciplina.php">Disciplina</a></li>
							<li><a href="<?php echo BASEURL; ?>./pagIniciais/planEnsino.php">Plano
									de Ensino</a></li>
							<li><a href="<?php echo BASEURL; ?>./pagIniciais/usuario.php">Usuário</a></li>
							<li><a href="<?php echo BASEURL; ?>./index.php">Sair</a></li>
						</ul></li>
				</ul>
			</div>
			<!--/.navbar-collapse -->
		</div>
	</nav>

	<main class="container">