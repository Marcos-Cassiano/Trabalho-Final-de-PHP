<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="_JS/custom.js" type="text/javascript"></script>
        <style type="text/css">
            .msg-erro{color: red;}
        </style>
    </head>
    <body>
        <div>
            <h1>Login</h1>
            <form action="Controller/Login.php" method="post" id='form'>
                <div>
                <label>E-mail: </label>
                <input type="text" name="email" class="form-control" placeholder="Informe o E-mail" id="email"><br>
                <span class='msg-erro msg-email'></span><br>
                </div>
                <div>
                <label>Senha: </label>
                <input type="password" name="senha" class="form-control" placeholder="Informe a Senha" id="senha"><br>
                <span class='msg-erro msg-senha'></span><br>
                </div>
                <button type="submit" class="btn btn-primary" id='botao' name="submit">
                    Logar
                </button><br><br>
                
                Ainda não tem uma conta?<br><br>
                Cadastre-se aqui como <a href="View/ViewCadastroAluno.php">Aluno</a> ou <a href="View/ViewCadastroProfessor.php">Professor</a>
            </form>
        </div>
    </body>
</html>
