<?php
session_start();
include_once("../conexao.php");
$cod = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT * FROM vendedor WHERE codigo = '$cod'";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Vendedor</title>
</head>

<body>
    <div class="container">
            <div class="tabela">
                <h1>Editar Vendedor</h1>
                <div class="registro">
                    <?php
                    if ($_POST['botao']) {
                        $cod = $_POST['cod'];
                        $nome = $_POST['nome'];
                        $endereco = $_POST['endereco'];
                        $dtnascimento = $_POST['dtnascimento'];
                    }
                    ?>
                </div>
                <form name=cadcli method=post action=../Gravar/gravaralteravendedor.php>
                    <div class="registro">
                        <h3>Código: <input type=text name=cod value=<?php echo $cod; ?> disabled>
                            <input type=hidden name=codigo value=<?php echo $cod; ?>>
                        </h3>
                    </div>
                    <div class="registro">
                        <h3>Nome: <input value="<?php echo $nome; ?>" type=text name=nome></h3>
                    </div>
                    <div class="registro">
                        <h3>Senha: <input value="<?php echo $senha; ?>" type=password name=senha></h3>
                    </div>
                    <div class="registro">
                        <h3>Endereco: <input value="<?php echo $endereco; ?>" type=text name=endereco></h3>
                    </div>
                    <div class="registro">
                        <h3>Data Nascimento: <input value="<?php echo $dtnascimento; ?>" type=date name=dtnascimento></h3>
                    </div>
                    <div class="registro">
                        <a href="../vendedor.php"><button class="button-6" type="button" role="button">Voltar</button></a>
                        <input class="button-6" role="button" type=submit name=alterar value=Alterar>
                    </div>
                </form>
            </div>
        </form>
    </div>
</body>

</html>