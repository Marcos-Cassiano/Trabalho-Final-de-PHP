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
    $telefone =(string) $_POST['telefone'];
    $senha = (string) $_POST['senha'];
    $senha2 = (string) $_POST['senha2'];
    
    $read = new Read();
    
    $read->ExecutarRead("*","aluno", "where email = '{$email}'");
    $verifica_aluno = $read->getResultado();
    
    if(!empty($verifica_aluno)){
        echo "<script>alert('Você já foi cadastrado');</script>";
        die();
    }
    
    $validar = new Validar();
    if(!$validar->Email($email)){
        die();
    }
        
    if($senha != $senha2){
        die();
    }
    
    if(!$telefone == "" && !is_numeric($telefone)){
        die();
    }
    
    $aluno = array('nome'=> $nome,'sobrenome'=> $sobrenome, 'email'=> $email, 'senha'=> md5($senha), 'telefone'=> $telefone);
    $create = new Create();
    
    
    $create->ExecutarCreate('trabalhophp.aluno', $aluno);
    header("location:../View/ViewLogin.php");
}else{
    echo "<script>alert('Formulário Vazio!');</script>"; 
}

