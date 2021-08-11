<?php  

include_once 'conn.php';

function inserir_funcionario($funcionario) 
{
	global $conn; 


	$values = "('".$funcionario['nome']."', ".
	"'".$funcionario['cargo']."', ".
	"'".$funcionario['email']."')";


	$sql = "INSERT INTO funcionario_tb (nome, cargo, email) VALUES $values";

	
	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		header('location:index.php?msg=cadok');
		
	}
	else
	{
		header('location:index.php?msg=caderro');
		//echo "$sql";

	}

}

function select_funcionario()
{

	global $conn; 
	
	$sql = "SELECT * FROM funcionario_tb"; 


	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{

		$info = '';

		$info .= '<table class="table table-hover table-sm">';
		$info .= 	'<tr>';
		$info .= 		'<th>Id</th>';
		$info .= 		'<th>Nome</th>';
		$info .= 		'<th>Cargo</th>';
		$info .= 		'<th>Email</th>';
		$info .= 		'<th>Ações</th>';
		$info .= 	'</tr>';

		while ($funcionario = mysqli_fetch_assoc($result)) 
		{ 
			
			$info .= '<tr>';
			foreach ($funcionario as $key => $value) 
			{ 
				
				if ($key == 'funcionario_id') 
				{ 
					$funcionario_id = $value;
				}
				
				$info .= "<td>". $value . "</td>";
			}

			$info .= '<td>';
			$info .= 	'<a href="editar.php?funcionario_id='.$funcionario_id.'" class="btn btn-warning">Editar</a>  ';
			$info .= 	'<a href="deletar.php?funcionario_id='.$funcionario_id.'" class="btn btn-danger" onclick="return confirm(\'Tem certeza que deseja excluir este funcionario?\')">Deletar</a>' ;
			$info .= '</td>';



			$info .= '</tr>';
		}
		$info .= '</table>';

		return $info; 

	}
	else 
	{
		return '<h3>Sem funcionarios cadastrados</h3>'; 
	}

}



function cadastrar_user($user)
{

	global $conn;

	$values = "('" .$user['username'] ."', " .
			   "'" .$user['password'] ."', " .
			   "'" .$user['email']    ."') ";

	$sql = "INSERT INTO users_tb (username, password, email) VALUES $values";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:login.php?msg=newuser');
	}
	else
	{
		header('location:login.php?msg=usererro');
	}

}


function deletar_funcionario($funcionario_id)
{
	global $conn;

	$sql = "DELETE FROM funcionario_tb WHERE funcionario_id = $funcionario_id";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:index.php?msg=delok');
	}
	else
	{
		//header('location:index.php?msg=delerro');
		echo "$sql";
	}

}

function buscar_funcionario($funcionario_id)
{
	global $conn;

	$sql = "SELECT * FROM funcionario_tb WHERE funcionario_id = $funcionario_id";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		$funcionario = mysqli_fetch_assoc($result);
	}
	else
	{
		$funcionario = '';
	}

	return $funcionario;
}

function editar_funcionario($edt)
{

	global $conn;

	$values = "nome = '" 	. $edt['nome'] 	. "', " .
			  "cargo = '" 	. $edt['cargo'] . "' , " .
			  "email = '" 	. $edt['email'] . "'  " ;

	$sql = "UPDATE funcionario_tb SET $values WHERE funcionario_id = " . $edt['funcionario_id'];

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:index.php?msg=edtok');
	}
	else
	{
		header('location:index.php?msg=edterro');
	}

}


?>