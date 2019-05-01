<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Daftar Mahasiswa</title>
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

<body style="background: url('../../img/white-tech3.jpg')">
    <?php
    // include connection and there is name is $CONN
    include_once("../myStyleCode/api/connection.php");
    ?>
    <div class="container">
        <!-- BreadCumb -->
        <ul class="breadcrumb">
            <li><a href="http://localhost/kuliah">Home</a></li>
            <li><a href="http://localhost/kuliah/crud-week-kampus">Crud</a></li>
            <li class="active"><a href="http://localhost/kuliah/crud-week-kampus/myStyleCode/read-mhs-scode.php">Read</a></li>
        </ul>
        <!-- EndOfBreadCumb -->
        <h1 class="text-center">Report Data 1</h1>

        <form action="find.php">
            <!-- middle using offset from bootstrap -->
            <div class="col-md-offset-4">
                <!-- grouping an element -->
                <div class="input-group">
                    <select name="category" class="form-control" id="sel1" style="width: 30%">
                        <option value="all">-- ALL --</option>
                        <?php
                        // load api query
                        include("../myStyleCode/api/query-data.php");
                        // get data from {include} in there is query $category, use it and looping that
                        while ($user_data = mysqli_fetch_array($reportMember)) {
                            echo "<option>" . $user_data['Id_member'] . "</option>";
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
                        <th>ID Penjualan</th>
                        <th>Tanggal</th>
                        <th>Nama Majalah</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!-- php function go load/get Data from query $result -->
                        <?php
                        // check data is empty { this is for find.php from form element above }
                        // of course you need that code too in here...
                        if (empty($reportYogi)) {
                            echo "Data Tidak di Temukan";
                        } else {
                            // including an result to user_data where it is array object
                            while ($user_data = mysqli_fetch_array($reportYogi)) {
                                echo "<tr>";
                                echo "<td>" . $user_data['Id_penjualan'] . "</td>";
                                echo "<td>" . $user_data['Tanggal'] . "</td>";
                                echo "<td>" . $user_data['Nama_majalah'] . "</td>";
                                echo "<td>" . $user_data['Jumlah'] . "</td>";
                                echo "<td>" . $user_data['Harga'] . "</td>";
                                // this isset use later for edit and delete
                                if (isset($user_data)) {
                                    echo "<td>";
                                    // edit
                                    echo "<a href='edit.php?nim=$user_data[Id_penjualan]' class='btn btn-primary btn-xs'>";
                                    echo "<span class='glyphicon glyphicon-edit'>Edit</a> ";
                                    // delete
                                    echo "<a href='delete.php?nim=$user_data[Id_penjualan]' class='btn btn-danger btn-xs'";
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