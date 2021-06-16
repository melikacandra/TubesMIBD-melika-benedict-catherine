<!DOCTYPE html>
<html>
	<head>
		<title>Track</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="styleTrack.css" type="text/css" rel="stylesheet">
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

			<li><a class="fa fa-user-circle-o" href="profilePeserta.php"></a></li>
			<li><a href="profilePeserta.php">Profil</a></li>

			<li><a class="fa fa-sign-out" href="#"></a></li>
			<li><a href="#">Log in</a></li>
		</ul>

		<div class="sebelah">
			<i class="fa fa-road"></i>
			<h1>Track</h1>
		</div>

		<br>

		<input type="text" id="myInput" placeholder="Cari Track Baru">

		<br><br>

		<div class="row">
		  	<div class="column satu">
		  		<div class="card">
				  	<img src="assets/fuji.png">
				 	<div class="container">
				    	<p>Track Gunung Fuji, Jepang</p> 
				  	</div>
				</div>
			</div>

			<div class="column">
		  		<div class="card dua">
				  	<a href="transaksi.php"><img src="assets/kiyomizu.jpg"></a>
				 	<div class="container">
				    	<p><a href="transaksi.php">Track Kiyomizu Dera, Jepang</a></p> 
				  	</div>
				</div>
			</div>
		</div>

		<br><br>

		<div class="row">
		  	<div class="column">
		  		<div class="card">
				  	<img src="assets/giza.jpg">
				 	<div class="container">
				    	<p>Track Piramida Giza, Mesir</p> 
				  	</div>
				</div>
			</div>

			<div class="column">
		  		<div class="card dua2">
				  	<img src="assets/nil.jpg">
				 	<div class="container">
				    	<p>Track Sungai Nil, Mesir</p> 
				  	</div>
				</div>
			</div>
		</div>
		<br><br>
	</body>

</html>