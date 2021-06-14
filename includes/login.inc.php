<?php

if (isset($_POST["login-user"])) {
    $name = $_POST["name"];
    $pwd = $_POST["password"];

    include_once "dbconn.php";
    include_once "functions.inc.php";

    if (fieldEmpty($name, $pwd) !== false) {
        header("location: ../login.php?error=emptyLogin");
        exit();
    }
    loginUser($conn, $name, $pwd);
} else {
    header("location: ../home.php");
    exit();
}
