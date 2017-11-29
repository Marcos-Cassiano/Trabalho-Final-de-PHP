<?php
/**
 * @projeto Projeto_SAAP
 * @Nome CadastroProfessor
 * @Descrição
 * @copyright (c) 21/11/2017, Marcos Cassiano
 * @author Marcos Cassiano Santa Brigida
 * @email mcsbrigida@hotmail.com
 */
class CadastroProfessor {
    private $nome;
    private $email;
    private $senha;
    private $disciplina;
    
    function __construct($nome, $email, $senha, $disciplina) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->disciplina = $disciplina;
    }
    
    public function getVetor(){
        array(
            'nome'=> $this->nome,
            'email'=> $this->email,
            'senha'=> $this->senha,
            'disciplina'=> $this->disciplina
        );
    }

}
