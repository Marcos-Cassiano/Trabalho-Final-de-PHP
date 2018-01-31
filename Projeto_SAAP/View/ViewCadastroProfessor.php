<?php
    include_once '../include/Config.inc.php';
?>
<!DOCTYPE html>
<html>
    <head><!---------------------CABEÇALHO------------------------------------->
     <meta charset="UTF-8">
     <title>Professor</title>
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

    
    
    
    
    
<!-----------------------------BODY ------------------------------------------->
<body>


  


   

<nav class="links">

</nav>
<nav class="links2">
   

</nav>

<nav class="links3">
   

</nav>

    
   
 
    
    
    
    
    
    
    
    


    <section class="blocoaluno" id="rd_aluno">

        <nav class="fundoform">
           <form action="../Controller/CadastroAluno.php" method="post">
          
		  <h1>CADASTRE-SE AQUI</h1>
		  //-----------------------------------------------
		  <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome"/>
          </div>
         //----------------------------------------------
         <div>
             <label>Sobrenome: </label>
                <input type="text" name="sobrenome" required placeholder="Informe o Sobrenome" id="nome">
         </div>
         //----------------------------------------------
		  <div>
             <label for="email">E-mail:</label>
             <input type="email" id="email" name="email" required placeholder="Informe o E-mail"/>

		   
	      </div>
         //---------------------------------------------- 
		  <div>
             <label for="senha">Senha:</label>
             <input type="password" name="senha" required placeholder="Informe a Senha" id="senha"/>
          </div>
		 /----------------------------------------------
                 <div>
                     <label for="senha">Confirme a Senha: </label>
                <input type="password" name="senha2" required placeholder="Digite a Senha novamente" id="senha"><br>
                </div>
		 /----------------------------------------------
                 <div>
                     <label for="disciplina">Disciplina: </label>
                    <select name="disciplina">
                        <option>--Selecione--</option>
                        <?php
                        $resultado = "SELECT * FROM disciplina";
                        $getResultado = mysqli_query($conn, $resultado);
                        while($row_disciplina = mysqli_fetch_assoc($getResultado)) { ?>
                        <option value="<?php echo $row_disciplina['id'] ?>"><?php echo $row_disciplina['nome'] ?></option>
                        <?php } ?>
                    </select><br>
                </div>
		 /----------------------------------------------
		 
         
		
		  <div class="button">
            <button type="submit" name="submit">Enviar Cadastro</button><br>
          </div>
                 
                 Já tem uma conta?
                <a href="../index.php">Clique Aqui</a>
		 //----------------------------------------------

	
	
	
	    </form>
            </nav>
        
         <img src="16.jpg"> 
         
        
        
        
        



    </body>
                      
             



</section>
      
    <?php
    
    
    ?>
  



</html><!--------------------------FIM ---------------------------------------->
