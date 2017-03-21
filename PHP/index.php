<?php
	include "conexao.php"; //inclui a conexao com o banco de dados.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>ArrayEnterprises</title>
</head>
<body link="#09f">
<p>&nbsp;</p>
<div id="login">
  <div class="mensagem"> </div>
  <div class="formulario">
   <form name="loginForm" action="autenticacao.php" method="post">
    <label for="email">Email:</label> <input id="email" type="text" class="txt bradius" name="email" />
    <label for="senha">Senha:</label> <input id="senha" type="password" class="txt bradius" name="senha" /><br /><br />
    <input type="submit" class="bt bradius" value="Entrar"  />
    Ou então, <a href="cadastro.php">cadastre-se</a> agora mesmo.
   </form><br /><br />
  </div>
</div>
<?php
	$query = mysqli_query($conecta, "SELECT * FROM mostrar ORDER BY id desc"); //seleciona o banco de dados e coloca em ordem.
	$row = mysqli_num_rows($query); //faz a contagem para usar na condição.
	if ($row > 0) { //verifica se está ok.
		while ($line = mysqli_fetch_array($query)) {
			$nome = $line['nome'];
			$email = $line['email'];
			$comentario = $line['comentario'];
			$data = $line['data'];
			echo "<center><b><font color='#09f'>$nome</font></b></center><br />";
			echo "<center><font color='#09f'>$email</font></center><br />";
			echo "<center><i>$comentario</i></center><br />";
			echo "<center>$data</center><br /><hr />";	
		}
	} else {
		echo "<center><b><font color='#09f'>Ainda não existem comentários. Seja o primeiro a comentar!</font><b></center>";	
	} 
?>
</body>
</html>