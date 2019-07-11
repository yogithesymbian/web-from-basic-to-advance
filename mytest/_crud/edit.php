<?php
include_once('../_config/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // get data from index
    $id_pegawai = $_GET['id_pegawai'];
    // on ../_config/config.php i have only query select by kd_jur
    // lets combine the query with conncrud {connect db}
    // no, i don't
    // query edit !a lot of data
    $queryeditone = "SELECT
        *
    FROM
        pegawai pg
    WHERE
        pg.kd_pegawai = '$id_pegawai'
        ";
    $resultones = mysqli_query($conncrud, $queryeditone);
    // show the data with loop by where kd_jur
    while ($dataedit = mysqli_fetch_row($resultones)) {
        $id_pegawai = $dataedit[0];
        $nm_pegawai = $dataedit[1];
    }

    ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="<?= base_url('_assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <title>Edit</title>
</head>

<body>

    <div class="conatiner">
        <h1 class="text-primary text-center">Add Pegawai</h1>
        <br>

        <!-- generic -->
        <form action="edit.php" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="kode-jurusan" class="col-sm-2 control-label">Kode Pegawai</label>
                <div class="col-sm-10">
                    <input type="text" name="kd_jur" id="id_kd_jur" class="form-control" value="<?php echo $id_pegawai; ?>" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="nama-jurusan" class="control-label col-sm-2">Nama Pegawai</label>
                <div class="col-sm-10">
                    <input type="text" name="nm_jur" id="id_nm_jur" class="form-control" value="<?php echo $nm_pegawai; ?>" required autofocus>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" value="Update" class="btn btn-success">
                    <a href="<?= base_url('index.php') ?>" class="btn btn-warning"> <span class="glyphicon glyphicon-circle-arrow-left"></span> Back </a>
                </div>
            </div>
        </form>
    </div>

    <!-- end of generic -->
    <!-- script for edit -->
    <?php
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