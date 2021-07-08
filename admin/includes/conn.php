<?php
// $conn = new mysqli('localhost', 'root', '', 'libsystem');

// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }

// This environment variable is necessary when working with Heroku Db
// We will be using Heroku's Clear Database
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));

// To use LocalDB configuration, uncomment next line, otherwise make sure its commented
//$cleardb_url = null;

$host = $cleardb_url ? $cleardb_url["host"] : "localhost";
$user = $cleardb_url ? $cleardb_url["user"] : "root";
$pass = $cleardb_url ? $cleardb_url["pass"] : "root";
$dbname = $cleardb_url ? substr($cleardb_url["path"], 1) : "libsystem";

try {
	// Create connection
	$conn = new mysqli($host, $user, $pass, $dbname);

} catch (PDOException $e) {
	echo $error_message = "Connection failed: " . $e->getMessage();
	exit();
}