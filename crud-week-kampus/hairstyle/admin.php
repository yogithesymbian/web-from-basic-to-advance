<?php
include_once('../_config/config.php');
?>
<?php
include 'auth/cek_login.php';
$kode = $_GET['kode'];
if ($kode == 1) {
    $judul = "Kelola Data Produk";
    $x = "view produk";
} elseif ($kode == 2) {
    $judul = "Kelola Data Profile";
    $x = "view profile";
} elseif ($kode == 3) {
    $judul = "Kelola Data News";
    $x = "view news";
} elseif ($kode == 4) {
    $judul = "Kelola Data Galery";
    $x = "view galery";
}

?>
<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>

<head>
    <meta charset="UTF-8">
    <title>News - ZiZurz Website Template</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="<?= base_url1('_assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url1('_assets/css/simple-sidebar.css') ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url1('_assets/icon.png') ?>" type="image/x-icon">
</head>

<body>
    <div id="header">
        <div class="section">
            <div class="logo">
                <a href="index.html">zizurz</a>
            </div>
            <ul>
                <li>
                    <a href="index.php">home</a>
                </li>
                <li>
                    <a href="about.html">about</a>
                </li>
                <li>
                    <a href="hairstyle.php">hairstyles</a>
                </li>
                <li class="selected">
                    <a href="news.php">News</a>
                </li>
                <li>
                    <a href="contact.html">contact</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="body">
        <div class="blog">
            <div class="content">
                <!-- unused -->
                <?php

                $kode = $_GET['kode'];
                if (empty($kode)) {
                    $query = "SELECT * FROM news order by id DESC limit 1";
                    $hasil = mysqli_query($conncrud, $query);
                    $baris = mysqli_fetch_row($hasil);
                    $kode = $baris[0];
                }
                $sql = "SELECT * FROM news WHERE id=$kode";
                $hsl = mysqli_query($conncrud, $sql);
                $brs = mysqli_fetch_row($hsl);

                ?>
                <h3> <strong><?php echo "$brs[1]" ?></strong>
                    <br>
                    <span style='font-size: 11px;'> <strong><em>Post :</em></strong> </span>
                    <span style=' font-size: 11px; color: #4C8E96'> <em><?php echo "$brs[3]" ?></em> </span>
                </h3>
                <?php
                if (!empty($brs[5])) {
                    ?>
                    <img src="news/images/<?php echo "$brs[5]" ?>" width="200" height="200" vspace=8 hspace=10 align=left>
                <?php
            }
            ?>
                <p> <?php echo "$brs[2]" ?></p>
                <?php


                ?>
                <!--  -->

            </div>
            <div class="sidebar">
                <h3>Menu Administrators</h3>
                <ul>
                    <!-- this script not used -->
                    <?php
                    $query = "SELECT * FROM news order by id DESC limit 4";
                    $hasil = mysqli_query($conncrud, $query);
                    while ($row = mysqli_fetch_row($hasil)) {
                        // substr(string,start,length )
                        $abstract = substr($row[2], 0, 150);
                        ?>
                        <!-- <li>                                                                                                                                                                             </li> -->
                    <?php
                }
                ?>
                    <!-- end of this script not used -->
                    <li>
                        <span>
                            <a href="admin.php?kode=1">Produk</a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="admin.php?kode=1">Profile</a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="admin.php?kode=1">News</a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="admin.php?kode=1">Galery</a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="http://y.id/kuliah/crud-week-kampus/hairstyle/auth/logout.php"> Logout </a>
                        </span>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div id="footer">
        <div>
            <div class="connect">
                <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
                <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
                <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
                <a href="http://pinterest.com/fwtemplates/" id="pinterest">pinterest</a>
            </div>
            <p>
                &copy; copyright 2023 | all rights reserved.
            </p>
        </div>
    </div>
</body>

</html>