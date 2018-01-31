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
    <a href="ViewUsuarioAluno.php">Home</a>
    <a href="ViewHorarioAluno.php">Meus Horarios</a>
    <a href="../Controller/Sair.php">Sair</a>
</nav>
<nav class="links2">

</nav>

<nav class="links3">

</nav>
        <section class="blocoaluno" id="rd_aluno">
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
                echo "<td>".date('H:i', strtotime($hora))."</td><td>".date('d/m/Y', strtotime($dia))."</td>";
                echo "<td align=center><input type=checkbox value=$id name=sel[]></td>";
                echo "</tr>";
                }
            ?>
            </table>
                <br>
                <input type="submit" value="Deletar" name="bt_deletar"/><br><br>
            </form>
        </div>
        </section>
    </body>
</html>
