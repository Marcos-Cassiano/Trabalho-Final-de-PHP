<?php
session_start();

if(isset($_POST)){
    require '../include/Config.inc.php';
    require '../Model/ConexaoBD.php';
    require '../Model/Create.php';
    require '../Model/Read.php';
    
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    
    $read = new Read();
    $create = new Create();
    
    $dados = array('dia'=>$data, 'hora'=>$hora);
    
    $create->ExecutarCreate('horario', $dados);
    
    $read->ExecutarRead("max('id') as id", 'horario');
    $id_horario =$read->getResultado();
    
    $dados2 = array('id_professor'=> $_SESSION['id'], 'id_horario'=> $id_horario);
    
    $create->ExecutarCreate('professorhorario', $dados2);

    
}

