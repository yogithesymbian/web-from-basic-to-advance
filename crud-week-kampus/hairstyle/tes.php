<?php
include_once('../_config/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM produk";
    $hasil = mysqli_query($conncrud, $query);
    while ($row = mysqli_fetch_row($hasil)) {
        echo "
        <h3>$row[0]</h3>
        ";
    }
    ?>
    <?php
    $query = "SELECT * FROM profiles";
    $hasil = mysqli_query($conncrud, $query);
    while ($row = mysqli_fetch_row($hasil)) {
        ?>
        <h3> <?php echo $row[0] ?> </h3>
        <br>
    <?php
}
?>
</body>

</html>