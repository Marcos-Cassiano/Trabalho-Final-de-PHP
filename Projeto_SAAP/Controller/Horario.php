<?php
session_start();
if(isset($_POST)){
    require '../include/Config.inc.php';
    
    $data = (string) $_POST['data'];
    $hora = (string) $_POST['hora'];
    
    
}

