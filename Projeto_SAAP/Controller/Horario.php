<?php
session_start();

if(isset($_POST)){
    require '../include/Config.inc.php';
    require '../Model/ConexaoBD.php';
    require '../Model/Create.php';
    require '../Model/Read.php';
    
    $create = new Create();
    
    $dados = array('dia'=>$data, 'hora'=>$hora, 'id_professor'=>$_SESSION['id']);
    
    $create->ExecutarCreate('horario', $dados);
    
    header("location:../View/ViewCriarHorario.php");
}

