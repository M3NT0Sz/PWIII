<?php
    $id = mysqli_connect("localhost", "root", "", "clientes");
	
	$cod = $_POST['codigo'];
	$nome = $_POST['nome'];
	$quantidade = $_POST['quantidade'];
	$preco = $_POST['preco'];
	$dtvalidade = $_POST['dtvalidade'];
	
	$sql = "update produtos set pro_descricao='$nome', pro_quantidade='$quantidade', pro_preco='$preco', pro_dtvalidade='$dtvalidade' where pro_cod='$cod'";		
	mysqli_query($id, $sql);
	mysqli_close($id);
	
	header("location:../Consultas/consultaprodutos.php");
?>