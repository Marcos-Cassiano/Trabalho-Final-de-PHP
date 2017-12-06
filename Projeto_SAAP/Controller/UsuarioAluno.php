<?php
session_start();

if($_SESSION['logado']){
    echo "Aluno logado com sucesso<br>";
    echo "E-mail: ".$_SESSIO['email'];
}else{
    echo "<script>alert('Aluno não logado');</script>";
    header("../View/Login.html");
}

