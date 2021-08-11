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
		
		echo '<h3 class="alert alert-warning">Por gentileza, todos os campos devem ser preeenchidos</h3>';
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
				$texto = "Utente criado!";
				$classe = "alert alert-success";
				break;

			case 'caderro':
				$texto = "Houve algum problema, por gentileza tente novamente.";
				$classe = "alert alert-danger";
				break;

			case 'newuser':
				$texto = "Utente criado com exito!";
				$classe = "alert alert-success";
				break;

			case 'usererro':
				$texto = "Algo aconteceu na criação, tente novamente.";
				$classe = "alert alert-danger";
				break;

			case 'delok':
				$texto = "Usuário deletado com exito!";
				$classe = "alert alert-success";
				break;

			case 'delerro':
				$texto = "Erro ao deletar, tente novamente.";
				$classe = "alert alert-danger";
				break;

			case 'edtok':
				$texto = "Utente alterado com exito!";
				$classe = "alert alert-success";
				break;

			case 'edterro':
				$texto = "Erro ao editar. Tente novamente.";
				$classe = "alert alert-danger";
				break;
			
			case 'errobusca':
				$texto = "Funcionario não encontrado. <br> 
				Tente novamente.";
				$classe = "alert alert-warning";
				break;

			case 'invalidid':
				$texto = "Não é possivel carregar funcionário com ID selecionado. <br> 
				Tente novamente.";
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