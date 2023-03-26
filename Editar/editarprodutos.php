<?php
session_start();
include_once("conexao.php");
$cod = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT * FROM usuarios WHERE codigo = '$cod'";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <div class="container">
            <div class="tabela">
                <h1>Editar Clientes</h1>
                <div class="registro">
                    <?php
                    if ($_POST['botao']) {
                        $cod = $_POST['cod'];
                        $nome = $_POST['nome'];
                        $quantidade = $_POST['quantidade'];
                        $preco = $_POST['preco'];
                        $dtvalidade = $_POST['dtvalidade'];
                    }
                    ?>
                </div>
                <form name=cadcli method=post action=gravaalteraprodutos.php>
                    <div class="registro">
                        <h3>Código: <input type=text name=cod value=<?php echo $cod; ?> disabled>
                            <input type=hidden name=codigo value=<?php echo $cod; ?>>
                        </h3>
                    </div>
                    <div class="registro">
                        <h3>Nome: <input value="<?php echo $nome; ?>" type=text name=nome></h3>
                    </div>
                    <div class="registro">
                        <h3>Quantidade: <input value="<?php echo $quantidade; ?>" type=text name=quantidade></h3>
                    </div>
                    <div class="registro">
                        <h3>Preço: <input value="<?php echo $preco; ?>" type=text name=preco></h3>
                    </div>
                    <div class="registro">
                        <h3>Data Validade: <input value="<?php echo $dtvalidade; ?>" type=date name=dtvalidade></h3>
                    </div>
                    <div class="registro">
                        <input class="button-6" role="button" type=reset value=Limpar>
                        <input class="button-6" role="button" type=submit name=alterar value=Alterar>
                    </div>
                </form>
            </div>
        </form>
    </div>
</body>

</html>