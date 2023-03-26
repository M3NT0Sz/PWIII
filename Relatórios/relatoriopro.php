<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/relatorios.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <div class="container">
        <form name="cadcli" method="post" action="gravarcli.php">
            <div class="tabela">
                <h2>Relatório de Clientes</h2>
                <div class="tamanho">
                <h4><?php
                    $id = mysqli_connect("localhost", "root", "", "clientes");

                    $sql = "SELECT * FROM produtos";
                    $resultado = mysqli_query($id, $sql);
                    while($obj = mysqli_fetch_array($resultado)){
                        $cod = $obj[0];
                        $descricao = $obj[1];
                        $quantidade = $obj[2];
                        $preco = $obj[3];
                        $dtvalidade = $obj[4];
                    ?>
                    <div class="letras">
                        <?php
                        echo "<br>Codigo: $cod";
                        echo "<br>Descrição: $descricao";
                        echo "<br>Quantidade: $quantidade";
                        echo "<br>Preço: R$$preco";
                        echo "<br>Data de Validade: $dtvalidade";
                        ?>
                        </div>
                        <?php
                        echo "<hr>";
                    }
                ?></h4>
                </div>
                <div class="botoes">
                    <a href="principal.html"><button class="button-6" type="button" role="button">Voltar</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>