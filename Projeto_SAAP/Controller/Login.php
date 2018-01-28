<?php
session_start();

$_SESSION['logado'] = false;
$_SESSION['email'] = null;
$_SESSION['aluno'] = false;

if(isset($_POST['email']) and isset($_POST['senha'])){
    require '../include/Config.inc.php';
    
    try{
        $email_login =(string) $_POST['email'];
        $senha_login =(string) md5($_POST['senha']);
    } catch (Exception $e){
        echo $e->getMessage();
    }
    $read = new Read();
    
    $read->ExecutarRead('*','aluno', "where email = '{$email_login}'");
    $capturaBanco_aluno = $read->getResultado();
    
    if(!$capturaBanco_aluno){
        $read->ExecutarRead('*', 'professor', "where email = '{$email_login}'");
        $capturaBanco_prof = $read->getResultado();
    }
    
    if(!empty($capturaBanco_aluno)){
        if($senha_login == $capturaBanco_aluno[0]['senha']){
            $_SESSION['logado'] = true;
            $_SESSION['aluno'] = true;
            $_SESSION['email'] = $email_login;
            header("Location:../View/ViewUsuarioAluno.php");
            exit();
        }
        else{
            header("location:../index.php");
            exit();
        }
    }elseif(!empty ($capturaBanco_prof)){
        if($senha_login == $capturaBanco_prof[0]['senha']){
            $_SESSION['logado'] = true;
            $_SESSION['aluno'] = false;
            $_SESSION['email'] = $email_login;
            header("Location:../View/ViewUsuarioProfessor.php");
            exit();
        }else{
            header("location:../index.php");
            exit();
        }
    }else{
        header("location:../index.php");
        exit();
    }
}
exit();

