<?php
include_once('../_config/config.php');
?>
<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>

<head>
	<meta charset="UTF-8">
	<title>ZiZurz Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
	<div id="header">
		<div class="section">
			<div class="logo">
				<a href="index.html">zizurz</a>
			</div>
			<ul>
				<li class="selected">
					<a href="index.php">home</a>
				</li>
				<li>
					<a href="about.html">about</a>
				</li>
				<li>
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
		<div class="article">
			<img src="images/great-hairstyle.jpg" alt="">
			<h1>Great hairstyle comes from the experts.</h1>
		</div>
	</div>
	<div id="body">
		<ul>
			<?php
			$query = "SELECT * FROM produk";
			$hasil = mysqli_query($conncrud, $query);
			while ($row = mysqli_fetch_row($hasil)) {
				?>
				<li>
					<a href="hairstyle.html"><img src="images/<?php echo "$row[3]" ?>" alt=""></a>
					<b><?php echo "$row[1]" ?></b>
					<p>
						<?php echo "$row[2]" ?>
					</p>
				</li>
			<?php
		}
		?>
			<!-- <li>
				<a href="hairstyle.html"><img src="images/hairstyle17.jpg" alt=""></a>
				<b>best hairstylists</b>
				<p>
					Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free!
				</p>
			</li> -->
			<!-- <li>
				<a href="hairstyle.html"><img src="images/hairstyle18.jpg" alt=""></a>
				<b>featured hairstyle</b>
				<p>
					Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free!
				</p>
			</li>
			<li>
				<a href="hairstyle.html"><img src="images/hairstyle19.jpg" alt=""></a>
				<b>hair care</b>
				<p>
					Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free!
				</p>
			</li>
			<li>
				<a href="hairstyle.html"><img src="images/hairstyle20.jpg" alt=""></a>
				<b>we "hair" you</b>
				<p>
					Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free!
				</p>
			</li> -->
		</ul>
		<div>
			<div class="featured">
				<h2>featured</h2>
				<img src="images/featured.jpg" alt="featured.jpg">
				<?php
				$query = "SELECT * FROM profiles";
				$hasil = mysqli_query($conncrud, $query);
				while ($row = mysqli_fetch_row($hasil)) {
					if ($row[0] == '1') {
						?>
						<h3> <?php echo $row[1] ?> </h3>
						<p>
							<?php echo $row[2] ?>
						</p>
					<?php
				} elseif ($row[0] == '2') {
					# code...
					?>
					</div>
					<div class="section">
						<div class="article">
							<h2>
								<?php echo $row[1] ?>
							</h2>
							<p>
								<?php echo $row[2] ?>
							</p>
							<a href="#">Mike M.</a>
						</div>
					<?php
				}
			}
			?>

				<div class="newsletter">
					<img src="images/skinhead.png" alt="">
					<p>
						Are you losing your hair? Let us help you in bringing back your confidence. <span>Call Us at 1800-0000-0000</span>
					</p>
				</div>
			</div>
		</div>
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