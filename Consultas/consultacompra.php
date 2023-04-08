<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/relatorios.css">
    <title>Consulta Compras</title>
</head>

<body>
    <div class="container">
        <div class="tabela">
            <form name="consultar" method="post" action="">
                <div class="meio">
                    <h1>Consulta Compras</h1>
                </div>
                <div class="registro">
                    <h3>Nome:<input type="text" name="nome"></h3>
                    <input class="button-6" type="submit" role="button" name="consultar" value="Consultar">
                </div>
            </form>
            <div class="tamanho">
                <?php
                error_reporting(0);
                $id = mysqli_connect("localhost", "root", "", "clientes");
                if ($_POST['consultar']) {
                    $nome = $_POST['nome'];
                    $sql = "SELECT * FROM compra WHERE com_produto like '%$nome%'";
                } else {
                    $sql = "SELECT * FROM compra";
                }
                $resultado = mysqli_query($id, $sql);
                while ($obj = mysqli_fetch_array($resultado)) {
                    $cod = $obj[0];
                    $vendedor = $obj[1];
                    $comprador = $obj[2];
                    $produto = $obj[3];
                    $quantidade = $obj[4];
                    $preco = $obj[5];
                    $data = $obj[6];
                ?>
                    <div class="letras">
                        <?php
                        echo "<br>Codigo de compra: $cod";
                        echo "<br>Vendedor: $vendedor";
                        echo "<br>Comprador: $comprador";
                        echo "<br>Produto: $produto";
                        echo "<br>Quantidade: $quantidade";
                        echo "<br>Preço: R$$preco";
                        echo "<br>Data de compra: $data";
                        echo "<br><form name=consulta method=post action=../Excluir/excluircompra.php>";
                        echo "<input type=hidden name=cod value=$cod>";
                        echo "<div style=flex-direction:row;display:flex;>";
                        echo "<button class=button-6 type=submit role=button>Excluir</button>";
                        echo "</form>";
                        echo "<form name=altera method=post action=../Editar/editarcompra.php>";
                        echo " <input type=hidden name=cod value=$cod> ";
                        echo " <input type=hidden name=vendedor value=$vendedor> ";
                        echo " <input type=hidden name=comprador value=$comprador> ";
                        echo " <input type=hidden name=produto value=$produto> ";
                        echo " <input type=hidden name=quantidade value=$quantidade> ";
                        echo " <input type=hidden name=preco value=$preco> ";
                        echo " <input type=hidden name=data value=$data> ";
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