<?php
    session_start();
    include_once("../conexao.php");
    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);
    
    $sql = "SELECT * FROM vendedor WHERE ven_nome = '$nome' and ven_senha = '$senha' LIMIT 1";
    $comando = mysqli_query($conn, $sql);
    $row_usuario = mysqli_fetch_array($comando);
	mysqli_close($id);

    if(mysqli_num_rows($comando) == 1)
    {
        $_SESSION['vendedor'] = $row_usuario['ven_nome'];
        header("Location: ../vendedor.php");
    }
    else
    {
        $_SESSION['erro'] = "<p style='color:red;'>Nome ou Senha incorretos!</p>";
        header("Location: ../LogVen.php");
    }
?>