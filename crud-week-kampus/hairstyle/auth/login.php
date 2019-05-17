<?php
include_once('../../_config/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrator</title>
    <link href="<?= base_url1('_assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url1('_assets/css/simple-sidebar.css') ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url1('_assets/icon.png') ?>" type="image/x-icon">
</head>

<body>
    <table class="table table-responsive">
        <tr>
            <td>
                Login To Administrator Page
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;
            </td>
        </tr>
        <!-- form POST -->

    </table>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="cek.php" method="post" class="form-horizontal">
                    <!-- username -->
                    <div class="form-group">
                        <label for="username" class="control-label col-sm-2">Username</label>
                        <div class="col-sm-7">
                            <input type="text" name="username" id="id_username" class="form-control" required autofocus>
                        </div>
                    </div>
                    <!-- password -->
                    <div class="form-group">
                        <label for="password" class="control-label col-sm-2">Password</label>
                        <div class="col-sm-7">
                            <input type="password" name="password" id="id_password" class="form-control" required autofocus>
                        </div>
                    </div>
                    <!-- button login -->
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" value="Login" class="btn btn-primary">
                            <a href="<?= base_url1('#') ?>" class="btn btn-info"> <span class="glyphicon glyphicon-registration-mark"></span> Register </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>