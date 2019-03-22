<?php

require_once('connection.php');

# Result for Saving an array
$result = array();

# . . todo query to database api
$query = mysqli_query($CONN, "SELECT pr.kd_prody, pr.nm_prody, jur.nm_jur FROM jurusan jur, prody pr WHERE jur.kd_jur = pr.kd_jur");

while ($row = mysqli_fetch_assoc($query)) {
    # code...
    $result[] = $row;
}

echo json_encode(array('result' => $result));
