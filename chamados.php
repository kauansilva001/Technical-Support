<?php

class chamados{
    private
    $email,
    $desc_problema,
    $lugar,
    $tipo_problema ,
    $tipo_user;

   


    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }


    public function getDesc_problema(){
        return $this->desc_problema;
    }

    public function setDesc_problema($desc_problema){
        $this->desc_problema = $desc_problema;
    }


    public function getLugar(){
        return $this->lugar;
    }

    public function setLugar($lugar){
        $this->lugar = $lugar;
    }


    public function getTipo_problema(){
        return $this->tipo_problema;
    }

    public function setTipo_problema($tipo_problema){
        $this->tipo_problema = $tipo_problema;
    }


    public function getTipo_user(){
        return $this->tipo_user;
    }

    public function setTipo_user($tipo_user){
        $this->tipo_user = $tipo_user;
    }


}