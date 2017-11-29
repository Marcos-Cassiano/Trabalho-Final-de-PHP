<?php
/**
 * @projeto Projeto_SAAP
 * @Nome CadastroAluno
 * @Descrição
 * @copyright (c) 21/11/2017, Marcos Cassiano
 * @author Marcos Cassiano Santa Brigida
 * @email mcsbrigida@hotmail.com
 */
class CadastroAluno extends ConexaoBD{
    private $nome;
    private $email;
    private $senha;
    
    function __construct($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }
    
    public function getVetor(){
        return array(
            'nome'=> $this->nome,
            'email'=> $this->email,
            'senha'=> $this->senha
        );
    }

}
