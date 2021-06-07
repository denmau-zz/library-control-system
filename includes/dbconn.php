<?php
$servername = "localhost" ;
$username = "root5" ;
$pwd = "12345" ;
$dbname = "tutorial" ;

$conn = mysqli_connect($servername, $username, $pwd, $dbname) ;
if(!$conn ){
    echo "<script>alert('connection errror')</script>" ;

}