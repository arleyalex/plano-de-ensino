<?php
    $BANCO = ("host=localhost dbname=sipedb port=5432 user=sipe password=senac123");
    $CONEXAO = pg_connect($BANCO);

if (!$CONEXAO) {
    echo 'Erro, banco de dados nao conectado!';
} else {
	$SQL = 
	
	
pg_close($CONEXAO);
?>



<h1 align="center">SiPEWeb - Plano de Ensino</h1>
<hr />
<div class="row">
<div class="col-md-offset-3">
		<div class="col-xs-6 col-sm-3 col-md-4">
		<a href="../pagCadastro/cadPlanensino.php" class="btn btn-default">	
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Cadastrar Plano de ensino</p>
				</div>
		</a>
	</div>
		<div class="col-xs-6 col-sm-3 col-md-4">
		<a href="listaPlanensino.php" class="btn btn-default">	
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Listar Planos de ensino</p>
				</div>
		</a>
	</div>
</div>
</div>
<?php include(FOOTER_TEMPLATE); ?>