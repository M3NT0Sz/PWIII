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
    <title>Clientes</title>
</head>

<body>
    <div class="container">
        <div class="tabela">
            <h1>Seja bem vindo:
                <?php
                if (isset($_SESSION['login'])) {
                    echo $_SESSION['login'];
                }
                ?>
            </h1>
            <hr color="black" width="100%">
            <h1>Compras</h1>
            <a href="comprar.php"><button class="button-6 bt_arrumar" role="button">Comprar</button></a>
            <h1>Cadastros</h1>
            <a href="Cadastros/cadastrocli.php"><button class="button-6 bt_arrumar" role="button">Cadastro de
                    Clientes</button></a>
            <h1>Relatórios</h1>
            <a href="Relatorios/relatoriocli.php"><button class="button-6 bt_arrumar" role="button">Relatório de
                    Clientes</button></a>
            <h1>Consultas</h1>
            <a href="Consultas/consultaclientes.php"><button class="button-6 bt_arrumar" role="button">Consulta de
                    Clientes</button></a>
            <hr color="black" width="100%">
            <a href="sair.php"><button class="button-6 bt_arrumar" role="button">Sair</button></a>
        </div>
    </div>
</body>

</html>