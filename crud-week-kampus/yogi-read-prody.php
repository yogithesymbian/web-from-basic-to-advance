<?php
 // Create database connection using config file
include_once("../crud-week-kampus/apiEndPoint/connection.php");

// Fetch all users data from database
$result = mysqli_query($CONN, "SELECT
        pr.kd_prody, pr.nm_prody, jur.nm_jur
    FROM
        jurusan jur, prody pr
    WHERE
        jur.kd_jur = pr.kd_jur");
?>

<html>

<head>
    <title>Daftar Program Studi</title>
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- <a href="add.php">Add New User</a><br /><br /> -->
    <h1>Daftar Program Studi</h1>
    <div class="jumbotron text-center">
        <table width='80%' border=1>
            <tr>
                <th>Code Prody</th>
                <th>Name Prody</th>
                <th>Name Jurusan</th>
                <th>Action</th>
            </tr>
            <tr>
                <?php
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['kd_prody'] . "</td>";
                    echo "<td>" . $user_data['nm_prody'] . "</td>";
                    echo "<td>" . $user_data['nm_jur'] . "</td>";
                    if (isset($user_data)) {
                        echo "<td><a href='edit.php'>Edit</a> | <a href='delete.php'>Delete</a></td></tr>";
                        // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                    }
                }
                ?>
            </tr>

        </table>
    </div>
</body>

</html> 