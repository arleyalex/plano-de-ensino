<?php
	$mensagem['10'] = "Usuario cadastrado com sucesso";
	$mensagem['30'] = "Usuario já cadastrado";
	
	$aviso = $_GET['aviso'];
?>
<html>

<head>
	<meta charset="utf-8"/>
	
</head>

<body>
	<h2>  <?php echo $mensagem[$aviso]; ?>    </h2>
	<a href="index.html">Voltar para página principal</a> <br/>
</body>
</html>
