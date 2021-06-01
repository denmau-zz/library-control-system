<!doctype html>
<html lang="en">
<head>

    <title>About &middot Library Control System</title>

    <!--Fetch Header file-->
    <?php require '../includes/header.php'; ?>

</head>
<body class="bg-dark">

<!--FETCH NAVBAR -->
<?php require BASE_PATH . '/includes/navbar.php'; ?>


<!--page content-->
<div class="container">
    <main id="home">
        <div class="text-center">
            <img src="<?php echo BASE_PATH ?>/assets/image/seku_logo.png" alt="">
        </div>

        <h2 class="text-center text-white">Book a session</h2>

        <div class="form-signin">
            <form action="" method="post">

                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput"
                           name="regNo" required>
                    <label for="floatingInput">Student / Employee Reg No.</label>
                </div>

                <div class="form-floating">
                    <input type="datetime-local" class="form-control" id="floatingTime"
                           name="timeSlot" required>
                    <label for="floatingTime">Time</label>
                </div>

                <div class="form-floating">
                    <select name="selectResource" class="form-control" id="floatingResource" required>
                        <option value="">Select Resource</option>
                        <option value="studySpace">Study Space</option>
                        <option value="computer">Computer</option>
                    </select>
                    <label for="floatingResource">Resource</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Book Session</button>
            </form>
        </div>
    </main>
</div>


<!-- FETCH FOOTER -->
<?php require BASE_PATH . '/includes/footer.php' ?>
</body>
</html>