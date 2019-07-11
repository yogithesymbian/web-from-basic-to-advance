<?php
include_once('../_config/config.php');
include_once('../_query/_query1.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="<?= base_url('_assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <title>Edit - Pegawai</title>
</head>

<body>

    <!-- generic -->
    <div class="container">
        <h1 class="text-primary text-center">Add Pegawai</h1>
        <br>
        <form action="add.php" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="id-pegawai" class="col-sm-2 control-label">ID Pegawai</label>
                <div class="col-sm-10">
                    <input type="text" name="id_pegawai" id="id_id_pegawai" class="form-control" required autofocus>
                </div>
            </div>

            <div class="form-group">
                <label for="nama-pegawai" class="control-label col-sm-2">Nama Pegawai</label>
                <div class="col-sm-10">
                    <input type="text" name="nm_pegawai" id="id_nm_pegawai" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="nama-pegawai" class="control-label col-sm-2">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" name="tgl_lahir" id="id_nm_pegawai" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="nama-pegawai" class="control-label col-sm-2">Pendidikan</label>
                <div class="col-sm-10">
                    <select name="id_pendidikan" id="id_pendidikan_id" class="form-control">
                        <?php
                        while ($datapendik = mysqli_fetch_row($resultpendidikan)) {
                            # code...
                            ?>
                            <option value="<?php echo $datapendik[0] ?>"> <?php echo $datapendik[0] ?> - <?php echo $datapendik[1] ?></option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="kode-jurusan" class="control-label col-sm-2">Agama</label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label><input type="radio" name="agama" value="1">1. ISLAM</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="agama" value="2">2. KRISTEN</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="agama" value="3">3. HINDU</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="agama" value="4">4. BUDHA</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="agama" value="5">5. PROTESTAN</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="nama-pegawai" class="control-label col-sm-2">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" name="alamat" id="id_nm_pegawai" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="nama-pegawai" class="control-label col-sm-2">Kode Kabupaten</label>
                <div class="col-sm-10">
                    <select name="kd_kabkota" id="id_pendidikan_id" class="form-control">
                        <?php
                        while ($resultkab1 = mysqli_fetch_row($resultkab)) {
                            # code...
                            ?>
                            <option value="<?php echo $resultkab1[0] ?>"> <?php echo $resultkab1[0] ?> - <?php echo $resultkab1[1] ?></option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="nama-pegawai" class="control-label col-sm-2">Kode Provinsi</label>
                <div class="col-sm-10">
                    <select name="kd_provinsi" id="id_pendidikan_id" class="form-control">
                        <?php
                        while ($resultkab1 = mysqli_fetch_row($resultprov)) {
                            # code...
                            ?>
                            <option value="<?php echo $resultkab1[0] ?>"> <?php echo $resultkab1[0] ?> - <?php echo $resultkab1[1] ?></option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="nama-pegawai" class="control-label col-sm-2">ID Departmen</label>
                <div class="col-sm-10">
                    <select name="id_dept" id="id_pendidikan_id" class="form-control">
                        <?php
                        while ($resultkab1 = mysqli_fetch_row($resultdep)) {
                            # code...
                            ?>
                            <option value="<?php echo $resultkab1[0] ?>"> <?php echo $resultkab1[0] ?> - <?php echo $resultkab1[1] ?></option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="nama-pegawai" class="control-label col-sm-2">ID Divisi</label>
                <div class="col-sm-10">
                    <select name="id_divisi" id="id_pendidikan_id" class="form-control">
                        <?php
                        while ($resultkab1 = mysqli_fetch_row($resultdivisi)) {
                            # code...
                            ?>
                            <option value="<?php echo $resultkab1[0] ?>"> <?php echo $resultkab1[0] ?> - <?php echo $resultkab1[1] ?></option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="nama-pegawai" class="control-label col-sm-2">Status</label>
                <div class="col-sm-10">
                    <select name="status" id="id_pendidikan_id" class="form-control">
                        <option value="1"> 1 - Single</option>
                        <option value="2"> 2 - Menikah</option>
                        <option value="3"> 3 - Dude</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="nama-pegawai" class="control-label col-sm-2">Jumlah Anak</label>
                <div class="col-sm-10">
                    <select name="jml_anak" id="id_pendidikan_id" class="form-control">
                        <option value="1"> 0 Anak</option>
                        <option value="2"> 1 Anak</option>
                        <option value="3"> 2 Anak</option>
                        <option value="4"> 3 Anak</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" value="Add" class="btn btn-success">
                    <a href="<?= base_url('index.php') ?>" class="btn btn-warning"> <span class="glyphicon glyphicon-circle-arrow-left"></span> Back </a>
                </div>
            </div>
        </form>
    </div>
    <!-- end of generic -->
    <!-- PHP SCRIPT HANDLE ADD NEW RECORD -->
    <?php
    $id_pegawai = $_POST['id_pegawai'];
    $nm_pegawai = $_POST['nm_pegawai'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $id_pendidikan = $_POST['id_pendidikan'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $kd_kabkota = $_POST['kd_kabkota'];
    $id_dept = $_POST['id_dept'];
    $id_divisi = $_POST['id_divisi'];
    $status = $_POST['status'];
    $jml_anak = $_POST['jml_anak'];


    if (isset($kode)) {
        $query = "INSERT INTO pegawai VALUES ('$id_pegawai', '$nm_pegawai','$tgl_lahir','$id_pendidikan','$agama','$alamat','$kd_kabkota','$id_dept','$id_divisi','$status','$jml_anak')";
        $sql = mysqli_query($conncrud, $query);
        // Jika data disimpan value sql = 1
        // Jika data tidak tersimpan value sql = 0
        if ($sql == 1) {
            ?>
            <script language='Javascript'>
                ;
                (window.alert('Data sudah tersimpan'))
            </script>";

            <script language='javascript'>
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
                location.href = '<?= base_url('/_crud/add.php') ?>'
            </script>";
        <?php
    }
}

?>
    <!-- end of script for add -->
</body>

</html>