<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    

    <form action="cadastro.php" method="post">
        
        <div class="cadastro">Cadastro de Aluno</div>

        <input type="number" id="rm" name="rm" placeholder="Digite seu RM">
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
        <input type="text" id="email" name="email" placeholder="Digite seu email">
        <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF">


        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>