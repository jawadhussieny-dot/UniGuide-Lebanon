<?php
// getuniversities.php
// Returns all universities

require_once 'connection.php';

$query = "select * from universities";
$result = mysqli_query($con, $query);

$return_array = array();

while ($row = mysqli_fetch_assoc($result)) {
    $row_array['id']          = $row['id'];
    $row_array['name']        = $row['name'];
    $row_array['city']        = $row['city'];
    $row_array['website']     = $row['website'];
    $row_array['description'] = $row['description'];
    array_push($return_array, $row_array);
}

echo json_encode($return_array);
?>