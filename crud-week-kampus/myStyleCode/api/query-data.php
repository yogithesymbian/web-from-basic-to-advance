<?php
 # database connection configuration
include_once("../api/connection.php");
/**
 * result data category by jurusan
 * TABLE jurusan
 */
$category = mysqli_query($CONN, "SELECT
        jur.nm_jur
    FROM
        jurusan jur ");
/**
 * result data list mahasiswa
 * NIM | NAMA | TANGGAL LAHIR | AGAMA | ALAMAT | NAMA-JURUSAN
 * TABLE mahasiswa dan TABLE jurusan
 * inner join jurusan -> prody -> mahasiswa [sql]
 */
$resultHome = mysqli_query($CONN, "SELECT
         ms.nim, ms.nama, ms.tgl_lahir, ms.agama, ms.alamat, jur.nm_jur
     FROM
         jurusan jur, mhs ms, prody pr
     WHERE
         jur.kd_jur = pr.kd_jur AND
         pr.kd_prody = ms.kd_prody");

# this code for the result with json
// while ($row = mysqli_fetch_assoc($result)) {
//     # code...
//     $resultdata[] = $row;
// }
# show json
// echo json_encode(array('result' => $resultdata));
