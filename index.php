<?php
include_once "includes/dbconn.inc.php";
include_once "includes/signup.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Lib|signup page</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="logo"><img src="images/logo/logo.jpg" alt="logo" height="50px"></div>
            <div class="form">
                <div class="image">
                    <img src="images/logo/logo_2.jpg" alt="logo" height="100px">
                </div>
                <p class="heading">Student signup</p>
                <div class="error">
                    <p class="error-par">
                        <?php
                        if(isset($_GET["error"])){
                            echo $_GET["error"];
                        }
                        ?>
                    </p>
                </div>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="reg-no" id="" placeholder="Enter student regitration number">
                    <input type="email" name="email" id="" placeholder="Enter student email address">
                    <input type="password" name="pwd" id="" placeholder="Enter password">
                    <input type="password" name="cpwd" id="" placeholder="Conferm your password">
                    <input type="text" name="role" id="" value="student" hidden>
                    <button type="submit" name="register">signup</button>
                </form>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>