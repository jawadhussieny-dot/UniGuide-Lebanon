<?php
// signup.php
// Creates a new user account

require_once 'connection.php';

$username = $_GET['username'];
$email    = $_GET['email'];
$password = $_GET['password'];

$password_hash = hash('sha256', $password);

$check = "select * from users where username='$username'";
$check_result = mysqli_query($con, $check);

if (mysqli_num_rows($check_result) > 0) {
    echo "exists";
} else {
    $query = "insert into users(username, email, password_hash)
              values('$username', '$email', '$password_hash')";

    if (mysqli_query($con, $query)) {
        echo mysqli_insert_id($con);
    } else {
        echo "-1";
    }
}
?>