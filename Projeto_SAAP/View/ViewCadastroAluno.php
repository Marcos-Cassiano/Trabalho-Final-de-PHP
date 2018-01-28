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
        <style type="text/css">
            .msg-erro{color: red;}
        </style>
        <script src="_JS/custom.js" type="text/javascript"></script>
    </head>
    <body>
        <div>
            <h1>Formulário de Cadastro</h1>
            <form action="../Controller/CadastroAluno.php" method="post" id='form'>
                <div>
                <label>Nome: </label>
                <input type="text" name="nome" class="form-control" required placeholder="Informe o Nome" id="nome"><br>
                <span class='msg-erro msg-nome'></span><br>
                </div>
                <div>
                <label>Sobrenome: </label>
                <input type="text" name="sobrenome" class="form-control" required placeholder="Informe o Sobrenome" id="sobrenome"><br>
                <span class='msg-erro msg-sobrenome'></span><br>
                </div>
                <div>
                <label>E-mail: </label>
                <input type="text" name="email" class="form-control" required placeholder="Informe o E-mail" id="email"><br>
                <span class='msg-erro msg-email'></span><br>
                </div>
                <div>
                <label>Senha: </label>
                <input type="password" name="senha" class="form-control" required placeholder="Informe a Senha" id="senha"><br>
                <span class='msg-erro msg-senha'></span><br>
                </div>
                <div>
                <label>Confirme a Senha: </label>
                <input type="password" name="senha2" class="form-control" required placeholder="Digite a Senha novamente" id="senha2"><br>
                <span class='msg-erro msg-senha2'></span><br>
                </div>
                <div>
                    <label>Telefone: (Opcional)</label>
                    <input type="tel" name="telefone" class="form-control" onkeypress="mascara(this, '## #####-####')" maxlength="13" placeholder="Digite seu telefone" id="telefone"><br><br>
                    <span class='msg-erro msg-telefone'></span>
                </div>
                <input type="submit" value="Cadastrar" class="btn btn-primary" id='botao' name="submit"/><br><br>
                
                Já tem uma conta?
                <a href="../index.php">Clique Aqui</a>
            </form>
        </div>
    </body>
</html>
