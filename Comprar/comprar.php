<?php
session_start();
include_once("../conexao.php");
$cod = $_POST['cod'];
$nome = $_POST['nome'];
$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];
$dtvalidade = $_POST['dtvalidade'];
$comquant = $_POST['con' . $cod . ''];
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
                <div class="letras">
                    <?php
                    echo $_SESSION['prod'];
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>