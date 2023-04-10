<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/relatorios.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Compras</title>
</head>
<body>
    <div class="container">
        <form name="cadcli" method="post" action="../Gravar/gravarcli.php">
            <div class="tabela">
                <h2>Relatório de Compras</h2>
                <div class="tamanho">
                <h4><?php
                    $id = mysqli_connect("localhost", "root", "", "clientes");

                    $sql = "SELECT * FROM compra";
                    $resultado = mysqli_query($id, $sql);
                    while($obj = mysqli_fetch_array($resultado)){
                        $cod = $obj[0];
                        $vendedor = $obj[1];
                        $comprador = $obj[2];
                        $produto = $obj[3];
                        $quantidade = $obj[4];
                        $preco = $obj[5];
                        $preco_total = $obj[6];
                        $data = $obj[7];
                    ?>
                    <div class="letras">
                        <?php
                        echo "<br>Codigo de compra: $cod";
                        echo "<br>Vendedor: $vendedor";
                        echo "<br>Comprador: $comprador";
                        echo "<br>Quantidade: $quantidade";
                        echo "<br>Preço: R$$preco";
                        echo "<br>Preço Total: $preco_total";
                        echo "<br>Data de compra: $data";
                        ?>
                        </div>
                        <?php
                        echo "<hr>";
                    }
                ?></h4>
                </div>
                <div class="botoes">
                    <a href="../vendedor.php"><button class="button-6" type="button" role="button">Voltar</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>