<!DOCTYPE html>
<html>
	<head>
		<title>Track Option 1</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="styleTrackOption1.css" type="text/css" rel="stylesheet">
	</head>

	<body>
	<?php 
		include 'layout/navbar.php';
	?>

		<div class="sebelah">
			<i class="fa fa-road"></i>
			<h1>Track</h1>
		</div>

		<div>
		  	<div class="main">
		  		<h3>Deskripsi</h3>
		  		<div class="isi">
		  			<p>
		  			Pemandangan Gunung Fuji yang mengagumkan, daun-daun indah berguguran di Danau Kawaguchi, dan suasana tentram di sekitar danau. Hal-hal tersebut membuat ajang maraton ini peserta dibanjiri karena pemandangan indah yang tidak dapat ditemukan di tempat lain. Pada ajang maraton ini, peserta mengikuti kategori marathon dengan trek sepanjang 4.5 kilometer yang menyusuri area sekitar Danau Kawaguchi dan Danau Saiko.
		  			</p>
		  		</div>
		  	</div>



		  	<div class="right">
			    <h3>Track Gunung Fuji, Jepang</h3>
			    <div class="isi2">
			    	<img src="assets/fuji.png">	
			    	 <table>
				        <tr>
				            <td class="kiri"><b>4.5 km</b></td>
				            <td><b>Rp200.000</b></td>
				        </tr>
				    </table>
				    <br>
				    <a href="trackOption2.php"><button><i class="fa fa-chevron-right"> Next Track</i></button></a>
			    </div>
			</div>
		</div>

		<div class="bawah">
			<a href="transaksi.php"><button><i class="fa fa-shopping-cart"> PURCHASE</i></button>	
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
  padding: 8px 13px;
  text-decoration: none;
}

.fa-home{
  padding-top: 35%;
}


.fa-user-circle-o{
  padding-top: 240%;
}

a:hover{
  color: lightblue;
}

.sebelah{
  margin-left: 7%;
  padding-left: 15px;
  padding-bottom: 20px;
  background-color: #2b78e4;
}

h1{
  display: inline-flex;
  padding-left: 10px;
  margin-bottom: 10px;
  color: white;
}

.sebelah .fa-road{
  font-size: 40px;
  color: white;
}


/*isinya yang ditengah*/
.main {
  float: left;
  width: 40%;
  height: 1.5cm;
  text-align: center;
  margin:2% 5% 10% 13%;
  background-color: #073763;
  color: #f1c232;
}

.isi{
  background-color: white;
  color: black;
  padding: 10px;
  text-align: left;
}

.right {
  background-color: #073763;
  margin-top: 2%;
  float: left;
  width: 30%;
  text-align: center;
  color: white;
}

.isi2{
  background-color: #9fc5f8;
}

.isi2 img{
  width: 60%;
}

table {
    border-collapse: collapse;
    margin-top: 10px;
    margin-left: 2.2cm;
    width: 60%;
    background-color: #2b78e4;
    color: #f1c232;
    padding: 10px;
}

td:first-child {
    border-right: 1px solid black;
}

td{
  padding: 10px;
}

.isi2 button{
  background-color: #660000;
  color: white;
  width: 25%;
  height: 40px;
  margin-left: 80%; 
}

.bawah{
  margin-top: 30%;
  margin-left: 40%;
}

.bawah button{
  width: 30%;
  height: 60px;
  background-color: red;
  color: white;
  font-size: 30px;
}


</style>
</html>