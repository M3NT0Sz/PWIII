<?php
    $id = mysqli_connect("localhost", "root", "", "clientes");
    $cod = $_POST['cod'];
    $sql = "DELETE from vendedor where ven_cod = $cod";
    mysqli_query($id, $sql);
    mysqli_close($id);
    header("location:../Consultas/consultavendedor.php");
?>