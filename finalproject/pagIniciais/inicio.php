<?php
    $BANCO = ("host=localhost dbname=sipedb port=5432 user=sipe password=senac123");
    $CONEXAO = pg_connect($BANCO);

if (!$CONEXAO) {
    echo 'Erro, banco de dados nao conectado!';
} else {
	$SQL = 
	
	
pg_close($CONEXAO);
?>


<h1 align="center">SiPEWeb</h1>
<hr />
<div class="row col-md-offset-3">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="../pagIniciais/curso.php" class="btn btn-default">	
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Curso</p>
				</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="../pagIniciais/disciplina.php" class="btn btn-default">	
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Disciplina</p>
				</div>
		</a>
	</div>
		<div class="col-xs-6 col-sm-3 col-md-3">
		<a href="../pagIniciais/planEnsino.php" class="btn btn-default">	
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Plano de ensino</p>
				</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="../pagIniciais/usuario.php" class="btn btn-default">	
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Usuário</p>
				</div>
		</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>