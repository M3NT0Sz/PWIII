<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/relatorios.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>

<body>
    <div class="container">
        <div class="tabela">
            <h2>Relatório de Clientes</h2>
            <div class="tamanho">
                <h4><?php
                    $id = mysqli_connect("localhost", "root", "", "clientes");

                    $sql = "SELECT * FROM vendedor";
                    $resultado = mysqli_query($id, $sql);
                    while ($obj = mysqli_fetch_array($resultado)) {
                        $cod = $obj[0];
                        $nome = $obj[1];
                        $endereco = $obj[3];
                        $dtnasc = $obj[4];
                    ?>
                        <div class="letras">
                            <?php
                            echo "<br>Codigo: $cod";
                            echo "<br>Nome: $nome";
                            echo "<br>Endereço: $endereco";
                            echo "<br>Data de Nascimento: $dtnasc";
                            ?>
                        </div>
                    <?php
                        echo "<hr>";
                    }
                    ?>
                </h4>
            </div>
            <div class="botoes">
                <a href="../principal.html"><button class="button-6" type="button" role="button">Voltar</button></a>
            </div>
        </div>
    </div>
</body>

</html>