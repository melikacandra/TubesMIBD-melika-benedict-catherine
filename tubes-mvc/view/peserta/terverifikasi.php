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
			    			<td><a href="currentProgress.php"><button>Masuk ke Track</button></a>
			    		</tr>
			    	</table>
			    	<br>
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
  border-left:1px solid black;
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

.isi2 .tanggal{
  padding-left: 9cm;
}

.main .atas12{
  font-size: 30px;

}

.fa-shopping-cart{
  padding-right: 20px;
  font-size: 40px;
  padding-top: 8px;
}

.isi{
  background-color: white;
  padding-top: 20px;
  padding-left: 15px;
  color: black;
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

.fa-clock-o{
  font-size: 18px;
  color: black;
}

.status{
  padding-top: 30px;
}
	</style>
</html>