<?php
session_start();
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <div class="container">
        <form name="cadpro" method="post" action="Gravar/gravarpro.php">
            <div class="tabela">
                <input type="hidden" name="nome" value="<?php
                if (isset($_SESSION['vendedor'])) {
                    echo $_SESSION['vendedor'];
                }
                ?>">
                <h1>Vender produtos</h1>
                <div class="registro">
                    <h3>Descrição:<input type="text" name="descricao"></h3>
                </div>
                <div class="registro">
                    <h3>Quantidade:<input type="text" name="quantidade"></h3>
                </div>
                <div class="registro">
                    <h3>Preço:<input type="text" name="preco"></h3>
                </div>
                <div class="registro">
                    <h3>Data de Validade:<input type="date" name="dtvalidade"></h3>
                </div>
                <div class="botoes">
                <button class="button-6" type="submit" role="button">Criar</button>
                <a href="vendedor.php"><button class="button-6" type="button" role="button">Voltar</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>