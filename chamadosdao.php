<?php 
include "conexao.php";

class chamadosDao{
    //CRUD - create, read, update, delete
    //cadastro
    public function cadastrar(chamado $a){
        $sql = "insert into chamados (email, desc_problema, lugar, tipo_problema, tipo_user, data_hora) values (?,?,?,?,?,?)";
        $bd = new Conexao();
        $conn = $bd->getConexao();
        
        $vl = $conn->prepare($sql);
        $vl->bindValue(1, $a->getEmail());
        $vl->bindValue(2, $a->getDesc_problema());
        $vl->bindValue(3, $a->getLugar());
        $vl->bindValue(4, $a->getTipo_problema());
        $vl->bindValue(5, $a->getTipo_user());
        $vl->bindValue(6, $a->getData_hora());
        $result = $vl->execute();

        if($result){
            echo "Seu problema foi registrado! Fique atento ao seu e-mail para atualizações";
        }else{
            echo "erro ao registrar problema. Por favor, tente novamente";
        }
    } //fim cadastrar 

    public function consultar(){
        $sql = "select * from aluno";
        $bd = new Conexao();
        $conn = $bd->getConexao();
        
        $vl = $conn->prepare($sql);
        $result = $vl->execute();

        if($vl->rowCount()>0){
          $result =  $vl->fetchAll(\PDO::FETCH_ASSOC);
          return $result;
        }else{
            echo "dados não encontrados";
        }
    }

     //atualizar 
     public function atualizar(aluno $a){
        $sql = "update aluno set nome=?, turma=? where cpf=?";
        $bd = new Conexao();
        $conn = $bd->getConexao();
        
        $vl = $conn->prepare($sql);
        $vl->bindValue(1, $a->getNome());
        $vl->bindValue(2, $a->getTurma());
        $vl->bindValue(3, $a->getCPF());
        $result = $vl->execute();

        if($result){
            echo "atualizado com sucesso";
        }else{
            echo "erro ao atualizar";
        }
    }


     //delete/apagar
     public function apagar(aluno $a){
        $sql = "delete from aluno where cpf=?";
        $bd = new Conexao();
        $conn = $bd->getConexao();
        
        $vl = $conn->prepare($sql);
        $vl->bindValue(1, $a->getCPF());
        $result = $vl->execute();

        if($result){
            echo "apagado com sucesso";
        }else{
            echo "erro ao apagar";
        }
    }


     //consulta
    //fim consultar 
 
}
?>