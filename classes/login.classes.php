<?php

class Login extends Dbh {


    protected function getUser($email, $pass) {

        $stmt = $this->connect()->prepare('SELECT pass FROM user WHERE email = ? OR first_name = ?;');


        if(!$stmt->execute(array($email, $pass))){

            $stmt = null;
            header("location: ../index.php?error=stmtfailed1");
            exit();

        }

        if($stmt->rowCount() == 0){

            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pass, $pwdHashed[0]["pass"]);

        if($checkPwd == false){

            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();


        }elseif($checkPwd == true){


            $stmt = $this->connect()->prepare("SELECT * FROM user WHERE email = ? OR pass = ?;" );

            if(!$stmt->execute(array($email, $pass))){

                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
    
            }

            if($stmt->rowCount() == 0){

                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();

            $_SESSION["userid"] = $user[0]["id"];
            $_SESSION["first_name"] = $user[0]["first_name"];

            $stmt = null;

            

        }

        $stmt = null;
    }





}