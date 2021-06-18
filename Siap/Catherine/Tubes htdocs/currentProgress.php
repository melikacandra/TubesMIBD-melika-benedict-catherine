<!DOCTYPE html>
<html>
	<head>
		<title>Current Progress</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="styleCurrentProgress.css" type="text/css" rel="stylesheet">
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

		<div>
		  	<div class="main">
		  		<table class="atas12">
		  			<tr>
		  				<td>....</td>
		  			</tr>
		  			<tr>
						<td> Progress 0%</td>
		  			</tr>
		  			<tr>
		  				<td>Jarak Tempuh: 0 km</td>
		  			</tr>

		  			<tr>
		  				<td><button class="btn1" id="myBtn"> Tambah Jarak</button></td>
		  			</tr>
		  		</table>
		  		<div id="myModal" class="modal">
				  	<div class="modal-content">
				   		<span class="close">&times;</span>
			   			<h3><b>Tambah Jarak</b></h3>
			    		<p>Tambah Jarak: </p>
				    	<input type="text" name="jarak">
				    	<br><br>
				    	<a href="currentProgress.php"><button>Submit</button></a>
				  	</div>
				</div>
		  	</div>

		  	<div class="right">
			    <h3>Kiyomizu Dera, Jepang</h3>
			    <img src="assets/kiyomizu.jpg">
			    <br><br>
			    
			</div>
		</div>
		<script type="text/javascript" src="jsTataCaraPembayaran.js"></script>
	</body>
</html>