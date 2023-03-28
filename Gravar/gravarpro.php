<?php
    $id = mysqli_connect("localhost", "root", "", "clientes");
    //$con = mysqli_select_db("clientes", $id);

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $dtvalidade = $_POST['dtvalidade'];

    $sql = "insert into produtos (pro_vendedor, pro_descricao, pro_quantidade, pro_preco, pro_dtvalidade) values ('$nome', '$descricao', '$quantidade', '$preco', '$dtvalidade')";

    mysqli_query($id ,$sql);
    mysqli_close($id);

    header("location:../vendedor.php");
?>