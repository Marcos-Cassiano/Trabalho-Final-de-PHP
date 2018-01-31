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
    <head><!---------------------CABEÇALHO------------------------------------->
     <meta charset="UTF-8">
     <title>SAP</title>
     <link rel="stylesheet" href="estilo.css">

     
    
       
        
        <style> 

            h1 {
                font-family: Segoe ui ;
                letter-spacing:2px;
                font-size: 30px;
                font-weight: bolder;
                font-style: italic;   
                color: green;
               }

            p{   font-family: segoe ui;
                 font-size: 25px;
            }

            h2 {
                font-family: Segoe ui ;
                letter-spacing:2px;
                font-size: 150px;
                font-weight: bolder;
                font-style: italic;         
            }

            h3 {
                font-family: Segoe ui ;
                letter-spacing:2px;
                font-size: 45px;
                font-weight: bolder;
            }

            h5 {
                font-family: segoe ui ;
                letter-spacing:2px;
                font-size: 40px;

            } 
            
            
          

        </style>


        
    </head><!-------------------FIM CABEÇALHO --------------------------------->
    <body>
       
   

<nav class="links">
    <a href="ViewUsuarioProfessor.php">Home</a>
    <a href="ViewCriarHorario.php">Criar Horario</a>
    <a href="ViewHorarioProfessor.php">Meus Horarios</a>
    <a href="../Controller/Sair.php">Sair</a>
</nav>
<nav class="links2">

</nav>

<nav class="links3">

</nav>
        <section class="blocoaluno" id="rd_aluno">
        </section>
    </body>
</html>
