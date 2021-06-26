<!DOCTYPE html>
<html>
	<head>
		<title>Track Option 1</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="view/css/peserta/style.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<ul>
			<li><a class="fa fa-home" href="homePeserta.html"></a></li>
			<li><a href="homePeserta.html">Home</a></li>
			<li><a class="fa fa-line-chart" href="progress.html"></a></li>
			<li><a href="progress.html">Progress</a></li>
			<li><a class="fa fa-exchange" href="transaksi.html"></a></li>
			<li><a href="transaksi.html">Transaksi</a></li>
			<li><a href="mendali.html"><img src="assets/mendali.png" width="18" height="18"></a></li>
			<li><a href="mendali.html">Mendali</a></li>
			<li><a class="fa fa-user-circle-o" href="#"></a></li>
			<li><a href="#">Profil</a></li>
			<li><a class="fa fa-sign-out" href="#"></a></li>
			<li><a href="#">Log in</a></li>
		</ul>
		<div class="sebelah">
			<i class="fa fa-road"></i>
			<h1>Track</h1>
		</div>
		<div>
		  	<div class="main">
		  		<h3>Deskripsi</h3>
		  		<div class="isi">
		  			<p>
		  			<?php echo $query_result[0]["deskripsi"] ?>
		  			</p>
		  		</div>
		  	</div>
		  	<div class="right">
			    <h3>
			    	<?php echo $query_result[0]["tema"] ?>,
			    	<?php echo $query_result[0]["region"] ?>
			    </h3>
			    <div class="isi2">
			    	<img src="images/<?php echo $query_result[0]['gambar'] ?>">	
			    	 <table>
				        <tr>
				            <td class="kiri"><b><?php echo $query_result[0]["jarak_track"] ?> km</b></td>
				            <td><b>Rp<?php echo $query_result[0]["harga"] ?></b></td>
				        </tr>
				    </table>
				    <br>
				    <a href="tracklist"><button><i class="fa fa-chevron-left">Back</i></button></a>
			    </div>
			</div>
		</div>
		<div class="bawah">
			<a href="transaksi"><button><i class="fa fa-shopping-cart"> PURCHASE</i></button>	
		</div>
	</body>
</html>