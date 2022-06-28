<?php

class Signup extends Dbh {


    protected function setUser($first_name, $last_name, $birthday, $gender, $city, $email, $pass, $hobby) {

        $stmt = $this->connect()->prepare('INSERT INTO user (first_name, last_name, birthday, gender, city, email, pass, hobby) VALUES (?, ?, ?, ?, ?, ?, ?, ?);');

        $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($first_name, $last_name, $birthday, $gender, $city, $email, $hashedPwd, $hobby))){

            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();

        }
        $stmt = null;
    }





    // protected function checkUser($email) {

    //     $stmt = $this->connect()->prepare('SELECT email FROM user WHERE email = ?;');

    //     if(!$stmt->execute($email)){

    //         $stmt = null;
    //         header("location: ../index.php?error=stmtfailedddd");
    //         exit();

    //     }

    //     $resultCheck;
        
    //     if($stmt->rowCount() > 0){
    //         $resultCheck = false;

    //     }else{
    //         $resultCheck = true;
    //     }
    //     return $resultCheck;
    // }




}