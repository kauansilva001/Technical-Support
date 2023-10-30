<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
 @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

    body{
    background: #9E5AFF;
    display: flex;
    justify-content: center;
    height: 100dvh;
    align-items: center;
    }

    main {
    display: flex;
    justify-content: center;
}

    .container {
    display: grid;
    column-gap: 70px;
    grid-template-columns: 1fr 1fr;
    border-radius: 15px;
    background: #FFF;
    padding: 40px 50px;
    grid-column: 1/2;
    width: 70%;
    align-items:center;
}

    p{    margin-bottom: 30px;
         font-family: 'Inter', sans-serif;
         font-weight: 900;
        font-size: 55px;
        text-align: center;
        
    }

    .input-button {
    margin-top: 15px;
    /*padding: 8px 50px;*/
    font-family: 'Inter', sans-serif;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    font-size: large;
    width: 300px;
    height: 50px;
  }
  
  .input-button:hover {
    transform: translateY(-3px);
    background-color: rgb(128, 95, 247);
  }

  .botao{
display:flex;
justify-content:center;

  }


  @media screen and (max-width:768px) {
    



    .botao {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
       
    }

    .container {
        display: block;
        width: 90%;
        height:14.5cm;
       
        
    }

    p {
        font-size: 34px;
        text-align: center;
    }

    .input-button {
    
    width: 200px;
    height: 50px;
    font-size:small;

    }

    

    }




    </style>
</body>
</html>


<?php 
include "conexao.php";

class chamadosDao{
    //CRUD - create, read, update, delete
    //create
    public function cadastrar(chamados $c){
        $sql0 = "insert into chamados (email, desc_problema, lugar, tipo_problema, tipo_user) values (?,?,?,?,?)";

        $bd = new Conexao();
        $conn = $bd->getConexao();

        $v0 = $conn->prepare($sql0);
        $v0->bindValue(1, $c->getEmail());
        $v0->bindValue(2, $c->getDesc_problema());
        $v0->bindValue(3, $c->getLugar());
        $v0->bindValue(4, $c->getTipo_problema());
        $v0->bindValue(5, $c->getTipo_user());
        


        $result0 = $v0->execute();
       

        if($result0){
            echo "
            <main>
            <div class='container'>
            <div>
            <p>CADASTRADO COM SUCESSO!</p>
            <div class='botao'>
           <a href='index.php'><input class='input-button' value='ENVIAR OUTRO CHAMADO' name='botao' type='submit'</a></div>
            </div>
            <div class='space-image'>
            <img src='icons/IMAGE-INDEX.svg' alt='Ilustração na qual a personagem usa um computador' width='95%'>
            </div>
            <main>
            </div>";
        }else{
            echo "erro ao cadastrar";
        }
    } //fim cadastrar 


    //read
    public function buscar(chamados $c){
        $sql = "select * from chamados";
        $bd = new Conexao();
        $conn = $bd->getConexao();
           
        $vl = $conn->prepare($sql);
        $vl->bindValue(1, $c->getEmail());
        $vl->execute();
   
       if($vl->rowCount()>0){
        $resultado->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
   }

}

    
     public function atualizar(chamados $c){
        $sql0 = "update into chamados  set email=?, desc_problema=?, lugar=?, tipo_problema=?, tipo_user=?";
      
        $bd = new Conexao();
        $conn = $bd->getConexao();
       
        $v0 = $conn->prepare($sql0);
        $v0->bindValue(1, $c->getEmail());
        $v0->bindValue(2, $c->getDesc_problema());
        $v0->bindValue(3, $c->getLugar());
        $v0->bindValue(4, $c->getTipo_problema());
        $v0->bindValue(5, $c->getTipo_user());
        

       
        
      
        $result0 = $v0->execute();
       /*PARAMOS AQUI*/
       
        if($result0){
            echo "atualizado com sucesso";
        }else{
            echo "erro ao atualizar";
        }
    }


  
     public function apagar(chamados $c){
        $sql0 = "update into chamados  set  email=?, desc_problema=?, lugar=?, tipo_problema=?, tipo_user=?";

        $bd = new Conexao();
        $conn = $bd->getConexao();
        
        $v0 = $conn->prepare($sql0);
        $v0->bindValue(1, $m->getCod_chamados());

       

        $result = $vl->execute();

        if($result){
            echo "apagado com sucesso";
        }else{
            echo "erro ao apagar";
        }
    }




}

