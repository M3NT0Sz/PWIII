<?php
session_start();

if (!isset($_SESSION['carrinho'])) {
  echo "Seu carrinho de compras está vazio!";
} else {
  echo "<table border=2>";
  echo "<tr>
  <th>Codigo do Produto</th>
  <th>Vendedor</th>
  <th>Nome</th>
  <th>Quantidade</th>
  <th>Estoque</th>
  <th>Preço</th>
  <th>Data de Validade</th>
  <th>Total</th>
  </tr>";
  $total = 0;
  foreach ($_SESSION['carrinho'] as $produto) {
    $cod = $produto['cod'];
    $preco_total = $produto['preco'];
    echo "<tr>
    <td>$cod</td>
    <td>{$produto['nome']}</td>
    <td>{$produto['produto']}</td>
    <td>{$produto['quantcomp']}</td>
    <td>{$produto['quantidade']}</td>
    <td>{$produto['preco']}</td>
    <td>{$produto['dtvalidade']}</td>
    <td>$preco_total</td>
    </tr>";
    $total = $total + $preco_total;
  }
  echo "<tr>
  <td colspan='4'>Total:</td>
  <td>$total</td>
  </tr>";
  echo "</table>";
}
?>
<a href="comprar.php"><button>Voltar</button></a>
