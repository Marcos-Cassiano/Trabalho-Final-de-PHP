<?php
define('HOST', 'localhost');
        define('USUARIO', 'Marcos');
        define('SENHA', 'lessinha007');
        define('BANCO', 'trabalhophp');
        
        function __autoload($class){
            if(file_exists("../Model/".$class.".php")){
                require '../Model/'.$class.'.php';
        }else{
                exit("Erro ao incluir Model/".$class.".php");
        }
}