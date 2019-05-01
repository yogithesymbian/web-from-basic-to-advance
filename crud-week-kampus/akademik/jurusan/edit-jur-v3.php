<?php include_once('../../_header.php'); ?>

<?php
// $con = mysqli_connect("localhost", "root", "", "ti_4a_2019");
include_once('../_config/config.php');

/**
 * action update
 *
 */
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $kd_jur = $_POST['kd_jur'];
    $nm_jur = $_POST['nm_jur'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE jur SET nm_jur='$nm_jur' WHERE kd_jur=$kd_jur");

    // Redirect to homepage to display updated user in list
    header("Location: view_jurusan.php");
}
?>
<?php
// displaying selected jurusan based on kd_jur
// getting kd_jur from url
$kd_jur = $_GET['kd_jur'];

/**
 * include query
 * ?edit-jur.php
 * show nama jurusan
 * $result
 */
$result = mysqli_query($conncrud, "SELECT
                                        *
                                    FROM
                                        jurusan jur
                                    WHERE
                                        jur.kd_jur = '$kd_jur'
                                ");
// include('_query/edit_jur_query.php');
while ($jurusan_data = mysqli_fetch_array($result)) {
    $kd_jur = $jurusan_data['kd_jur'];
    $nm_jur = $jurusan_data['nm_jur'];
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-xs-offset-2">
            <form action="edit-jur.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="kd_jur" class="control-label col-sm-2">Kode Jurusan</label>
                    <div class="col-sm-5">
                        <input type="text" name="kd_jur" id="id_kd_jur" class="form-control" required autofocus value="<?php echo $kd_jur; ?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nm_jur" class="control-label col-sm-2">Nama Jurusan</label>
                    <div class="col-sm-5">
                        <input type="text" name="nm_jur" id="id_nm_jur" class="form-control" required autofocus value="<?php echo $nm_jur; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 pull-right">
                        <button type="submit" class="btn btn-danger btn-sm" name="update"> <span class="glyphicon glyphicon-upload"></span> Update</button>
                        <a href="<?= base_url('akademik/jurusan/view_jurusan.php') ?>" class="btn btn-warning"> Back </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('../../_footer.php'); ?>