<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"crossorigin="anonymous">
	<title>ID - Funcionário</title>
</head>
<body class="container-fluid">

	<h1>ID - Funcionário</h1>
	<h4>Página para criação de novo utente</h4>
	<h4>Se possuir cadastro, clique <a href="login.php">aqui</a> para acessar!</h4>

	<?php
	if (isset($_POST['cadastrar']))
	{
		include_once 'func.php';
		verificar_cad_user();
	}
	?>
	<p><h2>Novo Usuário:</h2></p>

	<form action="cadastrar_user.php" method="post">
		<p>
			<label>Login:</label><br>
			<input type="text" name="username" maxlength="100">
		</p>
		<p>
			<label>Senha:</label><br>
			<input type="text" name="password" maxlength="50">
		</p>
		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email" maxlength="50">
		</p>

		<button type="submit" name="cadastrar" class="btn btn-info">Criar Acesso</button>
	</form>
	

</body>
</html>