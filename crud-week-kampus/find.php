<?php
 // Create database connection using config file
include_once("../crud-week-kampus/apiEndPoint/connection.php");

// Fetch all users data from database
// create the parameter and passing value data to query
$find_skill = $_GET['find']; //url.com/find=?
$category = $_GET['category']; //url.com/find=?

# check if find_skill have value and category is all -> load this query
if (isset($find_skill) && $category == "all") {
    # code...
    $result = mysqli_query($CONN, "SELECT
        ms.nim, ms.nama, ms.tgl_lahir, ms.agama, ms.alamat, jur.nm_jur
    FROM
        jurusan jur, mhs ms, prody pr
    WHERE
        jur.kd_jur = pr.kd_jur AND
        pr.kd_prody = ms.kd_prody AND
        (ms.nama LIKE '%$find_skill%' OR ms.alamat LIKE '%$find_skill%')");
}
# if find_skill have value and category is are $category value from passing data value
# run this code
elseif (isset($find_skill) && $category == $category) {
    $result = mysqli_query($CONN, "SELECT
        ms.nim, ms.nama, ms.tgl_lahir, ms.agama, ms.alamat, jur.nm_jur
    FROM
        jurusan jur, mhs ms, prody pr
    WHERE
        jur.kd_jur = pr.kd_jur AND
        pr.kd_prody = ms.kd_prody AND
        jur.nm_jur LIKE '%$category%' AND
        (ms.nama LIKE '%$find_skill%' OR ms.alamat LIKE '%$find_skill%')");
}
# for show the category query
$category = mysqli_query($CONN, "SELECT
        jur.nm_jur
    FROM
        jurusan jur ");

?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Daftar Mahasiswa</title>
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
            <li><a href="http://localhost/kuliah/crud-week-kampus/yogi-read-mhs.php">Read</a></li>
            <li class="active">Search</li>
        </ul>
        <!-- EndOfBreadCumb -->
        <h1 class="text-center">Daftar Mahasiswa Polnes yang Liburan ke Planet Bumi</h1>

        <div class="col-md-offset-4">
            <!-- grouping an element -->
            <div class="input-group">
                <select name="category" class="form-control" id="sel1" style="width: 30%">
                    <option value="all">-- ALL --</option>
                    <!-- get data from query $category and looping that -->
                    <?php
                    while ($user_data = mysqli_fetch_array($category)) {
                        echo "<option>" . $user_data['nm_jur'] . "</option>";
                    }
                    ?>
                    <!-- End Of Get Data -->
                </select>
                <!-- Search Function with prefix/parameter find=$value-->
                <input type="text" placeholder="Search" name="find" class="form-control" style="width: 60%">
                <button class="btn btn-default form-control" type="submit" style="width: 10%"> <i class="glyphicon glyphicon-search"></i></button>
                <!-- End Of Search Function -->
            </div>
        </div>
        </form>
        <br>
        <!-- table body -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nim</th>
                        <th>Name</th>
                        <th>Tanggal lahir</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>Prody</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!-- php function go load/get Data from query $result -->
                        <?php
                        // check data is empty { this is for find.php from form element above }
                        // of course you need that code too in here...
                        if (empty($result)) {
                            echo "Data Tidak di Temukan";
                        } else {
                            // including an result to user_data where it is array object
                            while ($user_data = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $user_data['nim'] . "</td>";
                                echo "<td>" . $user_data['nama'] . "</td>";
                                echo "<td>" . $user_data['tgl_lahir'] . "</td>";
                                echo "<td>" . $user_data['agama'] . "</td>";
                                echo "<td>" . $user_data['alamat'] . "</td>";
                                echo "<td>" . $user_data['nm_jur'] . "</td>";
                                // this isset use later for edit and delete
                                if (isset($user_data)) {
                                    echo "<td>";
                                    // edit
                                    echo "<a href='edit.php' class='btn btn-primary btn-xs disabled'>";
                                    echo "<span class='glyphicon glyphicon-edit'>Edit</a> ";
                                    // delete
                                    echo "<a class='btn btn-danger btn-xs'";
                                    echo "<span class='glyphicon glyphicon-trash'>Delete</a>";
                                    echo "</td>";
                                    // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                                }
                            }
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End Of Table Body -->
    </div>
    <!-- End Of Container Body -->
</body>

</html> 