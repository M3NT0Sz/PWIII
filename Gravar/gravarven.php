<?php
    $id = mysqli_connect("localhost", "root", "", "clientes");
    //$con = mysqli_select_db("clientes", $id);

    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);
    $endereco = $_POST['endereco'];
    $dtnasc = $_POST['dtnascimento'];

    $sql = "insert into vendedor (ven_nome, ven_senha, ven_endereco, ven_dtnasc) values ('$nome', '$senha', '$endereco', '$dtnasc')";

    mysqli_query($id ,$sql);
    mysqli_close($id);

    header("location:../principal.html");
?>