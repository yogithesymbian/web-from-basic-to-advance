<?php
include_once('../../_config/config.php');
$username = $_COOKIE['admin'];
$password = $_COOKIE['pin'];
$query = "SELECT username, password FROM users WHERE username='$username' and password='$password'";
$mysqliquery = mysqli_query($conncrud, $query);
$row = mysqli_fetch_array($mysqliquery);

if ($row['username'] <> "") {
    ?>
    <script lang="Javascript">
        // location.href = 'http://y.id/kuliah/crud-week-kampus/hairstyle/admin.php'
        location.href = '../admin.php'
    </script>
<?php
} else {
    ?>
    "<script language='Javascript'>
        ;
        (window.alert('Username | Password Has Wrong'))
    </script>";

    "<script language='javascript'>
        location.href = 'login.php'
    </script>";
<?php
}
?>