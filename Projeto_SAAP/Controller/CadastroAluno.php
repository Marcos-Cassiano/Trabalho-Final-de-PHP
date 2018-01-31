<?php
/**
 * @projeto Projeto_SAAP
 * @Nome CadastroAluno
 * @Descrição
 * @copyright (c) 29/11/2017, Marcos Cassiano
 * @author Marcos Cassiano Santa Brigida
 * @email mcsbrigida@hotmail.com
 */
session_start();
if(isset($_POST)){
    require '../include/Config.inc.php';
    
    $email = (string) ($_POST['email']);
    $nome = (string) $_POST['nome'];    
    $sobrenome = (string) $_POST['sobrenome'];    
    $senha = (string) $_POST['senha'];
    $senha2 = (string) $_POST['senha2'];
    
    $read = new Read();
    
    $read->ExecutarRead("*","aluno", "where email = '{$email}'");
    $verifica_aluno = $read->getResultado();
    
    if(!empty($verifica_aluno)){
        echo "<script>alert('Você já foi cadastrado');</script>";
        header("location:../View/ViewCadastroAluno.php");
        die();
    }
        
    if($senha != $senha2){
        header("location:../View/ViewCadastroAluno.php");
        die();
    }
    
    $aluno = array('nome'=> $nome,'sobrenome'=> $sobrenome, 'email'=> $email, 'senha'=> md5($senha));
    $create = new Create();
    
    
    $create->ExecutarCreate('trabalhophp.aluno', $aluno);
    header("location:../index.php");
}else{
    echo "<script>alert('Formulário Vazio!');</script>"; 
}

