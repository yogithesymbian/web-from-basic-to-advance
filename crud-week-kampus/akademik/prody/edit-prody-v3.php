<?php
include_once('../_header.php');
?>

<?php
include_once('../_config/config.php')
?>

<?php

// getting kd_prody based on prody
$kd_prody = $_GET['kd_prody'];

$query = mysqli_query($conncrud, "SELECT
                                        *
                                  FROM
                                    prody pr
                                 WHERE
                                    pr.kd_prody = '$kd_prody'");

while ($data_data = mysqli_fetch_array($query)) {
    $kd_prody = $data_data['kd_prody'];
    $nm_prody = $data_data['nm_prody'];
    $kd_jur = $data_data['kd_jur'];
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-xs-offset-2">
            <form action="edit-prody" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="kd_prody" class="control-label col-sm-2">
                        Kode Prody
                    </label>
                    <div class="col-sm-6">
                        <input type="text" name="kd_prody" id="id_kd_prody" class="form-control" autofocus required value="<?php echo $kd_prody ?>" disabled>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nm_prody" class="control-label col-sm-2">
                        Nama Prody
                    </label>
                    <div class="col-sm-6">
                        <input type="text" name="nm_prody" id="id_nm_prody" class="form-control" autofocus required value="<?php echo $nm_prody ?>">
                    </div>
                </div>

                <div class="form-group">
                    <!-- <label for="kd_jur" class="control-label col-sm-2">
                        Kode Jurusan
                    </label>
                    <div class="col-sm-6">
                        <input type="text" name="kd_jur" id="id_kd_jur" class="form-control" autofocus required value="<?php echo $kd_jur ?>">
                    </div> -->
                    <label for="kd_jur" class="control-label col-sm-2">
                        Kode Jurusan
                    </label>
                    <div class="col-sm-6">
                        <select name="kd_jur" id="id_kd_jur" class="form-control">
                            <?php
                            $query_jur = mysqli_query($conncrud, "SELECT
                                *
                            FROM
                                jurusan");
                            while ($jurusan = mysqli_fetch_array($query_jur)) {
                                $kdjurusan = $jurusan['kd_jur'];
                                $nmjurusan = $jurusan['nm_jur'];

                                ?>
                                <option value=""> <?php echo $kdjurusan ?> </option>
                            <?php
                        }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 pull-right">
                        <button type="submit" class="btn btn-danger btn-sm" name="update"> <span class="glyphicon glyphicon-upload"></span> Update</button>
                        <a href="<?= base_url('akademik/prody/view_prody.php') ?>" class="btn btn-warning"> Back </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once('../_footer.php');
?>