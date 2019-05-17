<?php
include_once('../../_config/config.php');
$username = $_COOKIE['admin'];
$password = $_COOKIE['pin'];
$query = "SELECT username, password FROM users WHERE username='$username' and password='$password'";
$mysqliquery = mysqli_query($conncrud, $query);
$row = mysqli_fetch_array($mysqliquery);
echo "user = $username";
if ($row['username'] == "") {

    ?>

    <!-- <script lang="Javascript">
                        location.href = 'index.php'
                    </script> -->
<?php
}
?>