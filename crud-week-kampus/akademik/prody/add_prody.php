<?php include_once('../../_header.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <br>
            <h1>Add New Record</h1>
            <p></p>
            <?php
            $con = mysqli_connect("localhost", "root", "", "ti_4a_2019");
            ?>
            <form action="add_prody.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="kode-prody" class="control-label col-sm-2">Kode Prody</label>
                    <div class="col-sm-10">
                        <input type="text" name="kd_prody" id="id_kd_prody" class="form-control" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nama-prody" class="control-label col-sm-2">Nama Prody</label>
                    <div class="col-sm-10">
                        <input type="text" name="nm_prody" id="id_nm_prody" class="form-control" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nama-prody" class="control-label col-sm-2">Jurusan</label>
                    <div class="col-sm-10">
                        <!-- <input type="text" name="nm_jur" id="id_nm_jur" class="form-control" required autofocus> -->
                        <select name="kd_jur" id="id_kd_jur" class="form-control col-md-8">
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "ti_4a_2019");
                            $query = "SELECT
                                                *
                                            FROM
                                                jurusan;";

                            $hasil = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($hasil)) {
                                echo "<option value='$row[kd_jur]'>" . $row['kd_jur'] . " - " . $row['nm_jur'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" value="Save" class="btn btn-primary">
                        <a href="<?= base_url('akademik/prody/view_prody.php') ?>" class="btn btn-warning"> Back </a>
                    </div>
                </div>
            </form>

            <!-- PHP SCRIPT HANDLE ADD NEW RECORD -->
            <?php
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
            $kode = $_POST['kd_prody'];
            $name = $_POST['nm_prody'];
            $jurusan = $_POST['kd_jur'];


            if (isset($kode)) {
                $query = "INSERT INTO prody VALUES ('$kode', '$name', '$jurusan')";
                $sql = mysqli_query($con, $query);
                if ($sql == 1) {
                    ?>
                    <script language='Javascript'>
                        ;
                        (window.alert('Data sudah tersimpan'))
                    </script>";

                    <script language='javascript'>
                        location.href = 'view_prody.php'
                    </script>";
                <?php
            } else {
                ?>
                    "<script language='Javascript'>
                        ;
                        (window.alert('Data tidak tersimpan'))
                    </script>";

                    "<script language='javascript'>
                        location.href = 'add_prody.php'
                    </script>";
                <?php
            }
        }

        ?>
        </div>
    </div>
</div>


<?php include_once('../../_footer.php'); ?>