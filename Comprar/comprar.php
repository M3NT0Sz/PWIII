<?php
session_start();
include_once("../conexao.php");
if ($_POST['botao']) {
    $cod = $_POST['cod'];
    $nome = $_POST['nome'];
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $dtvalidade = $_POST['dtvalidade'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>

<body>
    <div class="container">
        <div class="tabela">
            <h1>É isso mesmo que voce deseja?</h1>
            <div class="registro">
                <h3>Código: <input type=text name=cod value=<?php echo $cod; ?> disabled>
                    <input type=hidden name=codigo value=<?php echo $cod; ?>>
                </h3>
            </div>
            <div class="registro">
                <h3>Vendedor: <input value="<?php echo $nome; ?>" type=text name=nome disabled></h3>
            </div>
            <div class="registro">
                <h3>Produto: <input value="<?php echo $produto; ?>" type=text name=produto disabled></h3>
            </div>
            <div class="registro">
                <h3>Quantidade: <input value="" type=text name=quantidade></h3>
                <h3>Estoque: <input value="<?php echo $quantidade; ?>" type=text name=quantidade disabled></h3>
            </div>
            <div class="registro">
                <h3>Preço: <input value="<?php echo $preco; ?>" type=text name=preco disabled></h3>
            </div>
            <div class="registro">
                <h3>Data Validade: <input value="<?php echo $dtvalidade; ?>" type=date name=dtvalidade disabled></h3>
            </div>
            <div class="registro">
                <input class="button-6" role="button" type=reset value=Comprar>
                <input class="button-6" role="button" type=submit name=alterar value=Voltar>
            </div>
        </div>
    </div>
</body>

</html>