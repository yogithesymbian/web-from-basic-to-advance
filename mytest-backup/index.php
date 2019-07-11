<?php
include_once('_config/config.php');
include_once('_query/_query1.php');
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>MyTest</title>
</head>

<body>
  <table>
    <tr>
      <th>kode jurusan</th>
      <th>nama jurusan</th>
    </tr>
    <?php
    /**
     * fetch data from call query
     * our can use looping like as while
     * or
     * anything
     */

    $onedata = mysqli_fetch_array($result);
    ?>
    <span> Helllo <?php echo "$onedata[kd_jur]" ?></span>
    <a href="<?= base_url('_crud/edit.php?kd_jur=') ?><?php echo $onedata[kd_jur] ?>"> Edit</a>
    <span> ==> </span> <a href="<?= base_url('_crud/add.php') ?>"> Add</a>
    <?php

    ?>
  </table>

</body>

</html>