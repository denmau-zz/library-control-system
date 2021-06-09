<!--Should be wrapped in a <body> tag -->
<?php
const BASE_PATH = 'http://localhost/denmau';
?>

<div class="container">
    <header class="d-flex flex-wrap justify-content-between py-3 mb-4 border-bottom">
        <a class="navbar-brand" href="<?php echo BASE_PATH ?>/home.php">Library Control System</a>

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo BASE_PATH ?>/home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_PATH ?>/booking">Booking & Enquiries</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_PATH ?>/newsandevents">News & Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_PATH ?>/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_PATH ?>/helpline">Helpline</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_PATH ?>/accounts">Login</a>
            </li>
        </ul>
    </header>
</div>


