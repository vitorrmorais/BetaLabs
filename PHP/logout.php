<?php
	session_start(); //inicia a sessão.
	session_destroy(); //encerra a sessão.
	header("Location: index.php"); //redireciona para o index.
?>