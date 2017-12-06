<?php
/**
 * @projeto Projeto_SAAP
 * @Nome CadastroAluno
 * @Descrição
 * @copyright (c) 29/11/2017, Marcos Cassiano
 * @author Marcos Cassiano Santa Brigida
 * @email mcsbrigida@hotmail.com
 */
if(isset($_POST)){
    require '../include/Config.inc.php';
    
    $email = (string) ($_POST['email']);
    $read = new Read();
    
    $read->ExecutarRead('aluno', "where email='{$email}'");
    $verifica_aluno = $read->getResultado();
    
    if(!empty($verifica_aluno)){
        echo "<script>alert('Você já foi cadastrado');</script>";
    }
    
    $senha = (string) $_POST['senha'];
    $senha2 = (string) $_POST['senha2'];
    
    if($senha != $senha2){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    
    $validar = new Validar();
    if(!$validar->Email($email)){
        echo "<script>alert('Email Inválido');</script>";
        die();
    }
    
    $nome = (string) $_POST['nome'];
    
    $create = new Create();
    
    $aluno = array('nome'=> $nome, 'email'=> $email, 'senha'=> md5($senha));
    $create->ExecutarCreate('trabalhophp.aluno', $aluno);
    
}else{
    echo "<script>alert('Formulário não preenchido!');</script>";
}

