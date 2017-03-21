<?php
	include "conexao.php"; //inclui a conexão com o banco de dados.

	$nome=$_POST['nome']; //pega o nome do formulário da página anterior.
	$email=$_POST['email']; //pega o email do formulário da página anterior.
	$senha=$_POST['senha']; //pega a senha do formulário da página anterior.
	
	mysqli_query($conecta, "INSERT INTO cadastro(nome, email, senha) VALUES('$nome','$email','$senha')"); //envia os dados acima para o banco de dados.
	
	session_start();
	$_SESSION['nome']=$nome; //coloca o nome do usuário na sessão.

	echo "<center><h1><font color='#09f'>Seu cadastro foi efetuado com sucesso.</font></h1></center><br />";
	echo "<center><h1><font color='#09f'>Clique <a href='index.php'>aqui</a> para se logar.</font></center></h1>";


?>