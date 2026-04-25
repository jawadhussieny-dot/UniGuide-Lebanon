<?php
// getmajors.php
// Returns majors for a specific university

require_once 'connection.php';

$university_id = $_GET['university_id'];

$query = "select * from majors where university_id='$university_id'";
$result = mysqli_query($con, $query);

$return_array = array();

while ($row = mysqli_fetch_assoc($result)) {
    $row_array['id']            = $row['id'];
    $row_array['university_id'] = $row['university_id'];
    $row_array['major_name']    = $row['major_name'];
    $row_array['faculty']       = $row['faculty'];
    $row_array['duration']      = $row['duration'];
    array_push($return_array, $row_array);
}

echo json_encode($return_array);
?>