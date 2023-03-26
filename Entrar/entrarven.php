<?php
    $id = mysqli_connect("localhost", "root", "", "clientes");
    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);
    
    $sql = "SELECT * FROM vendedor WHERE ven_nome = '$nome' and ven_senha = '$senha' LIMIT 1";
    $comando = mysqli_query($id, $sql);
    $row_usuario = mysqli_fetch_array($comando);
	mysqli_close($id);

    if(mysqli_num_rows($comando) == 1)
    {
        $_SESSION['login'] = $row_usuario['ven_nome'];
        header("Location: ../principal.html");
    }
    else
    {
        header("Location: ../index.html");
    }
?>