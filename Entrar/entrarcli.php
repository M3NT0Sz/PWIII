<?php
    session_start();
    include_once("../conexao.php");
    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);
    
    $sql = "SELECT * FROM clientes WHERE cli_nome = '$nome' and cli_senha = '$senha' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row_usuario = mysqli_fetch_array($result);  
    if(mysqli_num_rows($result) == 1)
    { 
        $_SESSION['login'] = "Cliente: " . $row_usuario['cli_nome'];
        header("Location: ../clientes.php");
    }
    else
	{
        $_SESSION['erro'] = "<p style='color:red;'>Nome ou Senha incorretos!</p>";
        header("Location: ../LogCli.php");
    }
?>