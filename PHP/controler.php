<?php
 $cod_chamados= filter_input(INPUT_POST, "cod_chamados");
 $email= filter_input(INPUT_POST, "email");
 $desc_problema= filter_input(INPUT_POST, "desc_problema");
 $lugar= filter_input(INPUT_POST, "lugar");
 $tipo_problema = filter_input(INPUT_POST, "tipo_problema",);
 $tipo_user = filter_input(INPUT_POST, "tipo_user",);
 $data_hora= filter_input(INPUT_POST, "data_hora",);
 $user_name = filter_input(INPUT_POST,"user-admin");
 $senha = filter_input(INPUT_POST,"password-admin");
 $botao = filter_input(INPUT_POST, "botao");

include "chamadosDAO.php";
include "chamados.php";

$chamados = new chamados();
$chamados->setCod_chamados($cod_chamados);
$chamados->setEmail($email);
$chamados->setDesc_problema($desc_problema);
$chamados->setLugar($lugar);
$chamados->setTipo_problema($tipo_problema);
$chamados->setTipo_user($tipo_user);
$chamados->setData_hora($data_hora);
$chamados->setUser_name($user_name);
$chamados->setSenha($senha);


$chamadosDao = new chamadosDao();


if($botao=="CADASTRAR"){
    $chamadosDao->cadastrar($chamados);
}else if($botao=="ATUALIZAR SENHA"){
    $chamadosDao->atualizar($chamados);
}else if($botao == "Enviar"){
    $chamadosDao->verificar($chamados);
}
?>


