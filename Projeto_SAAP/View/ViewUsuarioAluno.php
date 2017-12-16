<?php
session_start();

if(!$_SESSION['logado'] and !$_SESSION['aluno']){
    header("location:../View/ViewLogin.php");
    
    if(!isset($_SESSION['logado']) or !isset($_SESSION)){
        header("location:../index.php");
        die();
    }
}else if(!$_SESSION['logado'] and !$_SESSION['aluno']){
    header("location:../View/ViewLogin.php");
}

require '../include/Config.inc.php';
require '../Model/ConexaoBD.php';
require '../Model/Read.php';

$read = new Read();

$read->ExecutarRead("id", "aluno", "where email = '{$_SESSION['email']}'");

try {
    $_SESSION['id'] = $read->getResultado()[0]['id'];
    
    $read->ExecutarRead('nome', 'aluno', "where id = '{$_SESSION['id']}'");
    
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
        <h1>Bem Vindo!</h1>
    </body>
</html>
