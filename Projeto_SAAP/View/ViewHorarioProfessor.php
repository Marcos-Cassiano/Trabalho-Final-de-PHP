<?php
session_start();
if (!isset($_SESSION['logado']) or !isset($_SESSION['aluno'])){//verificação de existencia de variavel
    header("location:../index.php");
    die();
}else if (!$_SESSION['logado'] and $_SESSION['aluno']) {          //verificando se é professor e se está mesmo logado
    echo "<script>alert('Professor nao logado')</script>";
    header("location:../index.php");
    die();
}

require '../include/Config.inc.php';
$id_professor = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Meus Horarios</title>
    </head>
    <body>
        <h2>Meus Horarios:</h2>
        <div>
            <form name="h_deletar" method="post" action="ViewHorarioProfessor.php">
            <table border="1">
                <tr>
                    <td>Hora</td><td>Dia</td><td>Selecionar</td>
                </tr>
            <?php
                if(isset($_POST['sel'])){
                    foreach ($_POST['sel'] as $id_h){
                        $sql = "DELETE FROM horario WHERE id_h = $id_h";
                        mysqli_query($conn, $sql);
                    }
                }
            
                $resultado = "SELECT * FROM horario WHERE id_professor =$id_professor";
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
                <input type="submit" value="Deletar" name="bt_deletar"/>
            </form>
        </div>
        <br>
        <a href="../Controller/Sair.php">Sair</a>
    </body>
</html>
