<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>ID - Funcionário</title>
</head>
<body class="container-fluid">


	<h1>ID - Funcionário</h1>
	<h2>Página de Acesso</h2>

	<form action="validacao.php" method="post">
		
		<p>
			<label>Login:</label><br>
			<input type="text" name="username" maxlength="50">
		</p>

		<p>
			<label>Senha:</label><br>
			<input type="password" name="password" maxlength="20">
		</p>

		<p>
			<button type="submit" class="btn btn-info">Acessar</button> 
			| <a href="cadastrar_user.php">Novo Usuário</a>
		</p>

	</form>

</body>
</html>