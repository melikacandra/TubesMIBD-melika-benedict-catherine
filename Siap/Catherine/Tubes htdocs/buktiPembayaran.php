<!DOCTYPE html>
<html>
	<head>
		<title>Bukti Pembayaran</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="styleBuktiPembayaran.css" type="text/css" rel="stylesheet">
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
			<li><a href="#">Log in</a></li>
		</ul>

		<div class="sebelah">
			<h1>Transaksi</h1>
		</div>

		<div class="navbar">
		  <a class="active" href="#">Keranjang</a> 
		  <a href="#">Riwayat Transaksi</a> 
		</div>


		<div>
		  	<div class="main">
		  		<table class="atas12">
		  			<tr>
		  				<td><i class="fa fa-shopping-cart"></i></td>
		  				<td> Tata Cara Pembayaran</td>
		  			</tr>
		  		</table>
		  		<br>
		  		<div class="isi2">
			  		<h4> Bukti Pembayaran</h4>
		  		</div>


		  		<div class="isi">
		  			<b>Metode Pembayaran</b>
		  			<div class="w3-hide w3-container" id="liq">
			            <select
                            class="w3-select w3-button w3-border select"
                            name="option">
                            <option value="1">Transfer &emsp;</option>
                            <option value="2">Gopay</option>
                        </select>
			        </div>

			    	<b>Nama di Rekening/Akun</b>
			    	<input type="text" class="form-control" placeholder="Benedict" name="nama">
			    	<br>

			    	<table>
			    		<tr>
			    			<td>
			    				<div class="upload">
			    					<i class='fa fa-plus-circle'></i>
			    					<p>Upload Bukti Pembayaran</p>
			    				</div>
							</td>
			    			<td><a href="terverifikasi.php"><button>Submit</button></a></td>
			    		</tr>
			    	</table>

			    	<br><br>
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
			    	<br><br>
			    </div>
			</div>
			<button class="btn1"> Petunjuk Pembayaran</button>
		</div>
	</body>
</html>