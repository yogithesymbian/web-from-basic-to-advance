<?php
include_once('../_config/config.php');
include_once('_query/_query1.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // get data from index
    $kd_jur = $_GET['kd_jur'];
    // on ../_config/config.php i have only query select by kd_jur
    // lets combine the query with conncrud {connect db}
    // no, i don't
    // query edit !a lot of data
    $queryeditone = "SELECT
        *
    FROM
        jurusan jur
    WHERE
        jur.kd_jur = '$kd_jur'
        ";
    $result = mysqli_query($conncrud, $queryeditone);
    // show the data with loop by where kd_jur
    while ($dataedit = mysqli_fetch_array($result)) {
        $kd_jur = $dataedit['kd_jur'];
        $nm_jur = $dataedit['nm_jur'];
    }

    ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit</title>
</head>

<body>
    <!-- data get is <?php echo $kd_jur ?> -->

    <!-- generic -->
    <form action="edit.php" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="kode-jurusan" class="col-sm-2 control-label">Kode Jurusan</label>
            <div class="col-sm-10">
                <input type="text" name="kd_jur" id="id_kd_jur" class="form-control" value="<?php echo $kd_jur; ?>" readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="nama-jurusan" class="control-label col-sm-2">Nama Jurusan</label>
            <div class="col-sm-10">
                <input type="text" name="nm_jur" id="id_nm_jur" class="form-control" value="<?php echo $nm_jur; ?>" required autofocus>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Update" class="btn btn-success">
                <a href="<?= base_url('index.php') ?>" class="btn btn-warning"> <span class="glyphicon glyphicon-circle-arrow-left"></span> Back </a>
            </div>
        </div>
    </form>
    <!-- end of generic -->
    <!-- script for edit -->
    <?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $kd_jur = $_POST['kd_jur'];
    $nm_jur = $_POST['nm_jur'];

    if (isset($kd_jur)) {
        $query = "UPDATE jurusan SET nm_jur='$nm_jur' WHERE kd_jur='$kd_jur'";
        $sql = mysqli_query($conncrud, $query);
        // Jika data disimpan value sql = 1
        // Jika data tidak tersimpan value sql = 0
        if ($sql == 1) {
            ?>
            "<script language='Javascript'>
                ;
                (window.alert('Data sudah tersimpan'))
            </script>";

            "<script language='javascript'>
                location.href = '<?= base_url('index.php') ?>'
            </script>";
        <?php
    } else {
        ?>
            "<script language='Javascript'>
                ;
                (window.alert('Data tidak tersimpan'))
            </script>";

            "<script language='javascript'>
                location.href = '<?= base_url('/_crud/edit.php') ?>'
            </script>";
        <?php
    }
}

?>
    <!-- end of script for edit -->
</body>

</html>