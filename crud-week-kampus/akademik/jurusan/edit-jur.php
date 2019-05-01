<?php include_once('../../_header.php'); ?>

<?php
include_once('../_config/config.php');
?>

<?php
$kode = $_GET['kd_jur'];
$nama = $_GET['nm_jur'];
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-primary">Add New Record</h1>
            <?php
            // $con = mysqli_connect("localhost", "root", "", "ti_4a_2019");
            ?>
            <form action="edit-jur.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="kode-jurusan" class="col-sm-2 control-label">Kode Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" name="kd_jur" id="id_kd_jur" class="form-control" value="<?php echo $kode; ?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nama-jurusan" class="control-label col-sm-2">Nama Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" name="nm_jur" id="id_nm_jur" class="form-control" value="<?php echo $nama; ?>" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" value="Save" class="btn btn-primary">
                        <a href="<?= base_url('akademik/jurusan/view_jurusan.php') ?>" class="btn btn-warning"> Back </a>
                    </div>
                </div>
            </form>

            <!-- PHP SCRIPT HANDLE ADD NEW RECORD -->
            <?php
            // error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
            $kd_jur = $_POST['kd_jur'];
            $nm_jur = $_POST['nm_jur'];

            // $kd_jurup = $_POST['kd_jur'];
            // $nm_jurup = $_POST['nm_jur'];


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
                        location.href = 'view_jurusan.php'
                    </script>";
                <?php
            } else {
                ?>
                    "<script language='Javascript'>
                        ;
                        (window.alert('Data tidak tersimpan'))
                    </script>";

                    "<script language='javascript'>
                        location.href = 'view_jurusan.php'
                    </script>";
                <?php
            }
        }

        ?>
        </div>
    </div>
</div>

<?php include_once('../../_footer.php'); ?>