<?php include_once 'lock.php';
if(empty($_GET['funcionario_id']))
{
	header('location:index.php?msg=invalidid');
}
else
{
	$funcionario_id = $_GET['funcionario_id'];

	include_once 'DAO.php';
	deletar_funcionario($funcionario_id);
}

?>