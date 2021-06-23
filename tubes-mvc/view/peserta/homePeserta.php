
<!DOCTYPE html>
<html>
	<head>
		<title>Home Peserta</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<Link href="view/peserta/css/styleHomePeserta.css" type="text/css" rel="stylesheet">
	</head>
	<?php 
		include 'layout/navbar.php';
	?>
	<body>
		
		<div class="content">
		<div class="w3-card-0">
			<div class="w3-row">
			    <div class="w3-third w3-left">
			      	<h3>Halo, <?php echo $_SESSION['nama']?></h3>
					<h1>Selamat Datang di</h1>
					<h1>Virtual Marathon 2021</h1>
			    </div>
			    <div class="w3-third w3-right w3-margin-top">
			      	<img src="view/peserta/assets/lari.png">
			    </div>
			</div>
			<div class="w3-row tengah">
			    <div class=" w3-left pojok">
			      	<i class='fa fa-building'><a href="#"> About us</a></i>
			    </div>
			    <div class="w3-third w3-center">
			      	<i class='fa fa-home'><a href="homePeserta.html"> Home</a></i>
			    </div>
			    <div class="w3-third w3-center">
			      	<i class='fa fa-road'><a href="peserta/track"> Track</a></i>
			    </div>
			    <div class="w3-right pojok">
			      	<i class='fa fa-users'><a href="#"> Testimoni</a></i>
			    </div> 
			</div>

			<div class="row">
			    <div class="column">
				    <div class="card test">
				      	<a href="#"><i class='fa fa-question-circle'></i></a>
				      	<h3>Apa itu Virtual</h3>
				      	<h3>Marathon?</h3>
				    </div>
				</div>

				<div class="column">
				    <div class="card test1">
				      	<a href="#"><i class='fa fa-file-text'></i></a>
				      	<h3>Daftar Sekarang!</h3>
				      	<h3></h3>
				    </div>
				</div>
				  
				<div class="column">
				    <div class="card test">
				      	<a href="#"><i class='fa fa-smile-o'></i></a>
				      	<h3>Manfaat Ikut</h3>
				      	<h3>Virtual Marathon</h3>
				    </div>
				</div>
		</div>
	</div>
	</body>
</head>