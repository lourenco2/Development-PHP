<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cálculo de Pagamento</title>
</head>
<body>

<h1>Resultado</h1>

<a href="index.php">Início</a>

<?php

if (!empty($_POST['nome']) && !empty($_POST['valorh']) && !empty($_POST['horast']))

{		$nome=$_POST['nome'];
		$valorh = $_POST['valorh'];
		$horast = $_POST['horast'];
		$bruto = $valorh = $horast;
		$fgts = $bruto * 0.08;
}		
		
		
{
			$fgts = $bruto * 0.08;
}

		if ($bruto<=868.29) 
		{
			$INSS = $bruto * 0.08;
		}

		else if ($bruto >= 868.30 && $bruto <= 1447.14) 
		{
		$INSS = $bruto * 0.09;
		}
		else if ($bruto > 1447.15 && $bruto <= 2894.28)
		{
		$INSS = $bruto * 0.11;
		}
		else if  ($bruto > 2894.28)
	    {
	    $INSS = 318.37;
	    }

	    if ($bruto > 2743.25) 
	    {
	    $ir = $bruto * 0.27;
	    }

	    else if ($bruto >= 1372.82 && $bruto <= 2743.25)
	    {
	    $ir = $bruto * 0.15;
	    }

	    else if ($bruto <= 1372.81) 
	    {
	    $ir = 0;
	    }


	    echo "<p>Trabalhador:$nome</p>
	    	  <p>Total de Horas Trabalhadas: $horast</p>
	    	  <p>Valor da Hora: $valorh</p>
	    	  <p>Rendimentos Bruto: $bruto</p>
	    	  <p>INSS: $INSS</P>
	    	  <P>IR: $ir</p>
	    	  <p>FGTS: $fgts</p>";
	 
?>
</body>
</html>