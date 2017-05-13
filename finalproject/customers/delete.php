<?php
    $BANCO = ("host=localhost dbname=sipedb port=5432 user=sipe password=senac123");
    $CONEXAO = pg_connect($BANCO);

if (!$CONEXAO) {
    echo 'erro banco de dados nao conectado';
} else {
	$SQL = 
	
	
pg_close($CONEXAO);
?>


<?php 
  require_once('functions.php'); 
  if (isset($_GET['id'])){
    delete($_GET['id']);
  } else {
    die("ERRO: ID não definido.");
  }
?>