<?php include_once('../../_header.php'); ?>

<?php
include_once('../../_config/config.php');

$nim = $_GET['nim'];

$query = "SELECT
        ms.nim,
        ms.nama,
        ms.tgl_lahir,
        ms.agama,
        ms.alamat,
        pr.kd_prody,
        pr.nm_prody
    FROM
        jurusan jur,
        mhs ms,
        prody pr
    WHERE
        jur.kd_jur = pr.kd_jur
        AND
        pr.kd_prody = ms.kd_prody
        AND
        ms.nim = '$nim'
        ";

$result = mysqli_query($conncrud, $query);

while ($mhs_data = mysqli_fetch_array($result)) {
    $nim = $mhs_data['nim'];
    $nama = $mhs_data['nama'];
    $tgl_lahir = $mhs_data['tgl_lahir'];
    $agama = $mhs_data['agama'];
    $alamat = $mhs_data['alamat'];
    $kd_prody = $mhs_data['kd_prody'];
    $nm_prody = $mhs_data['nm_prody'];
}


?>
<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"> <span class="glyphicon glyphicon-align-justify"></span> </a>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-primary">Add New Record</h1>
            <br>
            <form action="edit-mhs.php" method="post" class="form-horizontal" name="update_data">
                <div class="form-group">
                    <label for="Nim" class="control-label col-sm-2">Nim</label>
                    <div class="col-sm-10">
                        <input type="text" name="nim" id="id_kd_jur" class="form-control" value="<?php echo $nim ?>" required autofocus readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Nama" class="control-label col-sm-2">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" id="id_kd_jur" class="form-control" value="<?php echo $nama ?>" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="kode-jurusan" class="control-label col-sm-2">Tgl Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_lahir" id="id_kd_jur" class="form-control" value="<?php echo $tgl_lahir ?>" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="kode-jurusan" class="control-label col-sm-2">Agama</label>
                    <div class="col-sm-10">
                        <?php

                        $listAgama = array('ISLAM', 'KRISTEN', 'HINDU', 'BUDHA', 'PROTESTAN');
                        $arrlength = count($listAgama);


                        for ($x = 0; $x < $arrlength; $x++) {
                            // echo $listAgama[$x];
                            // echo "<br>";
                        }

                        ?>
                        <!-- <div class="radio">
                            <label><input checked type="radio" name="agama" value="<?php echo $agama ?>"> <?php echo $agama ?> </label>
                        </div> -->

                        <?php
                        if ($listAgama[0] == $agama) {
                            // for ($x = 0; $x < $arrlength; $x++) {
                            ?>
                            <label><input checked type="radio" name="agama" value="<?php echo $listAgama[0] ?>"> <?php echo $listAgama[0] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[1] ?>"> <?php echo $listAgama[1] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[2] ?>"> <?php echo $listAgama[2] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[3] ?>"> <?php echo $listAgama[3] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[4] ?>"> <?php echo $listAgama[4] ?> </label>
                            <br>
                        <?php
                    } elseif ($listAgama[1] == $agama) {
                        ?>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[0] ?>"> <?php echo $listAgama[0] ?> </label>
                            <br>
                            <label><input checked type="radio" name="agama" value="<?php echo $listAgama[1] ?>"> <?php echo $listAgama[1] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[2] ?>"> <?php echo $listAgama[2] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[3] ?>"> <?php echo $listAgama[3] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[4] ?>"> <?php echo $listAgama[4] ?> </label>
                            <br>
                        <?php
                    } elseif ($listAgama[2] == $agama) {
                        ?>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[0] ?>"> <?php echo $listAgama[0] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[1] ?>"> <?php echo $listAgama[1] ?> </label>
                            <br>
                            <label><input checked type="radio" name="agama" value="<?php echo $listAgama[2] ?>"> <?php echo $listAgama[2] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[3] ?>"> <?php echo $listAgama[3] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[4] ?>"> <?php echo $listAgama[4] ?> </label>
                            <br>
                        <?php
                    } elseif ($listAgama[3] == $agama) {
                        ?>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[0] ?>"> <?php echo $listAgama[0] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[1] ?>"> <?php echo $listAgama[1] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[2] ?>"> <?php echo $listAgama[2] ?> </label>
                            <br>
                            <label><input checked type="radio" name="agama" value="<?php echo $listAgama[3] ?>"> <?php echo $listAgama[3] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[4] ?>"> <?php echo $listAgama[4] ?> </label>
                            <br>
                        <?php
                    } elseif ($listAgama[4] == $agama) {
                        ?>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[0] ?>"> <?php echo $listAgama[0] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[1] ?>"> <?php echo $listAgama[1] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[2] ?>"> <?php echo $listAgama[2] ?> </label>
                            <br>
                            <label><input type="radio" name="agama" value="<?php echo $listAgama[3] ?>"> <?php echo $listAgama[3] ?> </label>
                            <br>
                            <label><input checked type="radio" name="agama" value="<?php echo $listAgama[4] ?>"> <?php echo $listAgama[4] ?> </label>
                            <br>
                        <?php
                    }
                    ?>

                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat" class="control-label col-sm-2">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" id="id_alamat" id="id_kd_jur" cols="30" rows="10" class="form-control" required autofocus><?php echo $alamat ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kode-jurusan" class="control-label col-sm-2">Prody</label>
                    <div class="col-sm-10">
                        <select name="kd_prody" id="id_kd_prody" class="form-control">
                            <?php
                            // // get list jurusan
                            // $resultname = mysqli_query($conncrud, "SELECT
                            //                 *
                            //             FROM
                            //                 prody pr
                            //             WHERE
                            //                 pr.nm_prody NOT IN ('$nm_prody')
                            //                 ");
                            // get list jurusan
                            $resultname = mysqli_query($conncrud, "SELECT
                                            *
                                        FROM
                                            prody pr;
                                            ");
                            while ($prody_data = mysqli_fetch_array($resultname)) {
                                // $kd_jur_list = $prody_data['kd_jur'];
                                // $nm_jur_list = $jurusan_data['nm_jur'];
                                if ($prody_data['kd_prody'] == $kd_prody) {
                                    ?>

                                    <option value="<?php echo $prody_data['kd_prody'] ?>" selected> <?php echo $prody_data['kd_prody']; ?> ( <?php echo $prody_data['nm_prody']; ?> ) </option>

                                <?php
                            } else {
                                ?>
                                    <option value="<?php echo $prody_data['kd_prody'] ?>"> <?php echo $prody_data['kd_prody']; ?> ( <?php echo $prody_data['nm_prody']; ?> ) </option>
                                <?php
                            }
                            ?>

                            <?php
                        }
                        ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-offset-2 col-sm-10">
                        <input type="submit" value="Update" class="btn btn-success" name="update">
                        <a href="<?= base_url('akademik/mhs/view_mhs.php') ?>" class="btn btn-warning"> <span class="glyphicon glyphicon-circle-arrow-left"></span> Back </a>
                    </div>
                </div>
            </form>

            <!-- PHP SCRIPT HANDLE ADD NEW RECORD -->
            <?php
            // error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

            // $kode = isset($_POST['kd_jur']) ? $_POST['kd_jur'] : '';
            // $name = isset($_POST['nm_jur']) ? $_POST['nm_jur'] : '';

            if (isset($_POST['update'])) {

                $nim = $_POST['nim'];
                $nama = $_POST['nama'];
                $tgl_lahir = $_POST['tgl_lahir'];
                $agama = $_POST['agama'];
                $alamat = $_POST['alamat'];
                $kd_prody = $_POST['kd_prody'];
                $nm_prody = $_POST['nm_prody'];

                $query = "UPDATE
                            mhs
                          SET
                           nama='$nama',
                           tgl_lahir='$tgl_lahir',
                           agama='$agama',
                           alamat='$alamat',
                           kd_prody='$kd_prody'
                          WHERE
                            nim='$nim' ";
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
                        location.href = 'view_mhs.php'
                    </script>";
                <?php
            }
        }

        ?>
        </div>
    </div>
</div>

<?php include_once('../../_footer.php'); ?>