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

// Verifique se o carrinho de compras já existe na sessão do usuário
if (!isset($_SESSION['carrinho'])) {
    // Se o carrinho de compras ainda não existe, inicialize-o com um array vazio
    $_SESSION['carrinho'] = array();
}

// Adicione as informações do produto ao carrinho de compras
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