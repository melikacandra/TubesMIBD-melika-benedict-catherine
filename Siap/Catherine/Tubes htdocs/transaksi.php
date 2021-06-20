<!DOCTYPE html>
<html>
	<head>
		<title>Transaksi</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="styleTransaksi.css" type="text/css" rel="stylesheet">
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
			<h1>Transaksi</h1>
		</div>

		<div class="navbar">
		  <a class="active" href="transaksi.php">Keranjang</a> 
		  <a href="menungguVerifikasi.php">Riwayat Transaksi</a> 
		</div>


		<div>
		  	<div class="main">
		  		<table class="atas12">
		  			<tr>
		  				<td><i class="fa fa-shopping-cart"></i></td>
		  				<td> Keranjang</td>
		  				<td><i class="fa fa-plus-circle"></i></td>
		  			</tr>
		  		</table>
		  		<br>
		  		<div class="isi2">
			  		<table>
			  			<tr>
			  				<td><h3> Track Kiyomizu Dera, Jepang</h3></td>
			  				<td><i class="fa fa-times"></i></td>
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
			    	</table>
			    	<br>
			    </div>
		  	</div>



		  	<div class="right">
			    <h3>Ringkasan Belanja</h3>
			    <div class="isi">
			    	<table>
			    		<tr>
			    			<td><b>Jumlah Track</b></td>
			    			<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b> 1</b></td>
			    		</tr>
			    		<tr>
			    			<td>KiyomizuD,Jp</td>
			    			<td>&emsp;&emsp; Rp200.000</td>
			    		</tr>
			    	</table>

			    	<hr>

			    	<b class="total">Total Harga Rp200.000</b>

			    	<br><br>

			    	<a href="tataCaraPembayaran.php"><button class="btn"><i class="fa fa-money"> Bayar</i></button></a>

			    	<br><br>
			    </div>
			</div>
		</div>
	</body>

</html>