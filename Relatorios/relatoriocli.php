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
        <form name="cadcli" method="post" action="../Gravar/gravarcli.php">
            <div class="tabela">
                <h2>Relatório de Clientes</h2>
                <div class="tamanho">
                <h4><?php
                    $id = mysqli_connect("localhost", "root", "", "clientes");

                    $sql = "SELECT * FROM clientes";
                    $resultado = mysqli_query($id, $sql);
                    while($obj = mysqli_fetch_array($resultado)){
                        $cod = $obj[0];
                        $nome = $obj[1];
                        $tel = $obj[3];
                        $cpf = $obj[4];
                        $dtnascimento = $obj[5];
                        ?>
                        <div class="letras">
                    <?php
                        echo "<br>Codigo: $cod";
                        echo "<br>Nome: $nome";
                        echo "<br>Telefone: $tel";
                        echo "<br>CPF: $cpf";
                        echo "<br>Data de Nascimento:$dtnascimento";
                        ?>
                        </div>
                        <?php
                        echo "<hr>";
                    }
                ?></h4>
                </div>
                <div class="botoes">
                    <a href="../principal.html"><button class="button-6" type="button" role="button">Voltar</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>