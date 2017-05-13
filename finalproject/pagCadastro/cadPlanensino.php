<?php
    $BANCO = ("host=localhost dbname=sipedb port=5432 user=sipe password=senac123");
    $CONEXAO = pg_connect($BANCO);

if (!$CONEXAO) {
    echo 'Erro, banco de dados nao conectado';
} else {
	$SQL = 
	
	
pg_close($CONEXAO);
?>




<h1>Cadastro de Plano de Ensino</h1>
<hr />
<div class="row">
<label for="sel1">Select list (select one):</label>
      <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
</div>
<?php include(FOOTER_TEMPLATE); ?>