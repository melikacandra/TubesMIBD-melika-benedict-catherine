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
	<?php 
		include 'layout/navbar.php';
	?>

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
				  	<img src="assets/kiyomizu.jpg">
				 	<div class="container">
				    	<p>Track Kiyomizu Dera, Jepang</p> 
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
	</body>

</html>