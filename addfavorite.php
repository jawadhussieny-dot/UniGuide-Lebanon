<?php
// addfavorite.php
// Adds an item to favorites

require_once 'connection.php';

$user_id   = $_GET['user_id'];
$item_type = $_GET['item_type'];
$item_id   = $_GET['item_id'];
$item_name = $_GET['item_name'];

$check = "select * from favorites where user_id='$user_id'
          and item_type='$item_type' and item_id='$item_id'";
$check_result = mysqli_query($con, $check);

if (mysqli_num_rows($check_result) > 0) {
    echo "exists";
} else {
    $query = "insert into favorites(user_id, item_type, item_id, item_name)
              values('$user_id', '$item_type', '$item_id', '$item_name')";

    if (mysqli_query($con, $query)) {
        echo mysqli_insert_id($con);
    } else {
        echo "-1";
    }
}
?>