<html>
	<head>
		<title>Progress</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="view/css/peserta/progress.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<ul>
			<li><a class="fa fa-home" href="homePeserta.php"></a></li>
			<li><a href="homePeserta.php">Home</a></li>
			<li><a class="fa fa-line-chart" href="progress.php"></a></li>
			<li><a href="progress.php">Progress</a></li>
			<li><a class="fa fa-exchange" href="transaksi.php"></a></li>
			<li><a href="transaksi.php">Transaksi</a></li>
			<li><a href="mendali.php"><img src="assets/mendali.png" width="18" height="18"></a></li>
			<li><a href="mendali.php">Mendali</a></li>
			<li><a class="fa fa-user-circle-o" href="#"></a></li>
			<li><a href="#">Profil</a></li>
			<li><a class="fa fa-sign-out" href="#"></a></li>
			<li><a href="#">Log out</a></li>
		</ul>
		
		<div class="sebelah">
			<i class="fa fa-line-chart"></i>
			<h1>Progress</h1>
		</div>
		<div class="pro">
			<article>
				<p>In Progress</p>
			</article>
		</div>
		<br>
		<table>
			<?php foreach ($query_result as $key => $value): ?>
				<?php if (fmod($key, 2) == 0): ?>
					<tr>
				<?php endif; ?>
					<td>
						<a href="">
							<div>
								<?php echo $value["tema"]?>,
								<?php echo $value["region"]?>
								<img src="images/<?php echo $value['gambar'] ?>">
								<?php echo $value["jarak_tempuh"]?>
								<?php echo $value["progress"]?>%
							</div>
						</a>
					</td>
				<?php if (fmod($key, 2) == 1): ?>
					</tr>
				<?php endif; ?>
			<?php endforeach; ?>
		</table>
 		<!-- <div class="row">
		  	<div class="column">
		    	<a href="currentProgress.php">
		    		<div class="card">
			      		<p>Kiyomizu Dera, Jepang</p>
				      	<img src="assets/kiyomizu.jpg">
				      	<h3>0 km &emsp; 0%</h3>
			    	</div>
			    </a>
			 </div>
		</div> -->
		<br>
		<div class="pro1">
			<article>
				<p>Finish</p>
			</article>
		</div>
		<br>
		<div class="row">
		  	<div class="column">
		    	<div class="card">
		      		<p>Gunung Fuji, Jepang</p>
			      	<img class="gambar" src="assets/fuji.png">
			      	<h3>4.5 km &emsp; 100% &emsp; <a href="mendali.php"><img class="gambar1" src="assets/mendali.png"></a></h3>
		    	</div>
			 </div>
			 <div class="column">
			    <div class="card dua">
			      	<p>Piramida Giza, Mesir</p>
			      	<img class="gambar" src="assets/giza.jpg">
			      	<h3>5.0 km &emsp; 100% &emsp; <a href="mendali.php"><img src="assets/mendali.png"></a></h3>
			    </div>
			 </div>
		</div>
	</body>
</html>