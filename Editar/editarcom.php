<?php
    $id = mysqli_connect("localhost", "root", "", "clientes");
	
	$cod = $_POST['codigo'];
	$vendedor = $_POST['vendedor'];
	$comprador = $_POST['comprador'];
	$produto = $_POST['produto'];
	$quantidade = $_POST['quantidade'];
	$preco = $_POST['preco'];
	$data = $_POST['data'];
	
	$sql = "update compra set com_vendedor='$vendedor', com_comprador='$comprador',com_produto='$produto', com_quantidade='$quantidade', com_preco_total='$preco', com_data='$data' where com_cod='$cod'";		
	mysqli_query($id, $sql);
	mysqli_close($id);
	
	header("location:../Consultas/consultacompra.php");
?>