<?php
    $id = mysqli_connect("localhost", "root", "", "clientes");
	
	$cod = $_POST['codigo'];
	$nome = $_POST['nome'];
	$senha = md5($_POST['senha']);
	$endereco = $_POST['endereco'];
	$dtnascimento = $_POST['dtnascimento'];
	
	$sql = "update vendedor set ven_nome='$nome', ven_senha='$senha', ven_endereco='$endereco', ven_dtnasc='$dtnascimento' where ven_cod='$cod'";		
	mysqli_query($id, $sql);
	mysqli_close($id);
	
	header("location:../Consultas/consultavendedor.php");
?>