<?php
	include "conexao.php"; //inclui conexão com banco de dados.

	$comentario=$_POST['comentario']; //guarda na variável o texto digitado na página anterior.
	session_start();
	$email=$_SESSION['email']; //envia o email do usuário logado para a variável.
	$senha=$_SESSION['senha']; //envia a senha do usuário logado para a variável.
	$nome=$_SESSION['nome']; //envia o nome do usuário logado para a variável.
	date_default_timezone_set('America/Sao_Paulo'); //declara a data padrão de SP.
	$data = date('d/m/Y - H:i'); //função para pegar data e hora.
	mysqli_query ($conecta, "INSERT INTO mostrar(nome, email, comentario, data) VALUES('$nome','$email','$comentario','$data')"); //inclui o comentário no banco de dados do usuário logado. 
	echo "<center><h1><font color='#09f'>Seu comentário foi adicionado com sucesso.</font></h1></center><br />";
	echo "<center><h1><font color='#09f'>Clique <a href='painel.php'>aqui</a> para ve-lo.</font></center></h1>";
?>