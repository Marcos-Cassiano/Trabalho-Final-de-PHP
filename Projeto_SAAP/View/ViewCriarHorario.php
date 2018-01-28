<?php
session_start();
if (!isset($_SESSION['logado']) or !isset($_SESSION['aluno'])){//verificação de existencia de variavel
    header("location:../index.php");
    die();
}else if (!$_SESSION['logado'] and $_SESSION['aluno']) {//verificando se é professor e se está mesmo logado
    echo "<script>alert('Professor nao logado')</script>";
    header("location:../index.php");
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
        <h1>Criar Horario</h1>
        <form action="../Controller/Horario.php" method="post" id='form'>
                <div>
                <label>Data: </label>
                <input type="date" name="data" class="form-control" required placeholder="Informe o Nome" id="data">
                <label>Hora: </label>
                <input type="time" name="hora" class="form-control" required placeholder="Informe o Sobrenome" id="hora"><br><br>
                </div>
                <input type="submit" value="Criar" class="btn btn-primary" id='botao' name="submit"/><br><br>
        </form>
        <a href="../Controller/Sair.php">Sair</a>
    </body>
</html>
