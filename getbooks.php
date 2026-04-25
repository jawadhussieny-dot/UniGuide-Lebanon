<?php
// getbooks.php
// Returns books for a specific major

require_once 'connection.php';

$major_id = $_GET['major_id'];

$query = "select * from books where major_id='$major_id'";
$result = mysqli_query($con, $query);

$return_array = array();

while ($row = mysqli_fetch_assoc($result)) {
    $row_array['id']        = $row['id'];
    $row_array['major_id']  = $row['major_id'];
    $row_array['book_name'] = $row['book_name'];
    $row_array['author']    = $row['author'];
    array_push($return_array, $row_array);
}

echo json_encode($return_array);
?>