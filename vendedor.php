<?php
session_start();
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricipal</title>
</head>

<body>
    <div class="container">
        <div class="tabela">
            <h1>Seja bem vindo: <?php
                if (isset($_SESSION['vendedor'])) {
                    echo $_SESSION['vendedor'];
                }
                ?></h1>
            <hr color="black" width="100%">
            <h1>Vender</h1>
            <a href="vender.php"><button class="button-6 bt_arrumar" role="button">Vender</button></a>
            <h1>Cadastros</h1>
            <a href="Cadastros/cadastropro.php"><button class="button-6 bt_arrumar" role="button">Cadastro de
                    Produtos</button></a>
            <a href="Cadastros/cadastroven.php"><button class="button-6 bt_arrumar" role="button">Cadastro de
                    Vendedor</button></a>
            <h1>Relatórios</h1>
            <a href="Relatorios/relatoriopro.php"><button class="button-6 bt_arrumar" role="button">Relatório de
                    Produtos</button></a>
            <a href="Relatorios/relatorioven.php"><button class="button-6 bt_arrumar" role="button">Relatório de
                    Vendedor</button></a>
            <h1>Consultas</h1>
            <a href="Consultas/consultaprodutos.php"><button class="button-6 bt_arrumar" role="button">Consulta de
                    Produtos</button></a>
            <a href="Consultas/consultavendedor.php"><button class="button-6 bt_arrumar" role="button">Consulta de
                    Vendedor</button></a>
            <hr color="black" width="100%">
            <a href="sair.php"><button class="button-6 bt_arrumar" role="button">Sair</button></a>
        </div>
    </div>
</body>

</html>