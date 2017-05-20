<?php require_once '../view/config.php'; ?>

<?php include( HEADER_TEMPLATE ); ?>


<h1 align="center">SiPEWeb</h1>
<hr />
<div class="row col-md-offset-4">
	<div class="col-xs-6 col-sm-3 col-md-3">
		<a href="../pagCadastro/cadUsuario.php" class="btn btn-default">
			<div class="col-xs-12 text-center">
				<i class="fa fa-user fa-5x"></i>
			</div>
			<div class="col-xs-12 text-center">
				<p>Cadastrar Usuário</p>
			</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-3">
		<a href="../pagCadastro/cadProfessor.php" class="btn btn-default">
			<div class="col-xs-12 text-center">
				<i class="fa fa-user fa-5x"></i>
			</div>
			<div class="col-xs-12 text-center">
				<p>Cadastrar Professor</p>
			</div>
		</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>