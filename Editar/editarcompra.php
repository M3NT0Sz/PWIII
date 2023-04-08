<?php
session_start();
include_once("../conexao.php");
$cod = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT * FROM compra WHERE codigo = '$cod'";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Compra</title>
</head>

<body>
    <div class="container">
        <form name="cadcli" method="post" action="editarcom.php">
            <div class="tabela">
                <h1>Editar Compra</h1>
                <div class="registro">
                    <?php
                    if ($_POST['botao']) {
                        $cod = $_POST['cod'];
                        $vendedor = $_POST['vendedor'];
                        $comprador = $_POST['comprador'];
                        $produto = $_POST['produto'];
                        $quantidade = $_POST['quantidade'];
                        $preco = $_POST['preco'];
                        $data = $_POST['data'];
                    }
                    ?>
                </div>
                    <div class="registro">
                        <h3>Código: <input type=text name=cod value=<?php echo $cod; ?> disabled>
                            <input type=hidden name=codigo value=<?php echo $cod; ?>>
                        </h3>
                    </div>
                    <div class="registro">
                        <h3>Vendedor: <input value="<?php echo $vendedor; ?>" type=text name=vendedor></h3>
                    </div>
                    <div class="registro">
                        <h3>Comprador: <input value="<?php echo $comprador; ?>" type="text" name=comprador></h3>
                    </div>
                    <div class="registro">
                        <h3>Produto: <input value="<?php echo $produto; ?>" type=text name=produto></h3>
                    </div>
                    <div class="registro">
                        <h3>Quantidade: <input value="<?php echo $quantidade; ?>" type=text name=quantidade></h3>
                    </div>
                    <div class="registro">
                        <h3>Preço: <input value="<?php echo $preco; ?>" type=text name=preco></h3>
                    </div>
                    <div class="registro">
                        <h3>Data de compra: <input value="<?php echo $data; ?>" type=date name=data></h3>
                    </div>
                    <div class="registro">
                        <a href="../vendedor.php"><button class="button-6" type="button">Voltar</button></a>
                        <input class="button-6" role="button" type=submit name=alterar value=Alterar>
                    </div>
                </form>
            </div>
        </form>
    </div>
</body>

</html>