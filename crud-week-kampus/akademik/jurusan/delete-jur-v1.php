<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hapus Data Jurusan</title>
</head>

<body>
    <?php
    include_once('../../_config/config.php');

    // ?kd_jur = TI
    $kd_jur = $_GET['kd_jur'];

    $query_show = "SELECT * FROM prody WHERE kd_jur='$kd_jur'";
    $hasil = mysqli_query($conncrud, $query_show);
    $record = mysqli_num_rows($hasil);

    // ?rec
    if ($record < 1) {

        $query = "DELETE FROM jurusan WHERE kd_jur='$kd_jur'";
        mysqli_query($conncrud, $query);

        ?>
        <script language='Javascript'>
            ;
            (window.alert('Data sudah Terhapus'))
        </script>";

        <script language='javascript'>
            location.href = 'view_jurusan.php'
        </script>";
    <?php
} else {
    ?>
        ?>
        "<script language='Javascript'>
            ;
            (window.alert('Data tidak Terhapus, Karena sedang di pakai table prody'))
        </script>";

        "<script language='javascript'>
            location.href = 'view_jurusan.php'
        </script>";
    <?php
}
?>

</body>

</html>