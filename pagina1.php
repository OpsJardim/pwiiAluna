<?php
session_start();

//criacao de uma sessao
$_SESSION['nome'] = "Maria Eduarda";

header("location:pagina2.php");