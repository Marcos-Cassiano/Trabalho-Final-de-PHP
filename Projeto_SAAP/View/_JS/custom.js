var form  = document.getElementById('form');

if(form.addEventListener){
    form.addEventListener("submit", validaCadastro);
}else if(form.attachEvent){
    form.attachEvent("onsubmit", validaCadastro);
    }
   
function mascara(t, mask){
    var i = t.value.length;
    var saida = mask.substring(1,0);
    var texto = mask.substring(i)
    if (texto.substring(0,1) != saida){
        t.value += texto.substring(0,1);
    }
}
    
function validaCadastro(evt){
    var nome = document.getElementById('nome');
    var sobrenome = document.getElementById('sobrenome');
    var email = document.getElementById('email');
    var senha = document.getElementById('senha');
    var senha2 = document.getElementById('senha2');
    var disciplina = document.getElementById('disciplina');
    var telefone = document.getElementById('telefone');
    var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    var contErro = 0;

/* Validação do campo Nome */
caixa_nome = document.querySelector('.msg-nome');
if(nome.value === ""){
    caixa_nome.innerHTML = 'Favor preencher o Nome';
    caixa_nome.style.display = 'block';
    contErro += 1;
}else{
    caixa_nome.style.display = 'none';
}

/* Validação do campo Sobrenome */
caixa_sobrenome = document.querySelector('.msg-sobrenome');
if(sobrenome.value === ""){
    caixa_sobrenome.innerHTML = 'Favor preencher o Sobrenome';
    caixa_sobrenome.style.display = 'block';
    contErro += 1;
}else{
    caixa_nome.style.display = 'none';
}

/* Validação do campo email */
caixa_email = document.querySelector('.msg-email');
if(email.value === ""){
    caixa_email.innerHTML = 'Favor preencha o Email';
    caixa_email.style.display = 'block';
    contErro += 1;
}else if(filtro.test(email.value)){
    caixa_email.style.display = 'none';
}else{
    caixa_email.innerHTML = 'Formato do E-mail inválido';
    caixa_email.style.display = 'block';
    contErro += 1;
}

/* Validação do campo senha */
caixa_senha = document.querySelector('.msg-senha');
if(senha.value === ""){
    caixa_senha.innerHTML = 'Favor preencher a Senha';
    caixa_senha.style.display = 'block';
    contErro += 1;
}else if(senha.value.length < 6){
    caixa_senha.innerHTML = 'Favor preencher a Senha com o minímo de 6 caracteres';
    caixa_senha.style.display = 'block';
}else{
    caixa_senha.style.display = 'none';
}

/* Validação do campo confirme a senha */
caixa_senha2 = document.querySelector('.msg-senha');
if(senha2.value === ""){
    caixa_senha.innerHTML = 'Favor preencher o campo Confirme a Senha';
    caixa_senha.style.display = 'block';
    contErro += 1;
}else{
    caixa_senha.style.display = 'none';
}

if(senha.value !== "" && senha2.value !== "" && senha.value !== senha2.value){
    caixa_senha2.innerHTML = 'O campo Confirme a Senha é diferente do campo Senha';
    contErro += 1;
}

/* Validação do campo Telefone */
caixa_telefone = document.querySelector('.msg-telefone');
if(!isNaN(telefone.value)){
    caixa_telefone.innerHTML = 'O campo Telefone pode apenas ser preenchido com números';
    caixa_telefone.style.display = 'block';
    contErro += 1;
}
else{
    caixa_telefone.style.display = 'none';
}

/* Validação do campo Disciplina */
caixa_disciplina = document.querySelector('.msg-disciplina');
if(disciplina.value === ""){
    caixa_disciplina.innerHTML = 'Favor selecione uma disciplina';
    caixa_disciplina.style.display = 'block';
    contErro += 1;
}else{
    caixa_disciplina.style.display = 'none';
}
if(contErro > 0){
    evt.preventDefault();
}
}
 

