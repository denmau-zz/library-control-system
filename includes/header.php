<!--This file should be wrapped in <head> </head> in the parent file -->
<?php
const BASE_PATH = "http://localhost/denmau";
?>

<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>
    <?php
    // if page_title is supplied as a variable in the parent file,
    // use it; else use the default 'Library Control System'

    echo is_null($page_title) ? 'Library Control System' : $page_title . ' &middot Library Control System'
    ?>
</title>
<link rel="shortcut icon" type="image/ico" href="<?php echo BASE_PATH ?>/assets/image/favicon.ico">
<!--    Bootstrap-->
<link rel="stylesheet" href="<?php echo BASE_PATH ?>/assets/css/bootstrap.min.css">
<!--    CSS -->
<link rel="stylesheet" href="<?php echo BASE_PATH ?>/assets/css/style.css">
