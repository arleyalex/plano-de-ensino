<?php
    $BANCO = ("host=localhost dbname=sipedb port=5432 user=sipe password=senac123");
    $CONEXAO = pg_connect($BANCO);

if (!$CONEXAO) {
    echo 'Erro, banco de dados nao conectado!';
} else {
	$SQL = 
	
	
pg_close($CONEXAO);
?>
