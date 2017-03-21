<?php
	include "conexao.php"; //inclui a conexão com o banco de dados.

	session_start();
	$email=$_SESSION['email']; //pega o email da sessão atual.
	$senha=$_SESSION['senha']; //pega a senha da sessão atual.

	$updatenome=$_POST['nome']; //pega o nome do formulário da página anterior.
	$updateemail=$_POST['email']; //pega o email do formulário da página anterior.
	$updatesenha=$_POST['senha']; //pega a senha do formulário da página anterior.

	mysqli_query($conecta, "UPDATE cadastro SET nome = '$updatenome', email = '$updateemail', senha = '$updatesenha' WHERE (email = '$email' and senha = '$senha')"); //altera os dados no banco de dados.
?>
<html>
<head>
	<script type="text/javascript">
	function sucesso() {
		setTimeout("window.location='index.php'",5000);	//em caso de sucesso redireciona para o index.
	}
	</script>
<title>ArrayEnterprises</title>
</head>
<body>
<?php
	echo "<center><h1><font color='#09f'>Seu cadastro foi alterado com sucesso com sucesso. Aguarde para continuar.</font></h1></center><br />";
	echo "<script>sucesso()</script>";
?>
</body>
</html>