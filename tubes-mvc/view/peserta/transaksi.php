<!DOCTYPE html>
<html>
	<head>
		<title>Transaksi</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="view/peserta/css/styleTransaksi.css" type="text/css" rel="stylesheet">
	</head>

	<body>
	<?php 
		include 'layout/navbar.php';
	?>
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

			    	<a href="caraPembayaran"><button class="btn"><i class="fa fa-money"> Bayar</i></button></a>

			    	<br><br>
			    </div>
			</div>
		</div>
	</body>
	<style>
	body {
  margin: 0;
  background-color: #9fc5f8;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 7%;
  background-color: #073763;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: white;
  padding: 8px 15px;
  text-decoration: none;
}

.fa-home{
  padding-top: 30%;
}

.fa-user-circle-o{
  padding-top: 250%;
}

a:hover{
  color: lightblue;
}

.sebelah{
  margin-left: 7%;
  padding-left: 10px;
  padding-bottom: 20px;
  background-color: #2b78e4;
  padding-left: 15px;
  
}

h1{
  display: inline-flex;
  padding-left: 10px;
  margin-bottom: 10px;
  color: white;
}

/*navbar dibawah transaksi*/
.navbar {
  width: 93%;
  background-color: lightgrey;
  margin-left:7%; 
  border:1px solid black;
}

.navbar a {
  float: left;
  padding: 12px;
  color: black;
  text-decoration: none;
  font-size: 17px;
  width: 50%;
  text-align: center;
}

.navbar a:hover {
  background-color: grey;
}

.navbar a.active {
  background-color: rgb(0,255,255);
  border-right:1px solid black;
}

.main {
  float: left;
  width: 60%;
  height: 14cm;
  padding: 0 20px;
  margin-left: 10%; 
  margin-right: 3%;
  margin-bottom: 10%;
  background-color: #597eaa;
  color: #f1c232;
}

.main .isi2{
  background-color: #073763;
  color: #f1c232;
  padding-left: 10px;
}

.main .atas12{
  font-size: 30px;

}

.fa-shopping-cart{
  padding-right: 20px;
  font-size: 40px;
  padding-top: 8px;
}

.fa-plus-circle{
  padding-left: 14cm;
  font-size: 40px;
  padding-top: 8px;
}

.fa-times{
  padding-left: 10.5cm;
  font-size: 25px;
  padding-top: 8px;
}

.isi img{
  width: 80%;
  margin-right: -550px;
}

.keterangan{
  padding-left: 8cm;
}

.jarak{
  font-size: 18px;
}

.right {
  background-color: #073763;
  float: left;
  width: 18%;
  color: #f1c232;
  text-align: center;
}

.isi{
  background-color: white;
  padding-top: 20px;
  padding-left: 15px;
  color: black;
}

.isi hr{
  margin-left: -15px;
}

.total{
  font-size: 15px;
  margin-left:-15px; 
}

.btn {
  background-color: red;
  border: none;
  color: white;
  cursor: pointer;
  height: 40px;
  font-size: 20px;
}
	</style>

</html>