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
    if (texto.substring(0,1) !== saida){
        t.value += texto.substring(0,1);
    }
}
    
function validaCadastro(evt){
    var email = document.getElementById('email');
    var senha = document.getElementById('senha');
    var senha2 = document.getElementById('senha2');
    var disciplina = document.getElementById('disciplina');
    var telefone = document.getElementById('telefone');
    var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    var contErro = 0;

/* Validação do campo email */
caixa_email = document.querySelector('.msg-email');
if(filtro.test(email.value)){
    caixa_email.style.display = 'none';
}else{
    caixa_email.innerHTML = 'Formato do E-mail inválido';
    caixa_email.style.display = 'block';
    contErro += 1;
}

/* Validação do campo confirme a senha */
caixa_senha2 = document.querySelector('.msg-senha2');
if(senha.value !== senha2.value){
    caixa_senha2.innerHTML = 'O campo Confirme a Senha é diferente do campo Senha';
    caixa_senha2.style.display = 'block';
    contErro += 1;
}else{
    caixa_senha2.style.display = 'none'
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
 

