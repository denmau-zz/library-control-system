<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Lib|Reset</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="logo"><img src="images/logo/logo.jpg" alt="logo" height="50px"></div>
            <div class="form">
                <div class="image">
                    <img src="images/logo/logo_2.jpg" alt="logo" height="100px">
                </div>
                <p class="heading">Reset password</p>
                <div class="error">
                    <p class="error-par">Error</p>
                </div>
                <form action="" method="post">
                    <input type="text" name="reg-no" id="" placeholder="Enter username">
                    <input type="password" name="pwd" id="" placeholder="Enter password">
                    <input type="text" name="role" id="" value="librarian" hidden>
                    <button type="submit" name="reset">Reset password</button>
                </form>
                <p>back to login <a href="login.php">click here</a></p>
            </div>
        </div>
    </div>
</body>
</html>