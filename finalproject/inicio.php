<?php require_once 'config.php'; ?> 

<?php require_once DBAPI; ?>

<?php include( HEADER_TEMPLATE ); ?>

<h1 align="center">SiPEWeb</h1>
<hr />
<div class="row col-md-offset-4">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="disciplina.php" class="btn btn-default">	
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Disciplina</p>
				</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="curso.php" class="btn btn-default">	
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Curso</p>
				</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="usuario.php" class="btn btn-default">	
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Usuario</p>
				</div>
		</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>