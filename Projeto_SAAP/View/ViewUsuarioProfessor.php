<?php
session_start();
if (!isset($_SESSION['logado']) or !isset($_SESSION['aluno'])){//verificação de existencia de variavel
    header("location:../index.php");
    die();
}else if (!$_SESSION['logado'] and $_SESSION['aluno']) {//verificando se é professor e se está mesmo logado
    echo "<script>alert('Professor nao logado')</script>";
    header("location:../index.php");
    die();
}
require '../include/Config.inc.php';
require '../model/ConexaoBD.php';
require '../model/Read.php';

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
        <a href="ViewCriarHorario.php">Criar Horario</a><br><br>
        <a href="ViewHorarioProfessor.php">Meus Horarios</a><br><br>
        <a href="../Controller/Sair.php">Sair</a>
        
    </body>
</html>
