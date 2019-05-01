<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hapus Data Prody</title>
</head>

<body>
    <?php
    include_once('../../_config/config.php');

    $kd_prody = $_GET['kd_prody'];

    $query_show = "SELECT * FROM mhs WHERE kd_prody='$kd_prody'";
    $hasil = mysqli_query($conncrud, $query_show);
    $record = mysqli_num_rows($hasil);

    if ($record < 1) {

        $query = "DELETE FROM prody WHERE kd_prody='$kd_prody'";
        mysqli_query($conncrud, $query);

        ?>
        <script language='Javascript'>
            ;
            (window.alert('Data sudah Terhapus'))
        </script>";

        <script language='javascript'>
            location.href = 'view_prody.php'
        </script>";
    <?php
} else {
    ?>
        ?>
        "<script language='Javascript'>
            ;
            (window.alert('Data tidak Terhapus, Karena sedang di pakai table'))
        </script>";

        "<script language='javascript'>
            location.href = 'view_prody.php'
        </script>";
    <?php
}
?>

</body>

</html>