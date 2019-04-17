<?php
// include database connection file
//  include_once("api/connection.php");
include_once("api/connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['nm_jur'];

    // update user data
    $result = mysqli_query($CONN, "UPDATE mhs
    SET
        nama='$nama',tgl_lahir='$tgl_lahir',agama='$agama'
    WHERE nim=$nim");
    /**
     * editView
     */

    // Redirect to homepage to display updated user in list
    header("Location: read-mhs-scode.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$nim = $_GET['nim'];

// Fetech user data based on id
$result = mysqli_query($CONN, "SELECT *
FROM
    mhs
WHERE nim=$nim");
// $resultHome = mysqli_query($CONN, "UPDATE mhs ms, jurusan jur, prody pr
// ms.nim, ms.nama, ms.tgl_lahir, ms.agama, ms.alamat, jur.nm_jur
// SET
// nim='$nim',nama='$nama',tgl_lahir='$tgl_lahir',agama='$agama',alamat='$alamat',jurusan='$jurusan'
// WHERE
//  jur.kd_jur = pr.kd_jur AND
//  pr.kd_prody = ms.kd_prody AND
//  ms.nim = '$nim'");
/**
 * resultHome */

while ($user_data = mysqli_fetch_array($result)) {
    $nama = $user_data['nama'];
    $tgl_lahir = $user_data['tgl_lahir'];
    $agama = $user_data['agama'];
}
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Edit - Daftar Mahasiswa</title>
    <meta name="description" content="CRUD ( create, read, update, delete)">
    <meta name="author" content="Yogi Arif Widodo">
    <meta name="keywords" content="html, php, css, crud, javascript">
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- BreadCumb -->
        <ul class="breadcrumb">
            <li><a href="http://localhost/kuliah">Home</a></li>
            <li><a href="http://localhost/kuliah/crud-week-kampus">Crud</a></li>
            <li class="active"><a href="http://localhost/kuliah/crud-week-kampus/myStyleCode/read-mhs-scode.php">Read</a></li>
            <li class="active">Edit</li>
        </ul>
        <!-- EndOfBreadCumb -->

        <form name="update_user" method="post" action="edit.php">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value=<?php echo $nama; ?>></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value=<?php echo $tgl_lahir; ?>></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="mobile" value=<?php echo $agama; ?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="nim" value=<?php echo $_GET['nim']; ?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>