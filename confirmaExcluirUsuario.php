<?php

session_start();

$cod = $_GET['id'];


include_once('conexao.php');
	try 
	{
		   
		$delete = $conn->prepare("DELETE FROM usuario WHERE codigo=$cod");
		$delete->execute();
		echo "<h1>Usuario excluido com sucesso</h1>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>
<button onclick="window.location.href='funcionarioUsuario.php'">Voltar</button>