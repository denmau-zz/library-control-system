<?php

if(isset($_POST["reg-user"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $cpwd = $_POST["cpassword"];

    include_once "dbconn.php";
    include_once "functions.inc.php";

    if(fieldsEmpty($name, $email, $pwd, $cpwd) !== false){
        header ("location: ../index.php?error=emptyFields");
        exit();
    }
    if(validUsername($name) !== false){
        header ("location: ../index.php?error=invalidUsername");
        exit();
    }
    if(validEmail($email) !== false){
        header ("location: ../index.php?error=invalidEmail");
        exit();
    }
    if(matchPassword($pwd, $cpwd) !== false){
        header ("location: ../index.php?error=unmatchedPassword");
        exit();
    }
    if(userExist($conn, $name, $email) !== false){
        header ("location: ../index.php?error=userAlreadyexit");
        exit();
    }
    createUser($conn, $name, $email, $pwd);
}else{
    header ("location: ../index.php");
    exit();
}