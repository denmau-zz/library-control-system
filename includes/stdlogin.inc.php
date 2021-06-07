<?php
include_once "dbconn.inc.php";

if(isset($_POST["login"])){
    
    function validate_data($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }

    $studentReg = validate_data($_POST["reg-no"]);
    studentPwd$ = validate_data($_POST["pwd"]);
    $studentRole = validate_data($_POST["role"]);

    if(empty($studentReg) || empty($studentPwd) || empty($studentRole)){
    header("location: ../index.php?error=Please fill all fields");
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $studentPwd)){
        header("location: ../index.php?error=Enter valid password");
        
    }
    
    $sql = "SELECT * FROM signup_user WHERE user_name='$studentReg' AND user_role='$studentRole'";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);\

        $hashedpassword = md5($studentPwd);

        if($hashedpassword !== $row["user_password"]){
            header("location:../login.php?error=Incorrect user password from the database");
        }
        if($studentRole !== $row["user_role"]){
            header("location:../login.php?error=Wrong user role,try again");
        }
        if($hashedpassword === $row["user_password"] && $studentReg === $row["user_name"]){
           session start();
           $SESSION["user_id"] = $row["id"];
           $SESSION["user_name"] = $row["user_name"];
           $SESSION["user_email"] = $row["user_email"];
           $SESSION["user_role"] = $row["user_role"];

           if($SESSION["user_role"] == "librarian"){
               header("location:../librarian.php");
           }else if($SESSION["user_role"] =="student"){
               header("location:../student.php");
           }

        }
    }

}