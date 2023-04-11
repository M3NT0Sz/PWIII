<?php
// Inicie a sessão
session_start();

// Recupere os dados do formulário
$cod = $_POST['cod'];
$nome = $_POST['nome'];
$produto = $_POST['produto'];
$quantcomp = $_POST['quantcomp'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];
$dtvalidade = $_POST['dtvalidade'];

$preco = $quantcomp * $preco;

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

$_SESSION['carrinho'][] = array(
    'cod' => $cod,
    'nome' => $nome,
    'produto' => $produto,
    'quantcomp' => $quantcomp,
    'quantidade' => $quantidade,
    'preco' => $preco,
    'dtvalidade' => $dtvalidade
);
?>
<link rel="stylesheet" href="../CSS/style.css">
<div class="container">
    <div class="tabela">
        <?php
        echo "<h3>Produto adicionado ao carrinho com sucesso!</h3>";
        echo "<a href=../comprar.php><button class=button-6>Continuar comprando</button></a>";
        echo "<a href=../carrinho.php><button class=button-6>Ver carrinho</button></a>";
        ?>
    </div>
</div>