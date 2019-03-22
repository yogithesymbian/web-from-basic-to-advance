<?php
/**
 * this query is like above code , BUT
 * the query using VALUE by passing between
 * category and find_skill
 * in the find.php
 */

$result = mysqli_query($CONN, "SELECT
        ms.nim, ms.nama, ms.tgl_lahir, ms.agama, ms.alamat, jur.nm_jur
    FROM
        jurusan jur, mhs ms, prody pr
    WHERE
        jur.kd_jur = pr.kd_jur AND
        pr.kd_prody = ms.kd_prody AND
        jur.nm_jur LIKE '%$category%' AND
        (ms.nama LIKE '%$find_skill%' OR ms.alamat LIKE '%$find_skill%')");
