<?php
session_start();
if (!isset($_SESSION['logado']) or !isset($_SESSION['aluno'])){//verificação de existencia de variavel
    header("location:../../index.html");
    die();
}else if (!$_SESSION['logado'] and $_SESSION['aluno']) {          //verificando se é professor e se está mesmo logado
    echo "<script>alert('Professor nao logado')</script>";
    header("location:../../view/login.html");
    die();
}
require '../include/Config.inc.php';
require '../Model/ConexaoBD.php';
require '../Model/Read.php';

$read = new Read();

$read->ExecutarRead('id', 'professor', "where email= '{$_SESSION['email']}'");

try {

$_SESSION['id'] = $read->getResultado()[0]['id'];

$read->ExecutarRead('nome', 'professor', "where id = '{$_SESSION['id']}'");

$nome = $read->getResultado()[0]['nome'];
    
} catch (Exception $ex) {
    echo $ex->getTraceAsString();
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Bem Vindo</h1>
    </body>
</html>
