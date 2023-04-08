<link rel="stylesheet" href="CSS/style.css">
<div class="container">
    <div class="tabela">
        <?php
        session_start();
        include_once("conexao.php");

        if (!isset($_SESSION['login'])) {
            header("Location: login.php");
            exit;
        }

        if (!isset($_SESSION['carrinho'])) {
            echo "<h3>Seu carrinho de compras está vazio!</h3>";
            echo "<a href=clientes.php><button class=button-6>Voltar</button></a>";
            exit;
        }

        mysqli_begin_transaction($conn);

        $comprador = $_POST['comprador'];
        $total = 0;
        foreach ($_SESSION['carrinho'] as $produto) {
            $cod = $produto['cod'];
            $prod = $produto['produto'];
            $preco = $produto['preco'];
            $vendedor = $produto['nome'];
            $quantcomp = $produto['quantcomp'];
            $quantidade = $produto['quantidade'];
            $estoque = $produto['quantidade'];
            $preco_total = $preco;
            $sql = "INSERT INTO compra (com_produto, com_vendedor, com_comprador, com_quantidade, com_preco_total, com_data) VALUES ('$prod', '$vendedor', '$comprador', '$quantcomp', '$preco_total', NOW())";
            mysqli_query($conn, $sql);
        }
        // Percorra a lista de produtos e atualize cada um deles individualmente
        foreach ($_SESSION['carrinho'] as $produto) {
            $cod = $produto['cod'];
            $quantidade = $produto['quantidade'];
            $quantcomp = $produto['quantcomp'];
            $quantidade = $quantidade - $quantcomp;
            $sql = "UPDATE produtos SET pro_quantidade = '$quantidade' WHERE pro_cod = '$cod'";
            mysqli_query($conn, $sql);
        }

        unset($_SESSION['carrinho']);

        // Se todas as alterações foram bem-sucedidas, confirme a transação
        mysqli_commit($conn);

        // Exiba uma mensagem de sucesso para o usuário
        echo "<h3>Sua compra foi concluída com sucesso!<h3>";
        echo "<a href=clientes.php><button class=button-6>Voltar</button></a>";


        // Feche a conexão com o banco de dados
        mysqli_close($conn);
        ?>
    </div>
</div>