<?php
// getstudyplan.php
// Returns the study plan for a specific major

require_once 'connection.php';

$major_id = $_GET['major_id'];

$query = "select * from study_plan where major_id='$major_id'
          order by year, semester";
$result = mysqli_query($con, $query);

$return_array = array();

while ($row = mysqli_fetch_assoc($result)) {
    $row_array['id']          = $row['id'];
    $row_array['major_id']    = $row['major_id'];
    $row_array['year']        = $row['year'];
    $row_array['semester']    = $row['semester'];
    $row_array['course_name'] = $row['course_name'];
    array_push($return_array, $row_array);
}

echo json_encode($return_array);
?>