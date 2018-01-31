<?php
session_start();

if(!$_SESSION['logado'] and !$_SESSION['aluno']){
    header("location:../index.php");
    
    if(!isset($_SESSION['logado']) or !isset($_SESSION)){
        header("location:../index.php");
        die();
    }
}else if(!$_SESSION['logado'] and !$_SESSION['aluno']){
    header("location:../index.php");
}

require '../include/Config.inc.php';
require '../Model/ConexaoBD.php';
require '../Model/Read.php';

$read = new Read();

$read->ExecutarRead("id", "aluno", "where email = '{$_SESSION['email']}'");

try {
    $_SESSION['id_aluno'] = $read->getResultado()[0]['id'];
    
    $read->ExecutarRead('nome', 'aluno', "where id = '{$_SESSION['id_aluno']}'");
    
    $nome = $read->getResultado()[0]['nome'];
} catch (Exception $ex) {
    echo $ex->getTraceAsString();
    die();
}
?>
<!DOCTYPE html>
<html>
<head><!---------------------CABEÇALHO------------------------------------->
     <meta charset="UTF-8">
     <title>SAP</title>
     <link rel="stylesheet" href="estilo.css">

     
    
       
        
        <style> 

            h1 {
                font-family: Segoe ui ;
                letter-spacing:2px;
                font-size: 30px;
                font-weight: bolder;
                font-style: italic;   
                color: green;
               }

            p{   font-family: segoe ui;
                 font-size: 25px;
            }

            h2 {
                font-family: Segoe ui ;
                letter-spacing:2px;
                font-size: 150px;
                font-weight: bolder;
                font-style: italic;         
            }

            h3 {
                font-family: Segoe ui ;
                letter-spacing:2px;
                font-size: 45px;
                font-weight: bolder;
            }

            h5 {
                font-family: segoe ui ;
                letter-spacing:2px;
                font-size: 40px;

            } 
            
            
          

        </style>


        
    </head><!-------------------FIM CABEÇALHO --------------------------------->
    <body>
          

   

<nav class="links">
    <a href="ViewUsuarioAluno.php">Home</a>
    <a href="ViewHorarioAluno.php">Meus Horarios</a>
    <a href="../Controller/Sair.php">Sair</a>
</nav>
<nav class="links2">

</nav>

<nav class="links3">
   

</nav>
        <section class="blocoaluno" id="rd_aluno">
        <form action="../Controller/Salvar_post.php" method="post">
            <label>Disciplina: </label>
            <select name="id_disciplina" id="id_disciplina" >
                <option value="">Escolha a Disciplina</option>
                    <?php
                    $resultado = "SELECT * FROM disciplina ORDER BY nome";
                    $getResultado = mysqli_query($conn, $resultado);
                    while($row_disciplina = mysqli_fetch_assoc($getResultado)) { 
                        echo '<option value="'.$row_disciplina['id'].'">'.$row_disciplina['nome'].'</option>';
                    }
                    ?>
            </select><br><br>
            <label>Horarios:</label>
            <select name="id_horario" id="id_horario">
                <option value="">Escolha um Horario</option>
            </select><br><br>
            
            <input type="submit" value="Salvar"><br><br>
        </form>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
          google.load("jquery", "1.4.2");
        </script>
        <script type="text/javascript">
        $(function(){
            $('#id_disciplina').change(function(){
                if( $(this).val() ) {
                    $('#id_horario').html('<option value="">Escolha um Horario</option>');
                    $.getJSON('../Controller/Horario_post.php?search=',{id_disciplina: $(this).val(), ajax: 'true'}, function(j){
                        var options = '<option value="">Escolha um Horario</option>';
                        for (var i = 0; i < j.length; i++) {
                            options += '<option value="' + j[i].id_h + '">' + j[i].hora + " " + j[i].dia + '</option>';
                        }
                        $('#id_horario').html(options).show();
                    });
                } else {
                    $('#id_horario').html('<option value="">Escolha um Horario</option>');
                }
            });
        });
        </script>
        </section>
    </body>
</html>
