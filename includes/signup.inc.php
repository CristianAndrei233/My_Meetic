<?php


if(isset($_POST["submit"])){


    // grabbing the data
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];
    $city = $_POST["city"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $pswRepeat = $_POST["pswRepeat"];
    $hobby = $_POST["hobby"];


    ///instantiate SignupController class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";


    $signup = new SignupController($first_name, $last_name, $birthday, $gender, $city, $email, $pass, $pswRepeat,  $hobby);



    ///Running error handlers and user signup

    $signup->signupUser();


    /// Going back to the front page

    header("location: ../login.php?error=none");

}