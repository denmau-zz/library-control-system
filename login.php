<?php
//include_once "includes/dbconn.inc.php";
//include_once "includes/signup.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Lib|student login page</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="logo"><img src="images/logo/logo.jpg" alt="logo" height="50px"></div>
        <div class="form">
            <div class="image">
                <img src="images/logo/logo_2.jpg" alt="logo" height="100px">
            </div>
            <p class="heading">Student login</p>
            <div class="error">
                <!--                --><?php
                //                        if(isset($_GET["error"])){
                //                            echo $_GET["error"];
                //                        }
                //                        ?>
            </div>
            <form action="" method="post">
                <input type="text" name="reg-no" id="" placeholder="Enter student regitration number">
                <input type="password" name="pwd" id="" placeholder="Enter password">
                <input type="text" name="role" id="" value="student" hidden>
                <button type="submit" name="login">Login</button>
            </form>
            <p>Don't have an account? <a href="index.php">signup</a></p>
            <p>Librarian login <a href="loginlib.php">click here</a></p>
            <p>forgot password? <a href="forgot.php">Reset</a></p>
        </div>
    </div>
</div>
</body>
</html>