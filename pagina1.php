<?php
session_start();

//criacao de uma sessao
$_SESSION['nome'] = "Maria";

header("location:pagina2.php");