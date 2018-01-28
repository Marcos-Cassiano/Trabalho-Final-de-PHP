<?php
/**
 * @projeto Projeto_SAAP
 * @Nome CadastroAluno
 * @Descrição
 * @copyright (c) 21/11/2017, Marcos Cassiano
 * @author Marcos Cassiano Santa Brigida
 * @email mcsbrigida@hotmail.com
 */
if(isset($_POST )){
    require '../include/Config.inc.php';
    
    $email = (string) ($_POST['email']);
    $senha = (string) $_POST['senha'];
    $senha2 = (string) $_POST['senha2'];
    $telefone =(string) $_POST['telefone'];
    $nome = (string) $_POST['nome'];
    $disciplina =(int) $_POST['disciplina'];
    $sobrenome =(string) $_POST['sobrenome'];
    
    $read = new Read();
    
    $read->ExecutarRead('*', 'professor', "where email='{$email}'");
    $verifica_professor = $read->getResultado();
    
    if(!empty($verifica_professor)){
        echo "<script>alert('Você já foi cadastrado');</script>";
        header("location:../View/ViewCadastroProfessor.php");
        die();
    }
    
    $validar = new Validar();
    if(!$validar->Email($email)){
        header("location:../View/ViewCadastroProfessor.php");
        die();
    }
        
    if($senha != $senha2){
        header("location:../View/ViewCadastroProfessor.php");
        die();
    }
    
    $professor = array('nome'=> $nome, 'sobrenome'=> $sobrenome, 'email'=> $email, 'senha'=> md5($senha), 'telefone'=> $telefone, 'id_disciplina'=> $disciplina);
    $create = new Create();
    
    $create->ExecutarCreate('professor', $professor);
    header("location:../index.php");
}else{
    echo "<script>alert('Formulário não preenchido!');</script>";
}

