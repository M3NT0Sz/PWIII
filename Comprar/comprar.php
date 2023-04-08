<?php
session_start();
include_once("../conexao.php");
if ($_POST['botao']) {
    $cod = $_POST['cod'];
    $nome = $_POST['nome'];
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $dtvalidade = $_POST['dtvalidade'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>

<body>
    <div class="container">
        <div class="tabela">
            <h1>É isso mesmo que voce deseja?</h1>
            <div class="registro">
                <form action="adicionarcarrinho.php" method="post">
                    <div class="letras">
                        <?php
                        echo "<br>Codigo: $cod";
                        echo "<br>Vendedor: $nome";
                        echo "<br>Produto: $produto";
                        echo "<br>Estoque: $quantidade";
                        echo "<br>Quantidade:<input type=number name=quantcomp>";
                        echo "<br>Preço: $preco";
                        echo "<br>Data de Validade: $dtvalidade";
                        echo " <input type=hidden name=cod value=$cod> ";
                        echo " <input type=hidden name=nome value=$nome> ";
                        echo " <input type=hidden name=produto value=$produto> ";
                        echo " <input type=hidden name=quantidade value=$quantidade> ";
                        echo " <input type=hidden name=preco value=$preco> ";
                        echo " <input type=hidden name=dtvalidade value=$dtvalidade> ";
                        ?>
                        </h3>
                    </div>
                    <div class="botoes">
                        <button class="button-6" type="submit" role="button">Adicionar ao carrinho</button>
                        <a href="../comprar.php"><button class="button-6" type="button" role="button">Voltar</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>