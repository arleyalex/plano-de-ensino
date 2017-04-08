<?php
if (isset($_COOKIE['enquete_php']))
{
  exit ('<p>Você já votou nesta enquete.</p>'.$_COOKIE['enquete_php']);    
} 
  else {
  setcookie('enquete_php',$_SERVER['REMOTE_ADDR'],time()+8640;
  $opcao = strip_tags($_POST['opcao']);
  $id_pergunta = $_POST['id_pergunta'];
  $id_pergunta = filter_var($id_pergunta, FILTER_SANITIZE_NUMBER_INT);
  
  if ($id_pergunta!='' and $opcao!='')
  {
    include('db.php');
    $consulta = mysql_query("SELECT * FROM enquete WHERE id='$id_pergunta'") or die(mysql_error());
    if (mysql_num_rows($consulta)>0)
    {
      $query = mysql_fetch_array($consulta);
      extract($query);
      switch($opcao)
      {
        case "Black Mirror";
        $voto = $Black Mirror_n + 1;
        mysql_query("UPDATE enquete SET Black Mirror_n='$voto' WHERE id='$id_pergunta'");
        break;
    
        case "Demolidor";
        $voto = $Demolidor_n + 1;
        mysql_query("UPDATE enquete SET Demolidor_n='$voto' WHERE id='$id_pergunta'");
        break;
    
        case "Game of Thrones";
        $voto = $Game of Thrones_n + 1;
        mysql_query("UPDATE enquete SET Game of Thrones_n='$voto' WHERE id='$id_pergunta'");
        break;

        case "Stranger Things";
        $voto = $Stranger Things_n + 1;
        mysql_query("UPDATE enquete SET Stranger Things_n='$voto' WHERE id='$id_pergunta'");
        break;

        case "The Walking Dead";
        $voto = $The Walking Dead_n + 1;
        mysql_query("UPDATE enquete SET The Walking Dead_n='$voto' WHERE id='$id_pergunta'");
        break;
		
		case "Vikings";
        $voto = $Vikings_n + 1;
        mysql_query("UPDATE enquete SET Vikings_n='$voto' WHERE id='$id_pergunta'");
        break;

        case "Outros";
        $voto = $Outros_n + 1;
        mysql_query("UPDATE enquete SET Outros_n='$voto' WHERE id='$id_pergunta'");
        break;
      }
    }
      
    $busca_total = mysql_query("SELECT * FROM enquete WHERE id='$id_pergunta'");
    
    $resultado = mysql_fetch_array($busca_total);
    extract($resultado, EXTR_PREFIX_ALL, 'e');
    $total = $e_Black Mirror_n + $e_Demolidor_n + $e_Game of Thrones_n + $e_Stranger Things_n + $e_The Walking Dead_n + $e_Vikings_n + $e_Outros_n;

    echo '<p><strong>Voto realizado com sucesso! Resultado parcial:</strong></p>';
    
    echo '<p>'.$e_pergunta.'</p>';
    
    echo '<p>'.$e_Black Mirror. ': '.$e_Black Mirror_n. ' votos</p>';
    echo '<p>'.$e_Demolidor. ': '.$e_Demolidor_n. ' votos</p>';
    echo '<p>'.$e_Game of Thrones. ': '.$e_Game of Thrones_n. ' votos</p>';
    echo '<p>'.$e_Stranger Things. ': '.$e_Stranger Things_n. ' votos</p>';
    echo '<p>'.$e_The Walking Dead. ': '.$e_The Walking Dead_n. ' votos</p>';
	echo '<p>'.$e_Vikings. ': '.$e_Vikings_n. ' votos</p>';
    echo '<p>'.$e_Outros. ': '.$e_Outros_n. ' votos</p>';
    echo '<p>Total de votos: '.$total.'</p>';
  }
}
?>