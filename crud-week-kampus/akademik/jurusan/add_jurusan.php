<?php include_once('../../_header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Add New Record</h1>
            <p></p>
            <?php
            $con = mysqli_connect("localhost", "root", "", "ti_4a_2019");
            ?>
            <form action="add_jurusan.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="kode-jurusan" class="col-sm-2 control-label">Kode Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" name="kd_jur" id="id_kd_jur" class="form-control" required autofocus>
                    </div>
                    <!-- <table>
                            <tr> <label for="kode-jurusan">Kode Jurusan : </label> </tr>
                            <tr> &nbsp; <input type="text" name="kd_jur" id="id_kd_jur" class="col-md-4" required autofocus> </tr>
                        </table> -->
                </div>

                <div class="form-group">
                    <label for="nama-jurusan" class="control-label col-sm-2">Nama Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" name="nm_jur" id="id_nm_jur" class="form-control" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" value="Save" class="btn btn-success">
                        <a href="<?= base_url('akademik/jurusan/view_jurusan.php') ?>" class="btn btn-warning"> <span class="glyphicon glyphicon-circle-arrow-left"></span> Back </a>
                    </div>
                </div>
            </form>

            <!-- PHP SCRIPT HANDLE ADD NEW RECORD -->
            <?php
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
            $kode = $_POST['kd_jur'];
            $name = $_POST['nm_jur'];

            // $kode = isset($_POST['kd_jur']) ? $_POST['kd_jur'] : '';
            // $name = isset($_POST['nm_jur']) ? $_POST['nm_jur'] : '';

            if (isset($kode)) {
                $query = "INSERT INTO jurusan VALUES ('$kode', '$name')";
                $sql = mysqli_query($con, $query);
                // Jika data disimpan value sql = 1
                // Jika data tidak tersimpan value sql = 0
                if ($sql == 1) {
                    ?>
                    <script language='Javascript'>
                        ;
                        (window.alert('Data sudah tersimpan'))
                    </script>";

                    <script language='javascript'>
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
                        location.href = 'add_jurusan.php'
                    </script>";
                <?php
            }
        }

        ?>
        </div>
    </div>
</div>

<?php include_once('../../_footer.php'); ?>