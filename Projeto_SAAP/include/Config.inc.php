<?php
define('HOST', 'localhost');
        define('USUARIO', 'root');
        define('SENHA', '');
        define('BANCO', 'trabalhophp');
        
        function __autoload($class){
            if(file_exists("../Model/".$class.".php")){
                require '../Model/'.$class.'.php';
        }else{
                exit("Erro ao incluir Model/".$class.".php");
        }
}
$conn = mysqli_connect('localhost', 'root', '', 'trabalhophp');

