<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/relatorios.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="tabela">
            <form name="consultar" method="post" action="">
                <div class="meio">
                    <h1>Consulta Clientes</h1>
                </div>
                <div class="registro">
                    <h3>Produto:<input type="text" name="nome"></h3>
                    <input class="button-6" type="submit" role="button" name="consultar" value="Consultar">
                </div>
            </form>
            <div class="tamanho">
                <?php
                error_reporting(0);
                $id = mysqli_connect("localhost", "root", "", "clientes");
                if ($_POST['consultar']) {
                    $nome = $_POST['nome'];
                    $sql = "SELECT * FROM produtos WHERE pro_nome like '%$nome%'";
                } else {
                    $sql = "SELECT * FROM produtos";
                }
                $resultado = mysqli_query($id, $sql);
                while ($obj = mysqli_fetch_array($resultado)) {
                    $cod = $obj[0];
                    $nome = $obj[1];
                    $quantidade = $obj[2];
                    $preco = $obj[3];
                    $dtvalidade = $obj[4];
                ?>
                    <div class="letras">
                        <?php
                        echo "<br>Codigo: $cod";
                        echo "<br>Produto: $nome";
                        echo "<br>Quantidade: $quantidade";
                        echo "<br>Preço: $preco";
                        echo "<br>Data de Validade: $dtvalidade";
                        echo "<br><form name=consulta method=post action=../Excluir/excluirprodutos.php>";
                        echo "<input type=hidden name=cod value=$cod>";
                        echo "<div style=flex-direction:row;display:flex;>";
                        echo "<button class=button-6 type=submit role=button>Excluir</button>";
                        echo "</form>";
                        echo "<form name=altera method=post action=../Editar/editarprodutos.php>";
                        echo " <input type=hidden name=cod value=$cod> ";
                        echo " <input type=hidden name=nome value=$nome> ";
                        echo " <input type=hidden name=quantidade value=$quantidade> ";
                        echo " <input type=hidden name=preco value=$preco> ";
                        Echo " <input type=hidden name=dtvalidade value=$dtvalidade> ";
                        echo " <input class=button-6 name=botao type=submit role=button value=Editar>";
                        echo "</div>";
                        echo "</form>";
                        ?>
                    </div>
                <?php
                    echo "<hr>";
                }
                ?>
            </div>
            <a href="../principal.html"><button class="button-6" type="button" role="button">Voltar</button></a>
        </div>
    </div>
</body>

</html>