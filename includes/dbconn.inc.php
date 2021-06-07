<?php
$servername = "localhost";
$username = "root";
$dbpwd = "";
$dbname = "librarysystem";

$conn = mysqli_connect($servername, $username, $dbpwd, $dbname);

if(!$conn){
    echo "<script> alert('Database connection error, check your internet and try again') </script>";
}