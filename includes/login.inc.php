<?php


if(isset($_POST["submit"])){


    // grabbing the data
    $email = $_POST["email"];
    $pass = $_POST["pass"];



    ///instantiate SignupController class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";


    $login = new LoginController($email, $pass);



    ///Running error handlers and user signup

    $login->loginUser();


    /// Going back to the front page

    header("location: ../index.php?login-succes");

}