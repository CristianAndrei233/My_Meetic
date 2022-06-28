<?php

class Dbh {

    protected function connect() {
        try{
            $username  = "admin";
            $password = "admin";
            $dbh = new PDO('mysql:host=localhost;dbname=tindar', $username, $password);
            return $dbh;

        }catch(PDOException $e){
            print "Error!:" .$e->getMessage(). "<br/>";
            die();

        }
    }
}