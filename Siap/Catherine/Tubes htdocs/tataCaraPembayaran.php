<!DOCTYPE html>
<html>
	<head>
		<title>Tata Cara Pembayaran</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="styleTataCaraPembayaran.css" type="text/css" rel="stylesheet">
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
			  		<h4> Metode Pembayaran</h4>
		  		</div>


		  		<div class="isi">
		  			<b>Transfer Antar Bank</b>
		  			<p>Nomor Rekening:</p>
		  			<p>9182823882</p>
		  			<p>BANK BNI</p>
		  			<p>a.n PT.Marathonia</p>

			    	<b>Gopay</b>
			    	<p>Nomor Telepon:<p>
			    	<p>08782828282</p>
			    	<p>a.n Joshua Gates</p>
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

			    	<a href="buktiPembayaran.php"><button class="btn"> Saya Sudah Bayar</button></a>

			    	<br><br>
			    </div>
			</div>
			<button class="btn1" id="myBtn"> Petunjuk Pembayaran</button>

			<div id="myModal" class="modal">
			  	<div class="modal-content">
			   		<span class="close">&times;</span>
		   			<h3><b>Petunjuk Pembayaran</b></h3>
		    		<p>Langkah-langkah melakukan pembayaran: </p>
			    	<p>1. Pilih Metode Pembayaran yang anda inginkan.</p>
			    	<p>2. Transfer melalui nomor rekening/nomor akun yang ada dalam website.</p>
			    	<p>3. Klik tombol "Saya Sudah Bayar", maka anda akan masuk ke dalam form bukti pembayaran.</p>
			    	<p>4. Upload bukti pembayaran anda pada form tersebut.</p>
			    	<p>5. Klik Submit dan tunggu hingga admin memverifikasi pembayaran anda.</p>
			  	</div>
			</div>
		</div>
		<script type="text/javascript" src="jsTataCaraPembayaran.js"></script>
	</body>

</html>