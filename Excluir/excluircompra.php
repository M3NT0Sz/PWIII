<?php
    $id = mysqli_connect("localhost", "root", "", "clientes");
    $cod = $_POST['cod'];
    $sql = "DELETE from compra where com_cod = $cod";
    mysqli_query($id, $sql);
    mysqli_close($id);
    header("location:../Consultas/consultacompra.php");
?>