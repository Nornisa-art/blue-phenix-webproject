<?php
$host = "localhost";
$user = "freshfarm";
$password = "administrator";
$dbname = "db_freshfarm";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>