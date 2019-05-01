<?php
require_once "_config/config.php";
// /**
//  * jika ada session user had been login
//  */
// if (!isset($_SESSION['user'])) {
//     echo "<script> window.location='" . base_url('auth/login.php') . "'; </script>";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Larahomesick">
    <meta name="author" content="Yogi Arif Widodo">
    <title>Hospital</title>
    <!-- Custom CSS -->
    <link href="<?= base_url('_assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('_assets/css/simple-sidebar.css') ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url('_assets/icon.png') ?>" type="image/x-icon">
</head>

<body>
    <!-- /#sidebar-wrapper -->
    <script src="<?= base_url('_assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('_assets/js/bootstrap.min.js') ?>"></script>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <span class="text-primary"><strong>Learning With Mr Karyo</strong></span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard') ?>"> <span class="glyphicon glyphicon-dashboard"></span> Dashboard</a>
                </li>
                <li>
                    <strong>Crud - Relationship DB</strong>
                </li>
                <li>
                    <a href="<?= base_url('dosenStyle/view_jurusan.php') ?>"><span class="glyphicon glyphicon-book"></span> Data Jurusan</a>
                </li>
                <li>
                    <a href="<?= base_url('dosenStyle/view_prody.php') ?>"><span class="glyphicon glyphicon-book"></span> Data Prody</a>
                </li>
                <li>
                    <a href="<?= base_url('dosenStyle/view_mhs.php') ?>"><span class="glyphicon glyphicon-book"></span> Data Mahasiswa</a>
                </li>
                <li>
                    <strong>basic</strong>
                </li>
                <li>
                    <a href="<?= base_url('#') ?>"><span class="glyphicon glyphicon-bookmark"></span> basic 1</a>
                </li>
                <li>
                    <strong>Searching</strong>
                </li>
                <li>
                <a href="<?= base_url('myStyleCode/find.php') ?>"><span class="glyphicon glyphicon-paperclip"></span> Mahasiswa</a>
                </li>
                <li>
                    <strong>Config</strong>
                </li>
                <li>
                    <a href="<?= base_url('apiEndPoint') ?>"><span class="glyphicon glyphicon-paperclip"></span> API endPoint</a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">