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

    $nim = $_GET['nim'];

    $query_del = "DELETE FROM mhs WHERE nim='$nim'";
    $hasil = mysqli_query($conncrud, $query_del);

    if ($hasil == 1) {

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
            (window.alert('Data tidak Terhapus'))
        </script>";

        "<script language='javascript'>
            location.href = 'view_jurusan.php'
        </script>";
    <?php
}


?>

</body>

</html>