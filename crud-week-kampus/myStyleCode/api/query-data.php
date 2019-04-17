<?php
# database connection configuration
include_once("../api/connection.php");
/**
 * result data category by jurusan
 * TABLE jurusan
 */
$reportYogi = mysqli_query($CONN, "SELECT
        pj.Id_penjualan,
        pj.Tanggal,
        mj.Nama_majalah,
        dt.Jumlah,
        mj.Harga
    FROM
        penjualan pj,
        detail dt,
        majalah mj
    WHERE
        pj.Id_penjualan = dt.Id_penjualan AND
        mj.Id_majalah = dt.Id_majalah;");

$reportYogiMember = mysqli_query($CONN, "SELECT
        pj.Id_penjualan, pj.Tanggal, mj.Nama_majalah, dt.Jumlah, mj.Harga
    FROM
        penjualan pj,
        detail dt,
        majalah mj,
        member mm
    WHERE
        pj.Id_penjualan = dt.Id_penjualan AND
        mj.Id_majalah = dt.Id_majalah AND
        mm.Id_member = pj.Id_member AND
        mm.Id_member = '$member';");
$reportMember = mysqli_query($CONN, "SELECT
        mm.Id_member
    FROM
        member mm;");

$reportYogiDuaTiga = mysqli_query($CONN, "SELECT
        pj.Id_penjualan, 
        mm.Nama_member, 
        pj.Tanggal, 
        mj.Nama_majalah, 
        mj.Penerbit, 
        dt.Harga, 
        dt.Jumlah, 
        pj.Harga_total
    FROM
        penjualan pj,
        detail dt,
        majalah mj,
        member mm
    WHERE
        pj.Id_penjualan = dt.Id_penjualan AND
        mj.Id_majalah = dt.Id_majalah AND
        mm.Id_member = pj.Id_member;");


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

$editView = mysqli_query($CONN, "UPDATE mhs ms, jurusan jur, prody pr
        ms.nim, ms.nama, ms.tgl_lahir, ms.agama, ms.alamat, jur.nm_jur
     SET
        nim='$nim',nama='$nama',tgl_lahir='$tgl_lahir',agama='$agama',alamat='$alamat',jurusan='$jurusan'
     WHERE
         jur.kd_jur = pr.kd_jur AND
         pr.kd_prody = ms.kd_prody AND
         ms.nim = '$nim'");

# this code for the result with json
// while ($row = mysqli_fetch_assoc($result)) {
//     # code...
//     $resultdata[] = $row;
// }
# show json
// echo json_encode(array('result' => $resultdata));
