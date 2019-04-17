<?php
/**
 * FINDING database
 * WHERE nama and prody LIKE parameter
 * url.com/find=?
 * url.com/category=?
 * url.com/category=Yogi&find=Arif
 */

/**
 * use above parameter inside query
 * $resultFind for category=all and value $find_skill
 * in the main.php
 */
$result = mysqli_query($CONN, "SELECT
        ms.nim, ms.nama, ms.tgl_lahir, ms.agama, ms.alamat, jur.nm_jur
    FROM
        jurusan jur, mhs ms, prody pr
    WHERE
        jur.kd_jur = pr.kd_jur AND
        pr.kd_prody = ms.kd_prody AND
        (ms.nama LIKE '%$find_skill%' OR ms.alamat LIKE '%$find_skill%')");
