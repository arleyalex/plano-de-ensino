<?php
	$strConexao = "host=127.0.0.1 dbname=sipedb user=postgres password=root";
	$con = pg_connect($strConexao);

	if ($con){

		$sql = sprintf("SELECT * FROM usuario WHERE nome = '%s'",  $_GET['nome'] );
		$resultado = pg_query($con, $sql);
		$linhas = pg_num_rows($resultado);

		if ($linhas == 0){

			$sqlInsercao = "INSERT INTO usuario(nome, login, senha, sexo, nivel) "
					.            " VALUES ('%s','%s','%s','%s',%s)";

			$sql = sprintf($sqlInsercao, 	$_GET['nome'], 
							$_GET['login'], $_GET['senha'], 
							$_GET['sexo'], $_GET['nivel']);
			pg_query($con, $sql );
			header('Location: aviso.php?aviso=10');
			die();
		}else{
			header('Location: aviso.php?aviso=30');
			die();
			
		}
	}else{
		echo "Erro de conexão";
	}

	pg_close($con);
?>
<html>

<head>
	<meta charset="utf-8"/>
	
</head>
