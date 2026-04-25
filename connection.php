<?php
// connection.php
// Connects PHP to MySQL database

$server = "localhost";
$user = "root";
$password = "";
$db = "uniguide";

$con = mysqli_connect($server, $user, $password, $db);

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}
?>