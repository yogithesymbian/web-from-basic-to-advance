<?php
include_once('../_config/config.php');
/**
 * query
 * ?edit-jur.php
 * show nama jurusan
 */
$result = mysqli_query($conncrud, "SELECT
                                        *
                                    FROM
                                        jurusan jur
                                ");
// just query
$query = "SELECT * FROM jurusan";

// query edit a lot of data
$queryedit = "SELECT
        ms.nim,
        ms.nama,
        ms.tgl_lahir,
        ms.agama,
        ms.alamat,
        pr.kd_prody,
        pr.nm_prody
    FROM
        jurusan jur,
        mhs ms,
        prody pr
    WHERE
        jur.kd_jur = pr.kd_jur
        AND
        pr.kd_prody = ms.kd_prody
        AND
        ms.nim = '$nim'
        ";

// // query edit !a lot of data
// $queryeditone = "SELECT
//         *
//     FROM
//         jurusan jur
//     WHERE
//         jur.kd_jur = '$kd_jur'
//         ";
