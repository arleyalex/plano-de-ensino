<?php

/** O nome do banco de dados*/
define ('DB_NAME', 'sipebd');

/** Usuário do banco de dados MySQL */
define ('DB_USER', 'sipe');

/** Senha do banco de dados MySQL */
define ('DB_PASSWORD', 'senac123');

/** nome do host do MySQL */
define ('DB_HOST', 'localhost');

/** caminho absoluto para a pasta do sistema **/
/**if (!define('ABSPATH'))**/
	define ('ABSPATH', dirname('/xampp/htdocs/finalproject/index').'/');

/** caminho no server para o sistema **/
/**if ( !define ('BASEURL') )**/
	define ('BASEURL', '/finalproject/');

/** caminho do arquivo de banco de dados **/
/**if ( !define ('DBAPI') )*/
	define ('DBAPI', ABSPATH . '/inc/database.php');

/** caminhos dos templates de header e footer **/
define ('HEADER_TEMPLATE', ABSPATH . '/inc/header.php');
define ('FOOTER_TEMPLATE', ABSPATH . '/inc/footer.php');
?>