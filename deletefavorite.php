<?php
// deletefavorite.php
// Deletes a favorite by its id

require_once 'connection.php';

$id = $_GET['id'];

$query = "delete from favorites where id='$id'";

if (mysqli_query($con, $query)) {
    echo "success";
} else {
    echo "fail";
}
?>