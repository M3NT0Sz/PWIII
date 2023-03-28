<?php
    $id = mysqli_connect("localhost", "root", "", "clientes");
	
	$cod = $_POST['codigo'];
	$nome = $_POST['nome'];
	$produto = $_POST['produto'];
	$quantidade = $_POST['quantidade'];
	$preco = $_POST['preco'];
	$dtvalidade = $_POST['dtvalidade'];
	
	$sql = "update produtos set pro_vendedor='$nome', pro_descricao='$produto', pro_quantidade='$quantidade', pro_preco='$preco', pro_dtvalidade='$dtvalidade' where pro_cod='$cod'";		
	mysqli_query($id, $sql);
	mysqli_close($id);
	
	header("location:../Consultas/consultaprodutos.php");
?>