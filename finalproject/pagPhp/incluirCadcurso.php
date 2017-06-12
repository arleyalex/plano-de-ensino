<head>
<meta charset="utf-8"/>

</head>
<?php

$BANCO = "host=localhost dbname=sipedb user=sipe password=senac123";
$CONEXAO = pg_connect ( $BANCO );

$sql = sprintf ( "SELECT * FROM curso" );
$resultado = pg_query ( $CONEXAO, $sql );

// Insersão no BD.

$sqlInsersao = "INSERT INTO curso (numero, nome, sigla, tipo)" . " VALUES ('%s','%s','%s','%s')";
$inserir = sprintf ( $sqlInsersao, $_GET ['numeroCurso'], $_GET ['nome'], $_GET ['sigla'], $_GET ['nivel']);

pg_query ( $CONEXAO, $inserir );

echo "Inserido";

pg_close ( $CONEXAO );

/*
 * header ( 'Location: aviso.php?aviso=10' );
 * die ();
 * }else{
 * header ( 'Location: aviso.php?aviso=30' );
 * die ();
 * }
 * }else{
 * echo "Erro!";
 * }
 */

?>
