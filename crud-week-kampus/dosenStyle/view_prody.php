<?php include_once('../_header.php'); ?>
<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"> <span class="glyphicon glyphicon-align-justify"></span> </a>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!-- code here -->

            <div class="table-responsive">

                <table class="table table-condensed table-hover table-striped">
                    <caption>
                        <h1 class="text-primary">List Program Study - Prody</h1>
                    </caption>
                    <tr>
                        <th>Kode_Prody</th>
                        <th>Nama_Prody</th>
                        <th>Nama_Jurusan</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    // include_once("../crud-week-kampus/apiEndPoint/connection.php");
                    // $result = mysqli_query($CONN, "SELECT pr.kd_prody, pr.nm_prody, jur.nm_jur FROM jurusan jur, prody pr WHERE jur.kd_jur = pr.kd_jur");
                    $con = mysqli_connect("localhost", "root", "", "ti_4a_2019");
                    $query = "SELECT
            pr.kd_prody, pr.nm_prody, jur.nm_jur
        FROM
            jurusan jur, prody pr
        WHERE jur.kd_jur = pr.kd_jur";
                    $hasil = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_array($hasil)) {
                        // echo "$row[0] - $row[1] <br>";
                        echo "<tr>";
                        echo "<td> $row[kd_prody] </td>";
                        echo "<td> $row[nm_prody] </td>";
                        echo "<td> $row[nm_jur] </td>";
                        echo " <td>
                    <a href='edit-prody.php?kd_prody=$row[kd_prody]' class='btn btn-primary btn-sm'>
                    <span class='glyphicon glyphicon-edit'></span>
                    Edit
                    </a>

                    <a href='delete-prody.php?kd_prody=$row[kd_prody]' class='btn btn-danger btn-sm'>
                    <span class='glyphicon glyphicon-trash'></span>
                    Delete
                    </a>
                    </td> ";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
            <br>
            <center>
                <a href="add_prody.php" class="btn btn-primary"> Add New Record</a>
            </center>
        </div>

    </div>
</div>
</div>

<?php include_once('../_footer.php'); ?>