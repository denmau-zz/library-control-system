<!doctype html>
<html lang="en">
<head>
    <title>Librarian &middot Library Control System</title>

    <!--Fetch Header file-->
    <?php require '../includes/header.php'; ?>

</head>
<body style="background-color: darkgreen; color: white">

<!--FETCH NAVBAR -->
<?php include BASE_PATH . '/includes/navbar.php';
$active_class = "librarian"; ?>


<!--page content-->
<div class="container">
    <main id="home">
        <div class="text-center">
            <img src="<?php echo BASE_PATH ?>/assets/image/seku_logo.png" alt="">
        </div>
        <div class="form-signin">
            <form action="" method="post">
                <h1 class="h3 mb-3 fw-normal text-center text-white">Please sign in</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="janedoe@seku.ac.ke"
                           name="email">
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                           name="password">
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
        </div>
    </main>
</div>


<!-- footer & JavaScript Files -->
<?php require BASE_PATH . '/includes/footer.php' ?>
</body>
</html>
