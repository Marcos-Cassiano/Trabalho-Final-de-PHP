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
    
    $read->ExecutarRead('nome', 'aluno', "where id = '{$_SESSION['id']}'");
    
    $nome = $read->getResultado()[0]['nome'];
} catch (Exception $ex) {
    echo $ex->getTraceAsString();
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Bem Vindo!</h1>
        <h2>Selecione a Disciplina:</h2>
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
            <h2>Selecione o Horario:</h2>    
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
                    $.getJSON('../Controller/Horario_post.php?search=',{id_disciplina: $(this).val(), ajax: 'true'}, function(j){
                        var options = '<option value="">Escolha um Horario</option>';
                        for (var i = 0; i < j.length; i++) {
                            options += '<option value="' + j[i].id_h + '">' + j[i].hora + " " + j[i].dia + '</option>';
                        }
                        $('#id_horario').html(options).show();
                    });
                } else {
                    $('#id_horario').html('<option value="">- Escolha um Horario -</option>');
                }
            });
        });
        </script>
        <a href="ViewHorarioAluno.php">Meus Horarios</a>
        <a href="../Controller/Sair.php">Sair</a>
    </body>
</html>
