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
        <h5>Criar Horario</h5>
        <form action="../Controller/Horario.php" method="post" id='form'>
                <div>
                <label>Data: </label>
                <input type="date" name="data" class="form-control" required placeholder="Informe o Nome" id="data">
                <label>Hora: </label>
                <input type="time" name="hora" class="form-control" required placeholder="Informe o Sobrenome" id="hora"><br><br>
                </div>
                <input type="submit" value="Criar" class="btn btn-primary" id='botao' name="submit"/><br><br>
        </form>
        </section>
        <a href="../Controller/Sair.php">Sair</a>
    </body>
</html>
