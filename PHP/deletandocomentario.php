<?php
	include "conexao.php"; //inclui conexão com banco de dados.
	
	$id=$_GET['id'];

	mysqli_query ($conecta, "DELETE FROM mostrar WHERE id='$id'"); //deleta o comentário no banco de dados
	echo "<center><h1><font color='#09f'>Seu comentário foi deletado com sucesso.</font></h1></center><br />";
	echo "<center><h1><font color='#09f'>Clique <a href='painel.php'>aqui</a> para ve-lo.</font></center></h1>";
?>