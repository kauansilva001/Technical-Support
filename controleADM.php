<?php 

$userAdmin = filter_input(INPUT_POST,"user-admin");
$senha = filter_input(INPUT_POST,"password-admin");

var_dump($userAdmin);
var_dump($senha);

include "conexao.php";

session_start();

$sql = "select * from alunos where user_name=? and senha=?";
$bd = new Conexao();
$conn = $bd->getConexao();

$v = $conn->prepare($sql);
$v->bindValue(1, $user_name);
$v->bindValue(2, $senha);

$v->execute();
    if ($v-> rowCount()>0){
        $_SESSION['$user_name'] = $user_name;
        /*header("location:consulta.php");*/ 
    }else{
        unset ($_SESSION['$user_name']);
        /*header("location:index.php");*/
}

?>