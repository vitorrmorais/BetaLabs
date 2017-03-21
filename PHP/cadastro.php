<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>ArrayEnterprises</title>
</head>
<body text="#09f">
<?php echo "<center><h1><font color='#09f'>Faça seu cadastro!</font></h1></center>" ?>
<div id="login">
  <div class="mensagem"> </div>
  <div class="formulario">
<form action="cadastrando.php" method="post">
    <label for="email">Nome:</label> <input id="nome" type="text" class="txt bradius" name="nome" />
    <label for="senha">Email:</label> <input id="email" type="text" class="txt bradius" name="email" />
    <label for="email">Senha:</label> <input id="senha" type="password" class="txt bradius" name="senha" />
    <br /><br />
    <input type="submit" class="bt bradius" value="Cadastrar"  />
</form>
  </div>
 </div>
</body>
</html>