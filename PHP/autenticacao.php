<?php
	include "conexao.php"; //inclui o banco de dados.
?>
<html>
<head>
	<script type="text/javascript">
	function sucesso() {
		setTimeout("window.location='painel.php'");	//em caso de sucesso redireciona para o painel.
	}
	function falha() {
		setTimeout("window.location='index.php'",5000);	//em caso de falha redireciona para a página de login.
	}
	</script>
<title>ArrayEnterprises</title>
</head>
<body>
</body>
</html>
<?php
	$email=$_POST['email']; //pega o email digitado no formulário.
	$senha=md5($_POST['senha']); //pega a senha digitada no formulário.
	$sql = mysqli_query($conecta, "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'"); //compara dados do login com banco de dados.
	$row = mysqli_num_rows($sql); //faz a contagem para usar na condição.
	if ($row > 0) { //condição que verifica se os dados de login estão corretos.
		session_start();
		$_SESSION['email']=$email; //coloca o email do usuário na sessão.
		$_SESSION['senha']=$senha; //coloca a senha do usuário na sessão.
		echo "<script>sucesso()</script>"; //chama o script acima em caso de sucesso.
	} else {
		echo "<center><h1><font color='#09f'>Login ou senha incorretos. Aguarde para tentar novamente.</font></h1></center>";
		echo "<script>falha()</script>"; //chama o script acima em caso de falha.
	}
?>