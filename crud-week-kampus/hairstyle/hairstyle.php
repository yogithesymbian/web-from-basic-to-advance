<?php
include_once('../_config/config.php');
?>
<!DOCTYPE html>
<!-- Website Template by freewebsitetemplates.com -->
<html>

<head>
  <meta charset="UTF-8" />
  <title>Hairstyle - ZiZurz Website Template</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link href="<?= base_url1('_assets/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url1('_assets/css/simple-sidebar.css') ?>" rel="stylesheet">
  <link rel="shortcut icon" href="<?= base_url1('_assets/icon.png') ?>" type="image/x-icon">
</head>

<body>
  <div id="header">
    <div class="section">
      <div class="logo">
        <a href="index.php">zizurz</a>
      </div>
      <ul>
        <li>
          <a href="index.php">home</a>
        </li>
        <li>
          <a href="about.html">about</a>
        </li>
        <li class="selected">
          <a href="hairstyle.php">hairstyles</a>
        </li>
        <li>
          <a href="news.php">news</a>
        </li>
        <li>
          <a href="contact.html">contact</a>
        </li>
      </ul>
    </div>
  </div>
  <div id="body">
    <h3>hairstyles - <a class="btn btn-info" href="http://y.id/kuliah/crud-week-kampus/hairstyle/for-loop-js-grid-responsive/">Full Screen</a> </h3>
    <ul>
      <?php

      $query = 'SELECT * FROM galery';
      $mysqlquery = mysqli_query($conncrud, $query);
      while ($row = mysqli_fetch_array($mysqlquery)) {
        # code...
        ?>
        <li>
          <a href="#"><img src="images/<?php echo $row['image'] ?>" alt="" /></a>
        </li>
      <?php
    }
    ?>

    </ul>
    <a href="#" class="more">show more</a>
  </div>
  <div id="footer">
    <div>
      <div class="connect">
        <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
        <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
        <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
        <a href="http://pinterest.com/fwtemplates/" id="pinterest">pinterest</a>
      </div>
      <p>
        &copy; copyright 2023 | all rights reserved.
      </p>
    </div>
  </div>
</body>

</html>