<?php
	include "conexao.php"; //inclui conexão com banco de dados.
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>ArrayEnterprises</title>
</head>
<body>
<?php echo "<center><h1><font color='#09f'>Edite seus dados!</font></h1></center>" ?>
<div id="login">
 <div class="mensagem"> </div>
 <div class="formulario">
    <form action="editando.php" method="post">
     <label for="email">Nome:</label> <input id="nome" type="text" class="txt bradius" name="nome" />
     <label for="senha">Email:</label> <input id="email" type="text" class="txt bradius" name="email" />
     <label for="email">Senha:</label> <input id="senha" type="password" class="txt bradius" name="senha" />
     <br /><br />
     <input type="submit" class="bt bradius" value="Editar meus dados"  /><br />
    </form>
   </div>
</div>
<?php
	session_start();
	if(!isset($_SESSION['email']) or !isset($_SESSION['senha'])) { //verifica se há alguma sessão iniciada.
		header("Location: index.php"); //redirectiona para o index caso não tenha nenhuma sessão iniciada.
		exit; //aborta.
	} else { //autoriza o acesso ao painel caso a sessão esteja iniciada.
		echo "<h1><center><font color='#09f'>Escreva um comentário!</font></center></h1>";
	}
?>
<div id="formulario">
  <div class="formulario">
  <form name="comentario" action="cadastrandocomentario.php" method="post">
  <label for="comentario"></label>
  <textarea name="comentario" cols="50" rows="10" class="txt2 bradius" id="comentario"></textarea><br /><br />
  <input type="submit" class="bt bradius" value="Enviar comentário"  />
  </form>
</div>
<?php echo "<br /><center><h1><font color='#09f'><a href='logout.php'>Sair</a></font></h1></center>" ?>
<br />
<div id="comentarios">
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
</div>
</body>
</html>