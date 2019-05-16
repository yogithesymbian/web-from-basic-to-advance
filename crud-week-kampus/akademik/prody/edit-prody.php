<?php include_once('../../_header.php'); ?>

<?php
include_once('../../_config/config.php');
// displaying selected prody based on kd_prody
// getting kd_prody from url
$kd_prody = $_GET['kd_prody'];
// $kd_not_in = $_GET['kd_prody'];

/**
 * mysqli_query show by (based on) $kd_prody
 * while data fetch_array
 */

//  inner join between Jurusan and Prody
$result = mysqli_query($conncrud, "SELECT
                                        *
                                    FROM
                                        prody pr,
                                        jurusan jur
                                    WHERE
                                        jur.kd_jur = pr.kd_jur
                                        AND
                                        pr.kd_prody = '$kd_prody'
                                        ");

// while (
/**
 * do not use loop ( while )
 * if u know the output has only 1
 */
$prody_data = mysqli_fetch_array($result);
//  {
$kd_prody = $prody_data['kd_prody'];
$nm_prody = $prody_data['nm_prody'];
$kd_jur = $prody_data['kd_jur'];
$nm_jur = $prody_data['nm_jur'];
// }
?>
<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"> <span class="glyphicon glyphicon-align-justify"></span> </a>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-primary">Updated Record</h1>
            <br>
            <p></p>
            <form action="edit-prody.php" method="post" class="form-horizontal" name="update_data">
                <div class="form-group">
                    <label for="kode-prody" class="col-sm-2 control-label">Kode Prody</label>
                    <div class="col-sm-10">
                        <input type="text" name="kd_prody" id="id_kd_prody" class="form-control" value="<?php echo $kd_prody ?>" required autofocus readonly>
                    </div>
                    <!-- <table>
                            <tr> <label for="kode-jurusan">Kode Jurusan : </label> </tr>
                            <tr> &nbsp; <input type="text" name="kd_jur" id="id_kd_jur" class="col-md-4" required autofocus> </tr>
                        </table> -->
                </div>

                <div class="form-group">
                    <label for="nama-prody" class="control-label col-sm-2">Nama Prody</label>
                    <div class="col-sm-10">
                        <input type="text" name="nm_prody" id="id_nm_prody" class="form-control" value="<?php echo $nm_prody ?>" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nama-jurusan" class="control-label col-sm-2">Nama Jurusan</label>
                    <div class="col-sm-10">
                        <select name="kd_jur" id="id_kd_jur" class="form-control">
                            <?php
                            // get list jurusan
                            // $resultname = mysqli_query($conncrud, "SELECT
                            //                 *
                            //             FROM
                            //                 jurusan jur
                            //             WHERE
                            //                 jur.kd_jur NOT IN ('$kd_jur')
                            //                 ");
                            $resultname = mysqli_query($conncrud, "SELECT
                                            *
                                        FROM
                                            jurusan jur
                                            ");
                            while ($jurusan_data = mysqli_fetch_array($resultname)) {
                                // $kd_jur_list = $prody_data['kd_jur'];
                                // $nm_jur_list = $jurusan_data['nm_jur'];
                                if ($jurusan_data['kd_jur'] == $prody_data['kd_jur']) {
                                    ?>

                                    <option value="<?php echo $jurusan_data['kd_jur'] ?>" selected> <?php echo $jurusan_data['kd_jur']; ?> ( <?php echo $jurusan_data['nm_jur']; ?> ) </option>

                                <?php
                            } else {
                                ?>

                                    <option value="<?php echo $jurusan_data['kd_jur'] ?>"> <?php echo $jurusan_data['kd_jur']; ?> ( <?php echo $jurusan_data['nm_jur']; ?> ) </option>

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
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" value="Update" class="btn btn-success" name="update">
                        <a href="<?= base_url('akademik/prody/view_prody.php') ?>" class="btn btn-warning"> <span class="glyphicon glyphicon-circle-arrow-left"></span> Back </a>
                    </div>
                </div>
            </form>

            <!-- PHP SCRIPT HANDLE ADD NEW RECORD -->
            <?php
            // error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

            // $kd_prody = $_POST['kd_prody'];
            // $nm_prody = $_POST['nm_prody'];
            // $kd_jur = $_POST['kd_jur'];

            if (isset($_POST['update'])) {

                $kd_prody = $_POST['kd_prody'];
                $nm_prody = $_POST['nm_prody'];
                $kd_jur = $_POST['kd_jur'];

                $query = "UPDATE prody SET nm_prody='$nm_prody',kd_jur='$kd_jur' WHERE kd_prody='$kd_prody'";
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
                        location.href = 'view_prody.php'
                    </script>";
                <?php
            }
        }

        ?>
        </div>
    </div>
</div>

<?php include_once('../../_footer.php'); ?>