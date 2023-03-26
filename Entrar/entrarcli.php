<?php
    $id = mysqli_connect("localhost", "root", "", "clientes");
    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);
    
    $sql = "SELECT * FROM clientes WHERE cli_nome = '$nome' and cli_senha = '$senha' LIMIT 1";
    $comando = mysqli_query($id, $sql);
    $row_usuario = mysqli_fetch_array($comando);
	mysqli_close($id);

    if(mysqli_num_rows($comando) == 1)
    {
        $_SESSION['cliente'] = $row_usuario['cli_nome'];
        header("Location: ../clientes.php");
    }
    else
    {
        header("Location: ../index.html");
    }
?>