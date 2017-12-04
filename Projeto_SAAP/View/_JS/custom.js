var form  = document.getElementById("");

if(form.addEventListener){
    form.addEventListener("submit", validaCadastro);
}else if(form.attachEvent){
    form.attachEvent("onsubmit", validaCadastro);
}
function validaCadastro(evt){
    var nome = document.getElementById('nome');
    var email = document.getElementById('email');
    var senha = document.getElementById('senha');
    var senha2 = document.getElementById('senha2');
    var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    var contErro = 0;

/* Validação do campo nome */
caixa_nome = document.querySelector('.msg-nome');
if(nome.value === ""){
    caixa_nome.innerHTML = "Favor preencher o Nome";
    caixa_nome.style.display = 'block';
    contErro += 1;
}else{
    caixa_nome.style.display = 'none';
}

/* Validação do campo email */
caixa_email = document.querySelector('.msg-email');
if(email.value === ""){
    caixa_email.innerHTML = "Favor preencha o Email";
    caixa_email.style.display = 'block';
    contErro += 1;
}else if(filtro.test(email.value)){
    caixa_email.style.display = 'none';
}else{
    caixa_email.innerHTML = "Formato de E-mail inválido";
    caixa_email.style.display = 'block';
    contErro += 1;
}

/* Validação do campo senha */
caixa_senha = document.querySelector('.msg-senha');
if(senha.value === ""){
    caixa_senha.innerHTML = "Favor preencher a Senha";
    caixa_senha.style.display = 'block';
    contErro += 1;
}else{
    caixa_senha.style.display = 'none';
}

/* Validação do campo confirme a senha */
caixa_senha2 = document.querySelector('.msg-senha2');
if(senha2.value === ""){
    caixa_senha.innerHTML = "Favor preencher o campo Confirme a Senha";
    caixa_senha.style.display = 'block';
    contErro += 1;
}else{
    caixa_senha.style.display = 'none';
}

if(senha.value !== "" && senha2.value !== "" && senha.value !== senha2.value){
    caixa_senha2.innerHTML = "O campo Confirme a Senha é diferente do campo Senha";
    caixa_senha2.style.display = 'block';
    contErro += 1;
}
if(contErro > 0){
    evt.preventDefault();
}
}
