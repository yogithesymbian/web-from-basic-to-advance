<?php
include_once('../_config/config.php');

/**
 * query
 * ?view pegawai
 */
$resultpegawai = mysqli_query($conncrud, "SELECT
                                        *
                                    FROM
                                        pegawai
                                ");
$resultpendidikan = mysqli_query($conncrud, "SELECT
                                        *
                                    FROM
                                        pendidikan
                                ");
$resultkab = mysqli_query($conncrud, "SELECT
                                        *
                                    FROM
                                        kab_kota
                                ");
$resultprov = mysqli_query($conncrud, "SELECT
                                        *
                                    FROM
                                        provinsi
                                ");
$resultdep = mysqli_query($conncrud, "SELECT
                                        *
                                    FROM
                                        departemen
                                ");
$resultdivisi = mysqli_query($conncrud, "SELECT
                                        *
                                    FROM
                                        divisi
                                ");
$resultpg = mysqli_query($conncrud, "SELECT
	pg.id_pegawai,
	pg.nm_pegawai,
	pg.tgl_lahir,
	pd.nm_pendidikan,
	pg.agama,
	pg.alamat,
	kt.nm_kabkota,
	pr.nm_provinsi,
	dp.nm_dept,
	dv.nm_divisi,
	pg.`status`,
	pg.jml_anak
FROM
	pegawai pg,
	pendidikan pd,
	kab_kota kt,
	provinsi pr,
	departemen dp,
	divisi dv
WHERE
	pd.id_pendidikan = pg.id_pendidikan
	AND
	kt.kd_kabkota = pg.kd_kabkota
	AND
	pr.kd_provinsi = pg.kd_provinsi
	AND
	dp.id_dept = pg.id_dept
	AND
	dv.id_divisi = pg.id_divisi
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
