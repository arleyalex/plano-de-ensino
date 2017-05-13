<?php
    $BANCO = ("host=localhost dbname=sipedb port=5432 user=sipe password=senac123");
    $CONEXAO = pg_connect($BANCO);

if (!$CONEXAO) {
    echo 'Erro, banco de dados nao conectado';
} else {
	$SQL = 
	
	
pg_close($CONEXAO);
?>




<h1 align="center">SiPEWeb - Curso</h1>
<hr />
<div class="row col-md-offset-4">
	<div class="col-xs-6 col-sm-3 col-md-3">
		<a href="../pagCadastro/cadCurso.php" class="btn btn-default">	
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Cadastrar Curso</p>
				</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-3">
		<a href="listaCurso.php" class="btn btn-default">	
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Listar Cursos</p>
				</div>
		</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>