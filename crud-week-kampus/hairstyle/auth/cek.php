<?php
$username = $_POST['username'];
$password = $_POST['password'];
// name cookies
setcookie("admin", $username);
setcookie("pin", $password);
header("location:login_admin.php");
