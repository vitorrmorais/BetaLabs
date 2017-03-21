<?php
	include "conexao.php"; //inclui conexão com banco de dados
	$id=$_GET['id'];

	$comentario=$_POST['comentario']; //guarda na variável o texto digitado na página anterior.
	date_default_timezone_set('America/Sao_Paulo'); //declara a data padrão de SP.
	$data = date('d/m/Y - H:i'); //função para pegar data e hora.
	mysqli_query ($conecta, "UPDATE mostrar SET comentario = '$comentario', data = '$data' WHERE id = '$id'"); //inclui o comentário no banco de dados do usuário logado.
	echo "<center><h1><font color='#09f'>Seu comentário foi alterado com sucesso.</font></h1></center><br />";
	echo "<center><h1><font color='#09f'>Clique <a href='painel.php'>aqui</a> para ve-lo.</font></center></h1>";
?>