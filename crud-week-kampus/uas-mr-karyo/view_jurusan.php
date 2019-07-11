<!--
    load header for sidebar
 -->
<?php include_once('../../_header.php'); ?>
<!-- toggle hide sidebar -->
<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"> <span class="glyphicon glyphicon-align-justify"></span> </a>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!-- code here -->
            <br>
            <div class="table-responsive">
                <table class="table table-condensed table-hover table-striped">
                    <caption>
                        <h1 class="text-primary">List Program Study - Department</h1>
                    </caption>
                    <tr>
                        <th>Kode_Jurusan</th>
                        <th>Nama_Jurusan</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    // include_once("../crud-week-kampus/apiEndPoint/connection.php");
                    // $result = mysqli_query($CONN, "SELECT pr.kd_prody, pr.nm_prody, jur.nm_jur FROM jurusan jur, prody pr WHERE jur.kd_jur = pr.kd_jur");
                    $con = mysqli_connect("localhost", "root", "", "ti_4a_2019");
                    $query = "SELECT * FROM jurusan";
                    $hasil = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_array($hasil)) {
                        // echo "$row[0] - $row[1] <br>";
                        echo "<tr>";
                        echo "<td> $row[kd_jur] </td>";
                        echo "<td> $row[nm_jur] </td>";
                        echo "<td>";
                        // edit
                        // echo "<a href='edit-jur.php?kd_jur=$row[kd_jur]' class='btn btn-primary btn-md'>";
                        echo "<a href='edit-jur.php?kd_jur=$row[kd_jur]&nm_jur=$row[nm_jur]' class='btn btn-primary btn-md'>";
                        echo "<span class='glyphicon glyphicon-edit'>Edit</a> ";
                        // delete
                        echo "<a href='delete-jur-v1.php?kd_jur=$row[kd_jur]' class='btn btn-danger btn-md'>";
                        echo "<span class='glyphicon glyphicon-trash'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
                <center>
                    <a href="add_jurusan.php" class="btn btn-primary"> Add New Record</a>
                </center>
            </div>
        </div>

    </div>
</div>
</div>

<?php include_once('../../_footer.php'); ?>