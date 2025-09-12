<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
    

    <form action="cadastro.php" method="post">
        
        <div class="cadastro">Cadastro de Aluno</div>

        <label for="rm">RM</label>
        <input type="numbero" id="rm" name="Registro de Matrícula" placeholder="Digite seu rm">

        <label for="nome">Nome</label>
        <input type="text"  id="nome" name="Nome" placeholder="Digite seu nome">

        <label for="email">Email</label>
        <input type="text" id="email" name="Email" placeholder="Digite seu email">

        <label for="cpf">CPF</label>
        <input type="numero" id="cpf" name="CPF" placeholder="Digite seu CPF">

        <button type="button">Cadastrar</button>
    </form>

</body>
</html>