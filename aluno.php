<?php
require 'Aluno.class.php';
$aluno = new Aluno();

$con = $aluno->conectar();

if($con) {
    //antes de cadstrar, perguntar assim
    $al = $aluno->consulta("dudajsousa@gmail.com");
    // cadastrar($rm,$nome,$email,$cpf)
    if(!$al){
        $aluno->cadastrar(4657,"Maria Eduarda Jardim Sousa","dudajsousa@gmail.com","123-456-789-10");    
    }else{
        echo"<script>alert('Esse aluno já está cadastrado!!')</script>";
    }
}else{
    echo"<script>alert('sem conexao com o banco.tente mais tarde!')</script>";
}