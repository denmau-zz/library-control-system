<!doctype html>
<html lang="en">
<head>
    <title>About &middot Library Control System</title>

    <!--Fetch Header file-->
    <?php require '../includes/header.php';
    $active_class = "booking"; ?>

</head>
<body style="background-color: darkgreen; color: black;">

<!--FETCH NAVBAR -->
<?php require BASE_PATH . '/includes/navbar.php'; ?>


<!--page content-->
<div class="container">
    <main id="home">
        <div class="text-center">
            <img src="<?php echo BASE_PATH ?>/assets/image/seku_logo.png" alt="">
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h2 class="text-center text-black">Book a session</h2>
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
            </div>

            <div class="col-sm-12 col-md-6">
                <h2 class="text-center text-black">Got a question?</h2>
                <form action="" method="post">

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput"
                               name="regNo" required>
                        <label for="floatingInput">Reg No.</label>
                    </div>

                    <div>
                        <textarea name="query" class="form-control" id="queryTextArea" cols="30" rows="10"
                                  required placeholder="Query"></textarea>
                    </div>

                    <button class="w-100 btn btn-lg btn-secondary mt-2" type="submit">Send Query</button>
                </form>
            </div>
        </div>

    </main>
</div>


<!-- FETCH FOOTER -->
<?php require BASE_PATH . '/includes/footer.php' ?>
</body>
</html>