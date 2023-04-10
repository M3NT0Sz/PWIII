<link rel="stylesheet" href="CSS/style.css">
<div class="container">
  <div class="tabela">
    <h1>Carrinho de compra</h1>
    <form action="finalizarcompra.php" method="post">
      <?php
      session_start();

      if (!isset($_SESSION['carrinho'])) {
        echo "<center><h3>Seu carrinho de compras está vazio!</h3></center>";
      } else {
        $total = 0;
        foreach ($_SESSION['carrinho'] as $produto) {
          $cod = $produto['cod'];
          $preco_total = $produto['preco'];
          echo "<br>Codigo do Produto:$cod";
          echo "<br>Vendedor:{$produto['nome']}";
          echo "<br>Produto:{$produto['produto']}";
          echo "<br>Quantidade:{$produto['quantcomp']}";
          echo "<br>Estoque:{$produto['quantidade']}";
          echo "<br>Preço:{$produto['preco']}";
          echo "<br>Data de Validade:{$produto['dtvalidade']}";
          $total = $total + $preco_total;
          echo "<hr>";
        }
        echo "Valor Total: ".$total;
        echo "<input type=hidden name=total value=$total>";
      }
      ?>
      <input type="hidden" name="comprador" value="<?php echo $_SESSION['login'] ?>">
      <div class="botoes">
        <button type="submit" class="button-6">Comprar</button>
        <a href="comprar.php"><button type="button" class="button-6">Voltar</button></a>
      </div>
    </form>
  </div>
</div>