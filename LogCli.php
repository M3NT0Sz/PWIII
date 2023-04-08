<?php
session_start();
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login Clientes</title>
</head>

<body>
    <div class="container">
        <form action="Entrar/entrarcli.php" method="post">
            <div class="tabela">
                <h3><?php
                    if (isset($_SESSION['erro'])) {
                        echo $_SESSION['erro'];
                        unset ($_SESSION['erro']);
                    }
                    ?></h3>
                <h1>Login Clientes</h1>
                <div class="registro">
                    <h3>Nome: <input type="text" name="nome"></h3>
                </div>
                <div class="registro">
                    <h3>Senha: <input type="password" name="senha"></h3>
                </div>
                <div class="registro">
                    <button class="button-6" role="button">Entrar</button>
                    <a href="Cadastros/cadastrocli.php"><button class="button-6" type="button" role="button">Cadastrar</button></a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>