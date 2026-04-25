<?php
// login.php
// Verifies username + password

require_once 'connection.php';

$username = $_GET['username'];
$password = $_GET['password'];

$password_hash = hash('sha256', $password);

$query = "select * from users where username='$username'
          and password_hash='$password_hash'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $user = array();
    $user['id']                  = $row['id'];
    $user['username']            = $row['username'];
    $user['email']               = $row['email'];
    $user['selected_university'] = $row['selected_university'];
    echo json_encode($user);
} else {
    echo "-1";
}
?>