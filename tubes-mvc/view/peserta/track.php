<!DOCTYPE html>
<html>
	<head>
		<title>Track</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="styleTrack.css" type="text/css" rel="stylesheet">
	</head>

	<body>
	<?php 
		include 'layout/navbar.php';
	?>

		<input type="text" id="myInput" placeholder="Cari Track Baru">

		<br><br>

		<div class="row">
		  	<div class="column satu">
		  		<div class="card">
		  			<a href="trackOption1.php">
					  	<img src="assets/fuji.png">
					 	<div class="container">
					    	<p>Track Gunung Fuji, Jepang</p> 
					  	</div>
					</a>
				</div>
			</div>

			<div class="column">
		  		<div class="card dua">
			  		<a href="trackOption2.php">
					  	<img src="assets/kiyomizu.jpg">
					 	<div class="container">
					    	<p>Track Kiyomizu Dera, Jepang</p> 
					  	</div>
					</a>
				</div>
			</div>
		</div>

		<br><br>

		<div class="row">
		  	<div class="column">
		  		<div class="card">
			  		<a href="trackOption3.php">
					  	<img src="assets/giza.jpg">
					 	<div class="container">
					    	<p>Track Piramida Giza, Mesir</p> 
					  	</div>
					</a>
				</div>
			</div>

			<div class="column">
		  		<div class="card dua2">
			  		<a href="trackOption4.php">
					  	<img src="assets/nil.jpg">
					 	<div class="container">
					    	<p>Track Sungai Nil, Mesir</p> 
					  	</div>
					</a>
				</div>
			</div>
		</div>
		<br><br>
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


#myInput {
  background-image: url('assets/search.png');
  background-position: 0.5em;
  background-repeat: no-repeat;
  background-size: 20px;
  background-padding: 5px;
  width: 30%;
  font-size: 16px;
  padding: 5px 0 5px 40px;
  border: 1px solid #ddd;
  border-radius: 25px;
  margin-bottom: 12px;
  margin-left: 4cm;
}

.column {
  float: left;
  width: 30%;
  padding: 0 10px;
}

.row {
  margin-left: 13%;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  background-color: #ff9900;
}

.card img{
  width: 100%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container p{
  padding: 5px 50px;
}

.column .dua{
  width: 112%;
}

.card a p{
  padding-left: 55px;
  color: black;
}

.card a{
  text-decoration: none;
}

.dua a p {
  padding-left: 75px;
}

.column .dua2{
  width: 112%;
  height: 265px;
}

.column .dua2 p{
  padding-left: 90px;
}

.dua2 img{
  height: 225px;
}
	</style>
</html>