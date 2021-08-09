<?php  

include_once 'DAO.php';

function verificar_cad()
{
	if(empty($_POST['nome']) || empty($_POST['cargo'])|| empty($_POST['email']))
	{
		echo '<h3 class="alert alert-warning">Por favor, preencha todos os campos</h3>';
	}
	else 
	{
		
		$funcionario['nome'] 	= $_POST['nome'];
		$funcionario['cargo']	= $_POST['cargo'];
		$funcionario['email'] 	= $_POST['email'];


		inserir_funcionario($funcionario);
	}
}


function verificar_cad_user()
{
	
	if(empty($_POST['username']) || 
	   empty($_POST['password']) || 
	   empty($_POST['email']))
	{
		
		echo '<h3 class="alert alert-warning">Por favor, preencha todos os campos</h3>';
	}
	else
	{
		$user['username'] = $_POST['username'];
		$user['password'] = $_POST['password'];
		$user['email']	  = $_POST['email'];
		cadastrar_user($user);

	}
}


function exibir_funcionario()
{
	echo select_funcionario();
}


function verificar_msg()
{

	if(!empty($_GET['msg']))
	{
		$msg = $_GET['msg'];

		switch ($msg) 
		{
			case 'cadok':
				$texto = "Funcionario cadastrado com sucesso!";
				$classe = "alert alert-success";
				break;

			case 'caderro':
				$texto = "Erro ao cadastrar funcionario. Por favor, tente novamente.";
				$classe = "alert alert-danger";
				break;

			case 'newuser':
				$texto = "Usuário cadastrado com sucesso!";
				$classe = "alert alert-success";
				break;

			case 'usererro':
				$texto = "Erro ao cadastrár usuário. Por favor, tente novamente.";
				$classe = "alert alert-danger";
				break;

			case 'delok':
				$texto = "Funcionario excluído com com sucesso!";
				$classe = "alert alert-success";
				break;

			case 'delerro':
				$texto = "Erro ao excluir Funcionario. Por favor, tente novamente.";
				$classe = "alert alert-danger";
				break;

			case 'edtok':
				$texto = "Funcionario editado com com sucesso!";
				$classe = "alert alert-success";
				break;

			case 'edterro':
				$texto = "Erro ao editar Funcionario. Por favor, tente novamente.";
				$classe = "alert alert-danger";
				break;
			
			case 'errobusca':
				$texto = "ATENÇÃO: não foi possível encontrar Funcionario. <br> 
				Por favor, tente novamente.";
				$classe = "alert alert-warning";
				break;

			case 'invalidid':
				$texto = "ATENÇÃO: não foi possível carregar Funcionario com id informado. <br> 
				Por favor, tente novamente.";
				$classe = "alert alert-warning";
				break;

			default:
				$texto = '';
				$classe = '';
				break;
		}

		echo '<h3 class="'.$classe.'">'.$texto.'</h3>';


	}

}

?>