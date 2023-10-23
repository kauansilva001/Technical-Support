<?php
 $email= filter_input(INPUT_POST, "email");
 $desc_problema= filter_input(INPUT_POST, "desc_problema");
 $lugar= filter_input(INPUT_POST, "lugar");
 $tipo_problema = filter_input(INPUT_POST, "tipo_problema", FILTER_SANITIZE_STRING);
 $tipo_user = filter_input(INPUT_POST, "tipo_user", FILTER_SANITIZE_STRING);
 $botao = filter_input(INPUT_POST, "botao");

 
/* var_dump($email);
 var_dump($desc_problema);
 var_dump($lugar);
 var_dump( $tipo_problema);
 var_dump($tipo_user);*/
 




include "chamadosDAO.php";
include "chamados.php";

$chamados = new chamados();
$chamados->setEmail($email);
$chamados->setDesc_problema($desc_problema);
$chamados->setLugar($lugar);
$chamados->setTipo_problema($tipo_problema);
$chamados->setTipo_user($tipo_user);



$chamadosDao = new chamadosDao();


if($botao=="CADASTRAR"){
    $chamadosDao->cadastrar($chamados);
}else if($botao=="ATUALIZAR"){
    $chamadosDao->atualizar($chamados);
}else if($botao=="APAGAR"){
    $chamadosDao->apagar($chamados);
}else if($botao=="BUSCAR"){
    $chamadosDao->consultar();
    foreach($chamadosDao->consultar() as $consult){
        echo $consult['email']."<BR>";
        echo $consult['desc_problema']."<BR>";
        echo $consult['lugar']."<BR>";
        echo $consult['tipo_problema']."<BR>";
        echo $consult['tipo_user']."<BR>";
    
    }
}

?>