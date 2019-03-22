<html>

<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>

<body>
    <br>
    <table border="2px" align="center" width="20%">
        <caption>
            <h1>Daftar Program Studi</h1>
        </caption>
        <tr>
            <th>Kode_Jurusan</th>
            <th>Nama_Prody</th>
            <th>Nama_Jurusan</th>
        </tr>
        <?php
    // include_once("../crud-week-kampus/apiEndPoint/connection.php");
        // $result = mysqli_query($CONN, "SELECT pr.kd_prody, pr.nm_prody, jur.nm_jur FROM jurusan jur, prody pr WHERE jur.kd_jur = pr.kd_jur");
        $con = mysqli_connect("localhost", "root", "", "ti_4a_2019");
        $query = "SELECT pr.kd_prody, pr.nm_prody, jur.nm_jur FROM jurusan jur, prody pr WHERE jur.kd_jur = pr.kd_jur";
        $hasil = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($hasil)) {
            // echo "$row[0] - $row[1] <br>";
            echo "<tr>";
            echo "<td width=30%> $row[0] </td>";
            echo "<td width=40%> $row[1] </td>";
            echo "<td width=40%> $row[2] </td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html> 