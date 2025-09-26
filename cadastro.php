<?php
require "Aluno.class.php";

if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $rm = $_POST['rm'] ?? '';
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    $senha = $_POST['senha']?? '';

    $aluno = new Aluno();

    if($aluno->conectar()){
        //verifica se já existe cadastro nesse email
            if ($aluno->cadastrar($rm,$nome,$email,$cpf, $senha)) {
                echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href=index.html;</script>";
            } else {
                echo "<script>alert('Erro ao cadastrar. Tente novamente.'); window.history.back();</script>";
            }

    } else {
        echo "<script>alert('Erro na conexão com o banco de dados.'); window.history.back();</script>";
    }
}
?>