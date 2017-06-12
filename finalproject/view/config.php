<?php
<<<<<<< HEAD
    $BANCO = ("host=localhost dbname=sipedb port=5432 user=postgres password=senac123");
    $CONEXAO = pg_connect($BANCO);
	
if (!$CONEXAO) {
    echo 'Erro, banco de dados nao conectado';
} else {
	echo 'Conexao ok';
pg_close($CONEXAO);
}
=======
$BANCO = "host=localhost dbname=sipedb user=sipe password=senac123";
$CONEXAO = pg_connect($BANCO);
>>>>>>> 53061dbd3c43ff07638e29410ed0a64ddac18cb0


/** caminho absoluto para a pasta do sistema **/
/**if (!define('ABSPATH'))*/
	define ('ABSPATH', dirname('/wamp64/www/finalproject/index').'/');

/** caminho no server para o sistema **/
	/**if ( !define ('BASEURL') )*/
	define ('BASEURL', '/finalproject/');
	
/** caminho do arquivo de banco de dados **/
	/**if ( !define ('DBAPI') )*/
	define ('DBAPI', ABSPATH . '/inc/database.php');


/** caminhos dos templates de header e footer **/
define ('HEADER_TEMPLATE', ABSPATH . '/inc/header.php');
define ('FOOTER_TEMPLATE', ABSPATH . '/inc/footer.php');
?>
