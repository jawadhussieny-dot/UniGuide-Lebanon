<?php
// getfavorites.php
// Returns favorites for a user

require_once 'connection.php';

$user_id = $_GET['user_id'];

$query = "select * from favorites where user_id='$user_id'";
$result = mysqli_query($con, $query);

$return_array = array();

while ($row = mysqli_fetch_assoc($result)) {
    $row_array['id']        = $row['id'];
    $row_array['user_id']   = $row['user_id'];
    $row_array['item_type'] = $row['item_type'];
    $row_array['item_id']   = $row['item_id'];
    $row_array['item_name'] = $row['item_name'];
    array_push($return_array, $row_array);
}

echo json_encode($return_array);
?>