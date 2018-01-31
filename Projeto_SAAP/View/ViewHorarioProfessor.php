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
    <head><!---------------------CABEÇALHO------------------------------------->
     <meta charset="UTF-8">
     <title>Cria Horario</title>
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
    <a href="ViewUsuarioProfessor.php">Home</a>
    <a href="ViewCriarHorario.php">Criar Horario</a>
    <a href="ViewHorarioProfessor.php">Meus Horarios</a>
    <a href="../Controller/Sair.php">Sair</a>
</nav>
<nav class="links2">

</nav>

<nav class="links3">

</nav>
        <section class="blocoaluno" id="rd_aluno">
        <div>
            <form name="h_deletar" method="post" action="ViewHorarioProfessor.php">
                <table border="1" class="tabela">
                <tr>
                    <td>Hora</td><td>Dia</td><td>Selecionar</td>
                </tr>
            <?php
                if(isset($_POST['sel'])){
                    foreach ($_POST['sel'] as $id_h){
                        $sql2 = "DELETE FROM horarioaluno WHERE id_horario = $id_h";
                        mysqli_query($conn, $sql2);
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
                echo "<td>".date('H:i', strtotime($hora))."</td><td>".date('d/m/Y', strtotime($dia))."</td>";
                echo "<td align=center><input type=checkbox value=$id name=sel[]></td>";
                echo "</tr>";
                }
            ?>
            </table>
                <br>
                <input type="submit" value="Deletar" name="bt_deletar"/>
            </form>
        </div>
        </section>

    </body>
</html>
