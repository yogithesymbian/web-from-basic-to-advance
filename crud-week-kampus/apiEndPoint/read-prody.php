<?php

require_once('connection.php');

# Result for Saving an array
$result = array();

# . . todo query to database api
$query = mysqli_query($CONN, "SELECT * FROM prody");

while ($row = mysqli_fetch_assoc($query)) {
    # code...
    $result[] = $row;
}

echo json_encode(array('result' => $result));
