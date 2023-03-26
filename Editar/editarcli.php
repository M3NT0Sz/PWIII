<?php
    $id = mysqli_connect("localhost", "root", "", "clientes");
	
	$cod = $_POST['codigo'];
	$nome = $_POST['nome'];
	$fone = $_POST['fone'];
	$cpf = $_POST['cpf'];
	$dtnascimento = $_POST['dtnascimento'];
	
	$sql = "update clientes set cli_nome='$nome', cli_fone='$fone', cli_cpf='$cpf', cli_dtnascimento='$dtnascimento' where cli_cod='$cod'";		
	mysqli_query($id, $sql);
	mysqli_close($id);
	
	header("location:../Consultas/consultaclientes.php");
?>