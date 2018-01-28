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
$id_aluno2 = $_SESSION['id_aluno'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Meus Horarios:</h2>
        <div>
            <form name="h_deletar" method="post" action="ViewHorarioAluno.php">
            <table border="1">
                <tr>
                    <td>Hora</td><td>Dia</td><td>Selecionar</td>
                </tr>
            <?php
                
                if(isset($_POST['sel'])){
                    foreach ($_POST['sel'] as $id_h){
                        $sql = "DELETE FROM horarioaluno WHERE id_horario = $id_h";
                        mysqli_query($conn, $sql);
                    }
                }
                $resultado = "SELECT * FROM horario INNER JOIN horarioaluno ON horario.id_h = horarioaluno.id_horario WHERE horarioaluno.id_aluno = $id_aluno2";
                $getResultado = mysqli_query($conn, $resultado);
                while($row_horario = mysqli_fetch_assoc($getResultado)) {
                    $hora = $row_horario['hora'];
                    $dia = $row_horario['dia'];
                    $id = $row_horario['id_h'];
                echo "<tr>";
                echo "<td>$hora</td><td>$dia</td>";
                echo "<td align=center><input type=checkbox value=$id name=sel[]></td>";
                echo "</tr>";
                }
            ?>
            </table>
                <br>
                <input type="submit" value="Deletar" name="bt_deletar"/><br><br>
            </form>
        </div>
        <a href="../Controller/Sair.php">Sair</a>
    </body>
</html>
