<!--Should be wrapped in a <body> tag -->
<?php
const BASE_PATH = 'http://localhost/denmau';
?>

<div class="container">
    <header class="d-flex flex-wrap justify-content-between py-3 mb-4 border-bottom">
        <a class="navbar-brand" href="<?php echo BASE_PATH ?>/home.php">Library Control System</a>

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_PATH ?>/home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_PATH ?>/booking">Booking & Enquiries</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_PATH ?>/about">About</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_PATH ?>/newsandevents/index.php">News & Events</a>
            </li>
        </ul>
    </header>
</div>


<!--<div class="container-fluid bg-dark">-->
<!--    <nav class="navbar navbar-expand-lg navbar-dark">-->

<!--        <div class="container">-->
<!--            <a class="navbar-brand" href="--><?php //echo BASE_PATH?><!--">Library Control System</a>-->
<!---->
<!--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"-->
<!--                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                <span class="navbar-toggler-icon"></span>-->
<!--            </button>-->
<!---->
<!---->
<!--            <div class="collapse navbar-collapse" id="navbarText">-->
<!--                <ul class="navbar-nav me-auto mb-2 mb-lg-0">-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link active" href="--><?php //echo BASE_PATH?><!--">Home</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link active" href="--><?php //echo BASE_PATH?><!--/home.php">New Home</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //echo BASE_PATH?><!--/booking">Booking & Enquiries</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //echo BASE_PATH?><!--/about">About</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //echo BASE_PATH?><!--/librarian">Librarian</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //echo BASE_PATH?><!--">News & Events</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </nav>-->
<!--</div>-->
