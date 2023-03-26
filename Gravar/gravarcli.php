<?php
    $id = mysqli_connect("localhost", "root", "", "clientes");
    //$con = mysqli_select_db("clientes", $id);

    $nome = $_POST['nome'];
    $fone = $_POST['fone'];
    $cpf = $_POST['cpf'];
    $dtnascimento = $_POST['dtnascimento'];

    $sql = "insert into clientes (cli_nome, cli_fone, cli_cpf, cli_dtnascimento) values ('$nome', '$fone', '$cpf', '$dtnascimento')";

    mysqli_query($id ,$sql);
    mysqli_close($id);

    header("location:principal.html");
?>