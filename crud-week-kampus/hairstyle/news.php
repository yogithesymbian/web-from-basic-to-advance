<?php
include_once('../_config/config.php');
?>
<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>

<head>
	<meta charset="UTF-8">
	<title>News - ZiZurz Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
	<div id="header">
		<div class="section">
			<div class="logo">
				<a href="index.html">zizurz</a>
			</div>
			<ul>
				<li>
					<a href="index.php">home</a>
				</li>
				<li>
					<a href="about.html">about</a>
				</li>
				<li>
					<a href="hairstyle.html">hairstyles</a>
				</li>
				<li class="selected">
					<a href="news.html">news</a>
				</li>
				<li>
					<a href="contact.html">contact</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="blog">
			<div class="content">
				<?php

				$kode = $_GET['kode'];
				if (empty($kode)) {
					$query = "SELECT * FROM news order by id DESC limit 1";
					$hasil = mysqli_query($conncrud, $query);
					$baris = mysqli_fetch_row($hasil);
					$kode = $baris[0];
				}
				$sql = "SELECT * FROM news WHERE id=$kode";
				$hsl = mysqli_query($conncrud, $sql);
				$brs = mysqli_fetch_row($hsl);

				?>
				<h3> <strong><?php echo "$brs[1]" ?></strong>
					<br>
					<span style='font-size: 12px;'> <em>Post :</em> </span>
					<span style=' font-size: 12px; color: #4C8E96'> <em><?php echo "$brs[3]" ?></em> </span>
				</h3>
				<?php
				if (!empty($brs[5])) {
					?>
					<img src="news/images/<?php echo "$brs[5]" ?>" width="200" height="200" vspace=8 hspace=10 align=left>
				<?php
			}
			?>
				<p> <?php echo "$brs[2]" ?></p>
				<?php


				?>
				<!--  -->

			</div>
			<div class="sidebar">
				<h3>recent news</h3>
				<ul>

					<?php
					$query = "SELECT * FROM news order by id DESC limit 4";
					$hasil = mysqli_query($conncrud, $query);
					while ($row = mysqli_fetch_row($hasil)) {
						// substr(string,start,length )
						$abstract = substr($row[2], 0, 150);
						?>
						<li>
							<span><a href="news.php?kode=<?php echo "$row[0]" ?>"><?php echo "$row[1]" ?></a></span>
							<p>
								<?php echo "$abstract" ?>
							</p>
						</li>
					<?php
				}
				?>
					<!--
					<li>
						<span><a href="#">Hair, I just meet you</a></span>
						<p>
							Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free!
						</p>
					</li>
					<li>
						<span><a href="#">Styling Hair</a></span>
						<p>
							This website template has been designed by Free Website Templates for you, for free. You can remove any link to our website from this website template, you're free to use this website
						</p>
					</li>
					<li>
						<span><a href="#">How to pick the right hairstyle</a></span>
						<p>
							You can use them to design websites for clients, so long as you agree with the Terms of Use. You can even remove all our links if you want to.
						</p>
					</li> -->
				</ul>
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