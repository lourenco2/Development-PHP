<!DOCTYPE html>
<html lang="pt-br">
<head>
 	<meta charset="utf-8">
	<title>Cadastro de Vendas</title>
</head>
<body>
	<h1>Cadastro de Vendas - Ínicio</h1> 
	<form action="Index.php" method="post">
	<a href="index.php">Reiniciar</a><br>
	<br>
		<label>Forma de Pagamento:</label><br>
		
		<br>
		<select name="opcao">
			<option value="A vista em dinheiro">1) A vista em dinheiro - 5% de desconto </option>
			<option value="A vista no débito">2) A vista no débito sem desconto</option>
			<option value="Parcelado em até 3x">3) Parcelado em até 3x no cartão com 2% de juros</option>
			<option value="Parcelado em até 5x">4) Parcelado em até 5x no cartão com 5% de juros</option>
		</select>

		<p><button type="submit" name="Começar">Iniciar</button></p>

	</form>

	<form action="Index.php" method="post">
	
	<?php

	if(isset($_POST['Começar']))
	{
		$opcao = $_POST['opcao'];
		
		echo "<h3>Pagamento Selecionado: $opcao</h3>";

	?>

			<label>Categoria da Venda:</label><br>
			<br>
			<select name="categoria">
				<option value="Eletrônicos">1) Eletrônicos</option>
				<option value="Vestuário">2) Vestuário</option>
				<option value="Alimentos">3) Alimentos</option>
			</select>

			<p><button type="submit" name="Iniciar">Começar a venda</button></p>
			
	</form>
	<?php

	}

	?>

	<form>

	<?php

	if(isset($_POST['categoria']))
	{
		$categoria = $_POST['categoria'];
		
		echo "<h3>Categoria de venda selecionada: $categoria</h3>";

	?>

	</form>

	<form action="venda.php" method="post">

		<h4>Formulário de Venda</h4>
		<p>
			<label>Nome do Cliente:</label><br>
			<input type="text" name="nome">
		</p>

		<p>
			<label>CPF do cliente:</label><br>
			<input type="text" name="cpf">
		</p>

		<p>
			<label>Item:</label><br>
			<input type="item" name="item">
		</p>

		<p>
			<label>Quantidade:</label><br>
			<input type="number" name="QTD">
		</p>
		
		<p>
			<label>Valor Unitário:</label><br>
			<input type="number" name="valor">
		</p>

		<p>
			<button type="submit" name="enviar">Calcular Venda!</button>
		</p>
		
	</form>
	
	<?php

	}

	?>
 

</body>
</html>