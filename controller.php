<?php
$cpf = filter_input(INPUT_POST, "cpf");
$nome = filter_input(INPUT_POST, "nome");
$turma = filter_input(INPUT_POST, "turma");
$botao = filter_input(INPUT_POST, "botao");

include "alunosdao.php";
include "alunosent.php";

$aluno = new aluno();
$aluno->setCPF($cpf);
$aluno->setNome($nome);
$aluno->setTurma($turma);


$alunosdao = new alunosdao();


if($botao=="CADASTRAR"){
    $alunosdao->cadastrar($aluno);
}else if($botao=="ATUALIZAR"){
    $alunosdao->atualizar($aluno);
}else if($botao=="APAGAR"){
    $alunosdao->apagar($aluno);
}else if($botao=="BUSCAR"){
    $alunosdao->consultar();
    foreach($alunosdao->consultar() as $consult){
        echo $consult['cpf']."<BR>";
        echo $consult['nome']."<BR>";
        echo $consult['turma']."<BR>";
    }
}

?>