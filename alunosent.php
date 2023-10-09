<?php 

//Entidade - Entinty

class aluno {
    //variavel global
private $cpf, $nome, $turma;

    public function getCPF(){
        return $this->cpf;
    }

    public function setCPF($cpf){
        $this->cpf=$cpf//não é o mesmo que este.
        ;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome=$nome;
    }

    public function getTurma(){
        return $this->turma;
    }

    public function setTurma($turma){
        $this->turma=$turma;
    }

}