<?php
/**
 * @projeto Projeto_SAAP
 * @Nome CadastroAluno
 * @Descrição
 * @copyright (c) 21/11/2017, Marcos Cassiano
 * @author Marcos Cassiano Santa Brigida
 * @email mcsbrigida@hotmail.com
 */
if(isset($_POST)){
    require '../Config/Config.inc.php';
    
    $email = (string) ($_POST['email']);
    $read = new Read();
    
    $read->ExecutarRead('professor', "where email='{$email}'");
    $verifica_professor = $read->getResultado();
    
    if(!empty($verifica_professor)){
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
    
    $professor = array('nome'=> $nome, 'email'=> $email, 'senha'=> md5($senha));
    $create->ExecutarCreate('trabalhophp.aluno', $professor->getVetor());
    
}else{
    echo "<script>alert('Formulário não preenchido!');</script>";
}

