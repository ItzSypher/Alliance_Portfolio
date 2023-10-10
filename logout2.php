<meta charset="UTF-8">
<html>

<head>
<title>Hello!</title>
</head>

<body>

<?php
	session_start(); // Inicia a sess�o
	session_destroy(); // Destr�i a sess�o limpando todos os valores salvos
	header("Location: home.html");
	exit;// Redireciona o visitante
?>

Volta
<a href="home.html">Sair</a>
</body>
</html>
