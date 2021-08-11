<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Calculo de Venda</title>
</head>
<body>
	<h1>Cadastro de Vendas - Cálculo</h1><br>
	<a href="index.php">Início</a><br>

	<h2>Informações:</h2><br>

	<?php
		if(!empty($_POST['nome'])&&!empty($_POST['cpf'])&&!empty($_POST['item'])&&!empty($_POST['QTD'])&&!empty($_POST['valor']))
		{
		$nome=$_POST['nome'];
		$cpf=$_POST['cpf'];
		$item=$_POST['item'];
		$QTD=$_POST['QTD'];
		$valor=$_POST['valor'];
		$total=$QTD*$valor;
		$moeda="R$";
		$opcao = $_POST['opcao'];
		$total=number_format($total, '2', '.', '' );
		if ($opcao== 'A vista em dinheiro' &&!empty ($_POST['cpf']))
			$total=0.95*(0.98);
		elseif ($opcao== 'A vista no débito') 
			$total=$total;
		elseif ($opcao== 'Parcelado em até 3x')
			$total=$total*=1.02;
		elseif ($opcao== 'Parcelado em até 5x')
			$total=$total*=1.05;


		echo "<h4>Cliente: $nome</h4><br>";
		echo "<h4>CPF: $cpf</h4><br>";
		echo "<h4>Item: $item</h4><br>";
		echo "<h4>Quantidade: $QTD</h4><br>";
		echo "<h4>Valor total da compra:$moeda$total</h4><br>";
		}
	?>

</body>
</html>