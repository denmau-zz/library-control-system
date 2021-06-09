<?php

function fieldsEmpty($name, $email, $pwd, $cpwd) {
    $result;
    if(empty($name) || empty($email) || empty($pwd) || empty($cpwd)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function validUsername($name)
{
    $result;
    if(!preg_match("/^[a-zA-Z-' ]*$/", $name))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}
function valid_user($name){
    $results;
    if ($results) {
        return true;
        if (age === 12) {
            echo "still young";
        }
    } else {
        return false;
    }
}

// function to check user email
function validEmail($email) {
    $result;
    // filter_var is used to check the space char
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function matchPassword($pwd, $cpwd) {
    $result;
    if($pwd !== $cpwd){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function userExist($conn, $name, $email) {
    $sql = "SELECT * FROM learning WHERE user_name=? OR user_email=?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header ("location: ../index.php?error=somethingHappened");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    mysqli_stmt_execute($stmt);

    $fetchData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($fetchData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $pwd) {
    $sql = "INSERT INTO learning (user_name, user_email, user_password) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header ("location: ../index.php?error=somethingWentwrong");
        exit();
    }

    $hashedPassword = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ("location: ../index.php?error=none");
    exit();
}


// login form validation
function fieldEmpty($name, $pwd) {
    $result;
    if(empty($name) || empty($pwd)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $name, $pwd){
    $uidExists = userExist($conn, $name, $name);

    if($uidExists === false){
        header ("location: ../index.php?error=notRegestered");
        exit();
    }

    $pwdHashed = $uidExists["user_password"];
    $checkPassword = password_verify($pwd, $pwdHashed);

    if($checkPassword === false){
        header ("location: ../index.php?error=wrongPwd");
        exit();
    }else if($checkPassword === true){
        session_start();
        $_SESSION["user_name"] = $uidExists["user_name"];
        $_SESSION["user_email"] = $uidExists["user_email"];
        header ("location: ../home.php");
        exit();
    }
}


?>