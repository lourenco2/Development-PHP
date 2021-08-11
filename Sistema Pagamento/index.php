<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cálculo de Pagamento</title>
</head>
<body>

<h1>Cálculo de Pagamento</h1>

	<form action="pagamento.php" method="post">
		
		<p>
			<label for="nome">Nome do funcionário:</label><br>
			<input type="text" name="nome" placeholder="Nome">
		</p>

		<p>
			<label for="valorh">Valor da hora trabalhada:</label><br>
			<input type="number" name="valorh" id="valorh" placeholder="Valor">

		</p>

		<p>
			<label for="horast">Horas trabalhadas:</label><br>
			<input type="number" name="horast" id="horast" placeholder="Horas">
		</p>

		<p>
			<button type="submit">Enviar</button>
			<button type="reset">Apagar</button>
		</p>
			

	</form>

</body>
</html>