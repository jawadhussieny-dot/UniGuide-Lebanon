<?php
// getdorms.php
// Returns dorms for a specific university

require_once 'connection.php';

$university_id = $_GET['university_id'];

$query = "select * from dorms where university_id='$university_id'";
$result = mysqli_query($con, $query);

$return_array = array();

while ($row = mysqli_fetch_assoc($result)) {
    $row_array['id']            = $row['id'];
    $row_array['university_id'] = $row['university_id'];
    $row_array['dorm_name']     = $row['dorm_name'];
    $row_array['location']      = $row['location'];
    $row_array['price_range']   = $row['price_range'];
    array_push($return_array, $row_array);
}

echo json_encode($return_array);
?>