<!DOCTYPE html>
<html>
    <head><!---------------------CABEÇALHO------------------------------------->
     <meta charset="UTF-8">
     <title>SAP</title>
     <link rel="stylesheet" href="View/estilo.css">


     <link rel="stylesheet prefetch" href='View/materialize/css/materialize.min.css'>

     <link rel="stylesheet" href="View/css/style.css">
     
     
     
    
       
        <!---  -----------------STYLE CSS ------------------------------------>
        <style> 

            h1 {
                font-family: Segoe ui ;
                letter-spacing:2px;
                font-size: 30px;
                font-weight: bolder;
                font-style: italic;   
               }

            p{   font-family: segoe ui;
                 font-size: 20px;
                 font-weight: lighter;
               
            }
            

            h2 {
                font-family: Segoe ui ;
                letter-spacing:2px;
                font-size: 190px;
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
            
            
             h6 {
                font-family: zrnic ;
                letter-spacing:2px;
                font-size: 30px;

            } 
            
            
            
            
            
            
             h4 {
                font-family: segoe ui ;
                letter-spacing:2px;
                font-size: 10px;
                color:white;
                margin-top: 2px;
                margin-left: 320px;

            } 
             
             

            
                    

            
            
            
            
          

        </style><!-------------------------FIM DO STYLE  ---------------------->
        
<!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->


        
    </head><!-------------------FIM CABEÇALHO --------------------------------->

    
    
    
    
    
<!-----------------------------BODY ------------------------------------------->
<body>



    






<!--LINKS --------------------------------------------------------------------->
<nav class="links">

    <img src="View/logotarja3.fw.png"> 

    <label for="rd_1">HOME</label>
    <label for="rd_2">LOGIN</label>
    <label for="rd_3">CADASTRO ALUNO</label>
    <label for="rd_4">CADASTRO PROFESSOR</label>
    <label for="rd_5">QUEM SOMOS</label>
    

</nav>
<nav class="links2">
   

</nav>

<nav class="links3">
   

</nav>

<nav class="links4">
   
    <h4>SISTEMA PATENTIADO.TODOS OS DIREITOS RESERVADOS@</h4>   

</nav>











<!--SCROLLL-------------------------------------------------------------------->

        <div class="scroll">
            <input type="radio" name="grupo" id="rd_1" checked="true">
            <input type="radio" name="grupo" id="rd_2">
            <input type="radio" name="grupo" id="rd_3">
            <input type="radio" name="grupo" id="rd_4">
            <input type="radio" name="grupo" id="rd_5">
         



<!-- CLASSE SELECTIOS --------------------------------------------------------->
<section class="sections">


<!-- PÁGINA HOME -------------------------------------------------------------->
    <section class="bloco" id="rd_1">

<!---------------------------------------SLIDE -------------------------------->
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="View/basic78.jpg"> <!-- 1ª IMAGEM -------------------------->
                      <div class="caption center-align">
                          
                         <div class="estudantes2">
                             <img src="View/sistema40.png"> 
                        </div>
                     
                      
                        
                   
                </li>
                <li>
                    <img src="View/basic78.jpg"> <!-- 2ª IMAGEM  ------------------------>
                    <div class="caption left-align">
                        <h3>VOCÊ ALUNO</h3>
                       
                       
                        <p class="light grey-text text-lighten-3">
                            Escolha as <b>Matérias</b> em que você precisa de ajuda. <br>
                      Marque seu horário com o professor de sua <b>preferência.</b></p>
                     
                        
                        <div class="estudantes">
                            <img src="View/estudando540.png">
                        </div>
                     
                    </div>
                 
                </li>
                <li>
                    <img src="View/basic78.jpg"> <!-- 3ª IMAGEM ---------------->
                  
                    <div class="caption right-align">
                       <div class ="alunosfoto">
                          
                        
                        <h3>VOCÊ PROFESSOR</h3>
                        <p class="light grey-text text-lighten-3">
                         Auxilie seus <b>alunos</b> de forma segura e confortável.<br>
                        exercendo essa que é a profissão mais <b>nobre.</b></p>
                         
                            <div class="estudantes">
                                <img src="View/professores4.fw.png">
                        </div>
                     
                        
                        
                    </div>
                </li>
                <li>
                    <img src="View/basic79.png"> <!-- 4ª IMAGEM ---------------->
                    <div class="caption center-align">
                        <h3>CADASTRE-SE AGORA</h3>
                        <p class="light grey-text text-lighten-3">
                            E faça parte desse projeto</p>
                        
                          <div class="notebook4">
                              <img src="View/notenovo.gif"> 
                        </div>
                        
                        
                    </div>
                </li>
            </ul>
        </div><!--------------------------FIM DO SLYDE ------------------------>

        <script src='View/js/jquery-3.2.1.min.js'></script>
        <script src='View/materialize/js/materialize.min.js'></script>

        <script  src="View/js/index.js"></script>

       
       
        
        
        
    </section>
<!-------------------------FIM PÁGINA HOME ------------------------------------>


<!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->


<!-------------------------PÁGINA LOG IN -------------------------------------->             

<section class="bloco" id="rd_2">
  
    
    <form action="Controller/Login.php" method="post" class="form">
          
		  <h1>Login</h1>
		  <div>
             <label for="email" >E-mail:</label>
             <input type="email" name="email" placeholder="Informe o E-mail"/>

		   
	      </div> 
		  <div>
             <label>Senha:</label>
             <input type="password" name="senha" placeholder="Informe a Senha" id="senha"/>
          </div>
		 
		  <div class="button">
                      <button type="submit" name="submit">Logar</button>
          </div>
		 //----------------------------------------------
                 <div>
                     Ainda não tem uma conta?<br><br>
                Cadastre-se aqui como <a href="View/ViewCadastroAluno.php">Aluno</a> ou <a href="View/ViewCadastroProfessor.php">Professor</a>
                 </div>
	
	
	
	    </form>
	 

    
    
    
    
    
</section>

<!------------------------FIM PÁGINA LOGIN ------------------------------------>

<!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->


<!------------------------PÁGINA CADASTRO ALUNO ------------------------------->

<section class="bloco" id="rd_3">
   
    <nav class="buttomlinks">
        <a href="View/ViewCadastroAluno.php"><label>CADASTRE-SE AQUI</label></a>
    </nav>
   
    
   
    
    
    
    
</section>

<!------------------------FIM PÁGINA CADASTERO ALUNO -------------------------->

<!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->


<!------------------------PÁGINA CADASTERO PROFESSOR -------------------------->
                             
<section class="bloco" id="rd_4">
   
    <nav class="buttomlinks">
        <a href="View/ViewCadastroProfessor.php"<label for="rd_1">CADASTRE-SE AQUI</label><a>
                </nav>
    
    
    
  
    
    
</section>

<!------------------------FIM PÁGINA CADASTERO PROFESSOR ---------------------->
                                             
<!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
                     
                                
<!------------------------PÁGINA QUEM SOMOS ----------------------------------->
 
  

<section class="bloco" id="rd_5">
    
     <nav class="buttomlinkporra">
    
       
         <article>
      
             <center>
                 
                 <h6> PRAZER EM ENSINAR </h6>
                 <p>
              Criado pela gigante <b>Caio Guitter System</b> em parceria com a <b>Marcos Brigida Corporation</b>, esses sistema<br> já é um fenômeno
              mundo a fora, totalizando em 2017, mais de <b>15 milhões de clientes</b>.<br> Com o intuito de facilitar o atendimento do professor ao aluno, tornou possível uma comunicação
                 mais direta e segura entre ambos, proporcionando o desenvolvimento pessoal e renovando o conceito de educação.  </p>
             
                     </center>
         </article>
         
      
    </nav>
   
     
     
     
     
    
     
     
    
    

   </section>




<footer>
   
   
    
   
        
    <center>Copyright&copy; 2017 - Sistema de Atendimento 
            de Aluno por Professor</center>
           
    
       
   
     
     
    
   
      
    
   </footer>

<footer>

    <center> <img src="View/animationfoot.gif"></center>
   

    </body>
    
    </footer>
                      
             

<!------------------------FIM CLASSE SELECTION -------------------------------->

</section><!------------------------FIM CLASSE SELECTION ---------------------->

<!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
<!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->


    </div><!-- FIM SCROLL------------------------------------------------------>
                                                
        
        
<!-----------------------------------------PHP -------------------------------->


<!-------------------------------------FIM PHP -------------------------------->


<!-----------------------FIM DO BODY ------------------------------------------>

</html><!--------------------------FIM ---------------------------------------->
