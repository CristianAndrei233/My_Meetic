<?php

class LoginController extends Login {

    private $email;
    private $pass;


    public function __construct($email, $pass){

        $this->email = $email;
        $this->pass = $pass;

    }


    public function loginUser(){

        if($this->emptyInput() == false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->email, $this->pass);

        

    }

    private function emptyInput(){
        $result;
        if(empty($this->email) || empty($this->pass)){
            $result = false;

        }else{
            $result = true;
        }
        return $result;
    }
}