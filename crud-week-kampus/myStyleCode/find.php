<!--
    THIS HOME VIEW WITH PAK KARYO
    HOME[1] -> [FIND[2]]
 -->
<?php
// Create database connection using config file
include_once("../myStyleCode/api/connection.php");
/**
 * url.com/find=?
 * url.com/category=?
 * url.com/category=Yogi&find=Arif
 */
$find_skill = $_GET['find'];
$category = $_GET['category'];

# check if find_skill have value and category is all -> load this query
if (isset($find_skill) && $category == "all") {
    // load api query $result in query-data-find
    include("../myStyleCode/api/query-data-find.php");
} elseif (isset($find_skill) && $category == $category) {
    // load api query $result in query-data-find-cat.php
    include("../myStyleCode/api/query-data-find-cat.php");
    # if find_skill have value and category is are $category value from passing data value
    # run this code
}
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
            <li><a href="http://localhost/kuliah/crud-week-kampus/myStyleCode/read-mhs-scode.php">Read</a></li>
            <li class="active">Search</li>
        </ul>
        <!-- EndOfBreadCumb -->
        <h1 class="text-center">Daftar Mahasiswa Polnes yang Liburan ke Planet Bumi</h1>
        <form action="find.php">
            <!-- middle using offset from bootstrap -->
            <div class="col-md-offset-4">
                <!-- grouping an element -->
                <div class="input-group">
                    <select name="category" class="form-control" id="sel1" style="width: 30%">
                        <option value="all">-- ALL --</option>
                        <!-- get data from query $category and looping that -->
                        <?php
                        # for show the category query $category
                        include("../myStyleCode/api/query-data.php");
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
                        <th>Jurusan</th>
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