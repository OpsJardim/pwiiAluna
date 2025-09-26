<?php
class Aluno{
    private $id;
    private $rm;
    private $nome;
    private $email;
    private $cpf;
    private $senha;
    private $pdo;


    public function conectar(){
        $dns = "mysql:dbname=etimpwiiAluno;host=localhost";
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

    public function getSenha(){
        return $this -> senha;
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
    public function setSenha(){
        $this->senha = $senha;
    }
    
    
    public function cadastrar($rm, $nome, $email, $cpf,$senha){
        $sql = "INSERT INTO aluno (rm, nome, email, cpf, senha) VALUES (:r, :n, :e, :c, :s)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":r", $rm);
        $stmt->bindValue(":n", $nome);
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":c", $cpf);
        $stmt->bindValue(":s", $senha);
        return $stmt->execute();
    }

    public function consulta($email){
        $sql = "SELECT * from aluno WHERE email= :e";
        $sql = $this->pdo->prepare($sql);
        $sql-> bindValue(":e", $email);
        $sql->execute();

        return $sql->rowCount() > 0;
    }
    
}