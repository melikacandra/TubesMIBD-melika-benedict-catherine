<!DOCTYPE html>
<html>
	<head>
		<title>Progress</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="styleProgress.css" type="text/css" rel="stylesheet">
	</head>

	<body>
	<?php 
		include 'layout/navbar.php';
	?>
		
		<div class="sebelah">
			<i class="fa fa-line-chart"></i>
			<h1>Progress</h1>
		</div>

		<div class="pro">
			<article>
				<p>In Progress</p>
			</article>
		</div>

		<br>

 		<div class="row">
		  	<div class="column">
		    	<a href="currentProgress.php">
		    		<div class="card">
			      		<p>Kiyomizu Dera, Jepang</p>
				      	<img src="assets/kiyomizu.jpg">
				      	<h3>0 km &emsp; 0%</h3>
			    	</div>
			    </a>
			 </div>
		</div>

		<br>

		<div class="pro1">
			<article>
				<p>Finish</p>
			</article>
		</div>

		<br>

		<div class="row">
		  	<div class="column">
		    	<div class="card">
		      		<p>Gunung Fuji, Jepang</p>
			      	<img class="gambar" src="assets/fuji.png">
			      	<h3>4.5 km &emsp; 100% &emsp; <a href="mendali.php"><img class="gambar1" src="assets/mendali.png"></a></h3>
		    	</div>
			 </div>

			 <div class="column">
			    <div class="card dua">
			      	<p>Piramida Giza, Mesir</p>
			      	<img class="gambar" src="assets/giza.jpg">
			      	<h3>5.0 km &emsp; 100% &emsp; <a href="mendali.php"><img src="assets/mendali.png"></a></h3>
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
}

li a {
  display: block;
  color: white;
  padding: 8px 13px;
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

.sebelah .fa-line-chart{
  font-size: 40px;
  color: white;
}

.pro, .pro1{
  margin-left: 15%;
  margin-right: 7%;
  margin-top: 2%;
  padding: 3px;
  padding-left: 10px;
  background-color: #597eaa;
  font-size: 25px;
  color: white;
}

.column {
  float: left;
  width: 30%;
  padding: 0 10px;
}

.column a{
  text-decoration: none;
}

.dua{
  width: 108%;
}

.row {
  margin-left: 5cm;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.card {
  padding: 16px;
  text-align: center;
  background-color: #073763;
}

.card img{
  width: 70%;
  height: 70%;
}

.card h3 img{
  width: 15%;
  height: 15%;
}

.card p{
  color: white;
}

.card h3{
  color: #ff9900;
}
	</style>
</html>