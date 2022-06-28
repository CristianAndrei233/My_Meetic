<?php

class SignupController extends Signup {


    private $first_name;
    private $last_name;
    private $birthday;
    private $gender;
    private $city;
    private $email;
    private $pass;
    private $pswRepeat;
    private $hobby;


    public function __construct($first_name, $last_name, $birthday, $gender, $city, $email, $pass, $pswRepeat,  $hobby){

        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->birthday = $birthday;
        $this->gender = $gender;
        $this->city = $city;
        $this->email = $email;
        $this->pass = $pass;
        $this->pswRepeat= $pswRepeat;
        $this->hobby = $hobby;


    }


    public function signupUser(){

        if($this->emptyInput() == false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        // if($this->invalidFname() == false){
        //     header("location: ../index.php?error=first_name");
        //     exit();
        // }
        if($this->invalidEmail() == false){
            header("location: ../index.php?error=email");
            exit();
        }
        if($this->passwordMatch() == false){
            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        // if($this->emailCheck() == false){
        //     header("location: ../index.php?error=emailtaken");
        //     exit();
        // }

        $this->setUser($this->first_name,  $this->last_name,  $this->birthday,  $this->gender,  $this->city,  $this->email, $this->pass, $this->hobby);

        

    }

    private function emptyInput(){
        $result;
        if(empty($this->first_name) || empty($this->last_name) || empty($this->email) || empty($this->gender) || empty($this->pass) || empty($this->pswRepeat)){
            $resutl = false;

        }else{
            $result = true;
        }
        return $result;
    }

    // private function invalidFname(){
    //     $result;
    //     if(!preg_match("/^[a-zA]*$/", $this->first_name)){
    //         $result = false;
    //     }else{
    //         $result =  true;
    //     }
    //     return $result;
    // }

    private function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result =  true;
        }
        return $result;
    }

    private function passwordMatch(){
        $result;
        if($this->pass !== $this->pswRepeat){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function emailCheck(){
        $result;
        if(!$this->checkUser($this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

}