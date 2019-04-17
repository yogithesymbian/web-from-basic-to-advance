<?php
 // Create database connection using config file
include_once("../crud-week-kampus/apiEndPoint/connection.php");

// Fetch all users data from database
// $result = mysqli_query($CONN, "SELECT pr.kd_prody, pr.nm_prody, jur.nm_jur FROM jurusan jur, prody pr WHERE jur.kd_jur = pr.kd_jur");
$result = mysqli_query($CONN, "SELECT * FROM jurusan ");
?>

<html>

<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <!-- <a href="add.php">Add New User</a><br /><br /> -->

    <h1>Daftar Jurusan</h1>
    <table width='80%' border=1>
        <tr>
            <th style="text-align">Code Jurusan</th>
            <th>Name Jurusan</th>
            <th>Action</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['kd_jur'] . "</td>";
            echo "<td>" . $user_data['nm_jur'] . "</td>";
            if (isset($user_data)) {
                echo "<td><a href='edit.php'>Edit</a> | <a href='delete.php'>Delete</a></td></tr>";
                // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
            }
            echo "<tr>";
        }
        ?>

    </table>
</body>

</html> 