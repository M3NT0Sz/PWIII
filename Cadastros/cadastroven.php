<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <div class="container">
        <form name="cadpro" method="post" action="../Gravar/gravarven.php">
            <div class="tabela">
                <h1>Cadastro</h1>
                <div class="registro">
                    <h3>Nome:<input type="text" name="nome"></h3>
                </div>
                <div class="registro">
                    <h3>Senha:<input type="password" name="senha"></h3>
                </div>
                <div class="registro">
                    <h3>Endereço:<input type="text" name="endereco"></h3>
                </div>
                <div class="registro">
                    <h3>Data de Nascimento:<input type="date" name="dtnascimento"></h3>
                </div>
                <div class="botoes">
                <button class="button-6" type="submit" role="button">Criar</button>
                <a href="../principal.html"><button class="button-6" type="button" role="button">Voltar</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>