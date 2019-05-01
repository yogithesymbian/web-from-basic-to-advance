<?php include_once('../../_header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-primary">Add New Record</h1>
            <br>
            <?php
            $con = mysqli_connect("localhost", "root", "", "ti_4a_2019");
            ?>
            <form action="add_mahasiswa.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="Nim" class="control-label col-sm-2">Nim</label>
                    <div class="col-sm-10">
                        <input type="text" name="nim" id="id_kd_jur" class="form-control" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Nama" class="control-label col-sm-2">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" id="id_kd_jur" class="form-control" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="kode-jurusan" class="control-label col-sm-2">Tgl Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_lahir" id="id_kd_jur" class="form-control" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="kode-jurusan" class="control-label col-sm-2">Agama</label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label><input type="radio" name="agama" value="ISLAM">ISLAM</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="agama" value="KRISTEN">KRISTEN</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="agama" value="HINDU">HINDU</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="agama" value="BUDHA">BUDHA</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="agama" value="APA">APA</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat" class="control-label col-sm-2">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" id="id_alamat" id="id_kd_jur" cols="30" rows="10" class="form-control" required autofocus></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kode-jurusan" class="control-label col-sm-2">Prody</label>
                    <div class="col-sm-10">
                        <select name="kd_prody" id="id_kd_prody" class="form-control">
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "ti_4a_2019");
                            $query = "SELECT
                                                *
                                            FROM
                                                prody;";

                            $hasil = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($hasil)) {
                                echo "<option value=" . $row['kd_prody'] . ">" . $row['kd_prody'] . " - " . $row['nm_prody'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-offset-2 col-sm-10">
                        <input type="submit" value="Save" class="btn btn-primary">
                        <a href="<?= base_url('akademik/mhs/view_mhs.php') ?>" class="btn btn-warning"> Back </a>
                    </div>
                </div>
            </form>

            <!-- PHP SCRIPT HANDLE ADD NEW RECORD -->
            <?php
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];
            $nm_jur = $_POST['kd_prody'];

            // $kode = isset($_POST['kd_jur']) ? $_POST['kd_jur'] : '';
            // $name = isset($_POST['nm_jur']) ? $_POST['nm_jur'] : '';

            if (isset($nim)) {
                $query = "INSERT INTO
                        mhs
                    VALUES ('$nim', '$nama', '$tgl_lahir', '$agama', '$alamat', '$nm_jur')";
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
                        location.href = 'view_mhs.php'
                    </script>";
                <?php
            } else {
                ?>
                    "<script language='Javascript'>
                        ;
                        (window.alert('Data tidak tersimpan'))
                    </script>";

                    "<script language='javascript'>
                        location.href = 'add_mahasiswa.php'
                    </script>";
                <?php
            }
        }

        ?>
        </div>
    </div>
</div>

<?php include_once('../../_footer.php'); ?>