<?php
include_once "dbconn.inc.php";

if(isset($_POST["register"])){
    
    function validate_data($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }

    $studentReg = validate_data($_POST["reg-no"]);
    $studentEmail = validate_data($_POST["email"]);
    $studentPwd = validate_data($_POST["pwd"]);
    $studentCpwd = validate_data($_POST["cpwd"]);
    $studentRole = validate_data($_POST["role"]);

    if(empty($studentReg) || empty($studentEmail) || empty($studentPwd) || empty($studentCpwd) || empty($studentRole)){
    header("location: ../index.php?error=Please fill all fields");
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $studentPwd)){
        header("location: ../index.php?error=Enter valid password");
        
    }else if(!filter_var($studentEmail, FILTER_VALIDATE_EMAIL)){
        header("location: ../index.php?error=Enter valid password");
        
    }else if($studentPwd !==  $studentCpwd){
        header("location: ../index.php?error=Unmatched password, try again");
        
    }
    
    $hashedpwd = md5($studentPwd);

    $sql = "INSERT INTO signup_user (user_name, user_email, user_password, user_role) 
    VALUES('$studentReg', '$studentEmail', '$hashedpwd', '$studentRole')";

    $query = mysqli_query($conn, $sql);

    if($query){
        header("location:../login.php");
    }else{
        header("location:../index.php?error=Configure imternet and try again");
    }

}