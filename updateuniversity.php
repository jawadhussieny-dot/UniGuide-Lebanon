<?php
// updateuniversity.php
// Updates the user's selected university

require_once 'connection.php';

$user_id    = $_GET['user_id'];
$university = $_GET['university'];

$query = "update users set selected_university='$university'
          where id='$user_id'";

if (mysqli_query($con, $query)) {
    echo "success";
} else {
    echo "fail";
}
?>