<?php

require_once('connection.php');

# Result for Saving an array
$result = array();

# . . todo query to database api
$query = mysqli_query($CONN, "SELECT ms.nim, ms.nama, ms.tgl_lahir, ms.agama, jur.kd_jur, jur.nm_jur FROM jurusan jur, mhs ms, prody pr WHERE jur.kd_jur = pr.kd_jur AND pr.kd_prody = ms.kd_prody");

while ($row = mysqli_fetch_assoc($query)) {
    # code...
    $result[] = $row;
}

echo json_encode(array('result' => $result));
