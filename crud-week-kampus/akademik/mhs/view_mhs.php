<?php include_once('../../_header.php'); ?>
<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"> <span class="glyphicon glyphicon-align-justify"></span> </a>
<div class="row">
    <div class="col-lg-12">

        <br>
        <div class="table-responsive">
            <table class="table table-condensed table-hover table-striped">
                <caption>
                    <h1 class="text-primary">List Data of Student</h1>
                </caption>
                <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Tgl_Lahir</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Jurusan</th>
                    <th>Action</th>
                </tr>
                <?php
                // include_once("../crud-week-kampus/apiEndPoint/connection.php");
                // $result = mysqli_query($CONN, "SELECT pr.kd_prody, pr.nm_prody, jur.nm_jur FROM jurusan jur, prody pr WHERE jur.kd_jur = pr.kd_jur");
                $con = mysqli_connect("localhost", "root", "", "ti_4a_2019");
                $query = "SELECT
        ms.nim,
        ms.nama,
        ms.tgl_lahir,
        ms.agama,
        ms.alamat,
        jur.nm_jur
    FROM
        jurusan jur,
        mhs ms,
        prody pr
    WHERE
        jur.kd_jur = pr.kd_jur
        AND
        pr.kd_prody = ms.kd_prody";
                $hasil = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($hasil)) {
                    // echo "$row[0] - $row[1] <br>";
                    echo "<tr>";
                    echo "<td> $row[0] </td>";
                    echo "<td> $row[1] </td>";
                    echo "<td> $row[2] </td>";
                    echo "<td> $row[3] </td>";
                    echo "<td> $row[4] </td>";
                    echo "<td> $row[5] </td>";
                    echo "
                    <td>
                    <a href='edit-mhs.php?nim=$row[0]' class='btn btn-primary btn-sm'>
                    <span class='glyphicon glyphicon-edit'></span>
                    Edit
                    </a>

                    <a href='delete-mhs.php?nim=$row[0]' class='btn btn-danger btn-sm'>
                    <span class='glyphicon glyphicon-trash'></span>
                    Delete
                    </a>
                    </td>
                    ";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        <br>
        <center>
            <a href="add_mahasiswa.php" class="btn btn-primary"> Add New Record</a>
        </center>
        <br>
        <br>
    </div>
    <!-- <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p> -->
</div>
</div>

<?php include_once('../../_footer.php'); ?>