<?php
class Aluno{
    private $id;
    private $rm;
    private $nome;
    private $email;
    private $cpf;
    private $pdo;


    public function conectar(){
        $dns = "mysql:dbname=EtimPwiiAluno;host=localhost";
        $dbUser = "root";
        $dbPass = "";

        try {
            $this->pdo = new PDO($dns,$dbUser,$dbPass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }




    }

    public function getId(){
        return $this -> id;
    }
    public function getRm(){
        return $this -> rm;
    }
    public function getNome(){
        return $this -> nome;
    }
    public function getEmail(){
        return $this -> email;
    }
    public function getCpf(){
        return $this -> cpf;
    }


    public function setId(){
        $this->id = $id;
    }
    public function setRm(){
        $this->rm = $rm;
    }
    public function setNome(){
        $this->nome = $nome;
    }
    public function setEmail(){
        $this->email = $email;
    }
    public function setCpf(){
        $this->cpf = $cpf;
    }
    
    public function cadastrar($rm,$nome,$email,$cpf){
        #criar uma variavel com a consulta sql
        $sql = "INSERT INTO aluno set rm = :r,nome = :n,email = :e,cpf = :c";
        $sql = $this->pdo->prepare($sql);
        #para cada apelido ,ligar com o valor do parametro passado
        $sql-> bindValue(":r",$rm);
        $sql-> bindValue(":n",$nome);
        $sql-> bindValue(":e",$email);
        $sql-> bindValue(":c",$cpf);
        

        #executar o comando
        return $sql->execute();
    }


    public function consulta($email){
        $sql = "SELECT * from aluno WHERE email= :e";
        $sql = $this->pdo->prepare($sql);
        $sql-> bindValue(":e", $email);
        $sql->execute();

        return $sql->rowCount() > 0;
    }
    
}