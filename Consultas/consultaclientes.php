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
                    $sql = "SELECT * FROM clientes WHERE cli_nome like '%$nome%'";
                } else {
                    $sql = "SELECT * FROM clientes";
                }
                $resultado = mysqli_query($id, $sql);
                while ($obj = mysqli_fetch_array($resultado)) {
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
                        echo "<br><form name=consulta method=post action=../Excluir/excluirclientes.php>";
                        echo "<input type=hidden name=cod value=$cod>";
                        echo "<div style=flex-direction:row;display:flex;>";
                        echo "<button class=button-6 type=submit role=button>Excluir</button>";
                        echo "</form>";
                        echo "<form name=altera method=post action=../Editar/editarclientes.php>";
                        echo " <input type=hidden name=cod value=$cod> ";
                        echo " <input type=hidden name=nome value=$nome> ";
                        echo " <input type=hidden name=senha value=$senha> ";
                        echo " <input type=hidden name=fone value=$tel> ";
                        echo " <input type=hidden name=cpf value=$cpf> ";
                        echo " <input type=hidden name=dtnascimento value=$dtnascimento> ";
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