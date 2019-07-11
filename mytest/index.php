<?php
include_once('_config/config.php');
include_once('_query/_query1.php');
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="<?= base_url('_assets/css/bootstrap.min.css') ?>" rel="stylesheet">
  <title>Pegawai</title>
</head>

<body>
  <div class="container">

    <table class="table table-condensed table-hover table-striped">
      <caption>
        <h1 class="text-primary">List Pegawai</h1>
      </caption>
      <tr>
        <th>id_pegawai</th>
        <th>nm_pegawai</th>
        <th>tgl_lahir</th>
        <th>id_pendidikan</th>
        <th>agama</th>
        <th>alamat</th>
        <th>kd_kabkota</th>
        <th>kd_provinsi</th>
        <th>id_dept</th>
        <th>id_divisi</th>
        <th>status</th>
        <th>jml_anak</th>
        <th>Action</th>
      </tr>
      <?php
      /**
       * fetch data from call query
       * our can use looping like as while
       * or
       * anything
       */
      while ($datapegawai = mysqli_fetch_array($resultpg)) {
        # code...
        ?>
        <tr>
          <td> <?php echo $datapegawai[0] ?> </td>
          <td> <?php echo $datapegawai[1] ?> </td>
          <td> <?php echo $datapegawai[2] ?> </td>
          <td> <?php echo $datapegawai[3] ?> </td>
          <!-- agama -->
          <?php
          $agama = $datapegawai[4];
          if ($agama == 1) {
            # code...
            ?>
            <td> ISLAM </td>
          <?php
        } elseif ($agama == 2) {
          # code...
          ?>
            <td> KRISTEN </td>
          <?php
        } elseif ($agama == 3) {
          # code...
          ?>
            <td> HINDU </td>
          <?php
        } elseif ($agama == 4) {
          # code...
          ?>
            <td> BUDHA </td>
          <?php
        } elseif ($agama == 5) {
          # code...
          ?>
            <td> PROTESTAN </td>
          <?php
        }

        ?>

          <td> <?php echo $datapegawai[5] ?> </td>
          <td> <?php echo $datapegawai[6] ?> </td>
          <td> <?php echo $datapegawai[7] ?> </td>
          <td> <?php echo $datapegawai[8] ?> </td>
          <td> <?php echo $datapegawai[9] ?> </td>
          <!-- status -->
          <?php
          $status = $datapegawai[10];
          if ($status == 1) {
            # code...
            ?>
            <td> SINGLE </td>
          <?php
        } elseif ($status == 2) {
          # code...
          ?>
            <td> MENIKAH</td>
          <?php
        } elseif ($status == 3) {
          # code...
          ?>
            <td> Duda/Janda </td>
          <?php
        }

        ?>
          <!-- jumlah anak -->
          <!-- status -->
          <?php
          $ank = $datapegawai[11];
          if ($ank == 1) {
            # code...
            ?>
            <td> 0 anak </td>
          <?php
        } elseif ($ank == 2) {
          # code...
          ?>
            <td> 1 anak </td>
          <?php
        } elseif ($ank == 3) {
          # code...
          ?>
            <td> 2 anak </td>
          <?php
        } elseif ($ank == 4) {
          # code...
          ?>
            <td> 3 anak </td>
          <?php
        }

        ?>
          <td>
            <a href="<?= base_url('_crud/edit-1.php?id_pegawai=') ?><?php echo $datapegawai[0] ?>"> Edit</a>
            <a href="<?= base_url('_crud/delete.php?id_pegawai=') ?><?php echo $datapegawai[0] ?>"> Delete </a>
          </td>
        </tr>
      <?php
    }
    ?>
    </table>
    <center>
      <a href="<?= base_url('_crud/add.php') ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-pencil"></span> Add New Record</a>
    </center>
  </div>
</body>

</html>