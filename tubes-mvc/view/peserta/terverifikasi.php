<!DOCTYPE html>
<html>
	<head>
		<title>Terverifikasi</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="styleTerverifikasi.css" type="text/css" rel="stylesheet">
	</head>

	<body>
	<?php 
		include 'layout/navbar.php';
	?>
		<div class="sebelah">
			<h1>Transaksi</h1>
		</div>

		<div class="navbar">
		  <a href="#">Keranjang</a> 
		  <a class="active" href="#">Riwayat Transaksi</a> 
		</div>


		<div>
		  	<div class="main">
		  		<table class="atas12">
		  			<tr>
		  				<td><i class="fa fa-shopping-cart"></i></td>
		  				<td> Riwayat Transaksi</td>
		  			</tr>
		  		</table>
		  		<br>
		  		<div class="isi2">
			  		<table>
			  			<tr>
			  				<td><h4> Track Kiyomizu Dera, Jepang</h4></td>
			  				<td><h4 class="tanggal"> 8 Juni 2021</h4></td>
			  			</tr>
			  		</table>
		  		</div>


		  		<div class="isi">
			    	<table>
			    		<tr>
			    			<td><img src="assets/Kiyomizu.jpg"></td>
			    			<td>Track Kiyomizu Dera berada di Jepang dengan jarak 3.5 km</td>
			    		</tr>
			    		<tr>
			    			<td class="jarak"><b>Jarak: 3.5 km</b></td>
			    			<td class="keterangan"> Harga: Rp200.000</td>
			    		</tr>
			    		<tr>
			    			<td class="status">Status: <i class="fa fa-check"><b> Terverifikasi Admin</b></i><td>
			    			<td><a href="#"><button>Masuk ke Track</button></a>
			    		</tr>
			    	</table>
			    	<br>
			    </div>
		  	</div>
		</div>
	</body>

</html>