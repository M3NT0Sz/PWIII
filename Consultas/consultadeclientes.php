<?php

$id = mysqli_connect("localhost", "root", "", "clientes");
if($_POST['consultar']){
                        $nome = $_POST['nome'];
                        $sql = "SELECT * FROM clientes WHERE cli_nome like '%$nome%'";
                        }else{
                            $sql = "SELECT * FROM clientes";
                        }
                        ?>