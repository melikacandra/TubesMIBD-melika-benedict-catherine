<!DOCTYPE html>
<html>
	<head>
		<title>Mendali</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="view/peserta/css/styleMendali.css" type="text/css" rel="stylesheet">
	</head>

	<body>
	<?php 
		include 'layout/navbar.php';
	?>

		
		<div class="sebelah">
			<img src="assets/mendali.png" width="40" height="40">
			<h1>Mendali saya</h1>
		</div>

		
        <div class="w3-hide w3-container" id="liq">
            <select
                class="w3-select w3-button w3-border select"
                name="option">
                <option value="1">Gunung Fuji, Jepang</option>
                <option value="2">Piramida Giza,Mesir</option>
            </select>
        </div>
		

		<div class="qwe">
			<div class="satu11">
				<article class="satu">
					<i class="fa fa-trophy"></i>
					<h3>Gunung Fuji, Jepang</h3>
					<p>Waktu tempuh:2 hari</p>
				</article>
				<article class="dua">
					<i class="fa fa-hourglass-end"></i>
					<i class="fa fa-paper-plane"></i>
					<i class="fa fa-check-square"></i>
				</article>
				<article class="tiga">
					<i class="fa fa-check">  <b>Sudah diterima</b></i>
				</article>
			</div>

			<div class="dua22">
				<article class="satu1">
					<i class="fa fa-trophy"></i>
					<h3>Piramida Giza, Mesir</h3>
					<p>Waktu tempuh:1 hari</p>
				</article>
				<article class="dua1">
					<i class="fa fa-hourglass-end"></i>
					<i class="fa fa-paper-plane"></i>
					<i class="fa fa-check-square"></i>
				</article>
				<article class="tiga1">
					<b>Sudah diterima</b>
				</article>
				<article>
					<a href="mendali2.php" class="btn btn-info" role="button">Tandai Terima</a>
				</article>
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
  
}

h1{
  display: inline-flex;
  padding-left: 10px;
  margin-bottom: 10px;
  color: white;
}

#liq{
  margin-left: 12%;
  margin-top: 4%;
}

.qwe{
  display: flex;
}

.satu11{
  margin-left: 15%;
  margin-top: 2%;
}

.dua22{
  margin-left: 6%;
  margin-top: 2%;
}

.satu, .dua, .tiga,.satu1, .dua1, .tiga1 {
    width: 100%;
    margin: 20px;
    text-align: center;
    padding: 5px;
    border-radius: 4px;
}

.satu {
  background: #fdb0c0;
  color: #a64d79;
}

.satu1{
  background: #ffe599;
  color: #7f6000;
}

.fa-trophy{
  font-size: 100px;
}

.dua, .tiga, .dua1{
  background: white;
  color: #009e0f;
}

 .tiga1, .dua1 .fa-check-square{
  background: white;
  color: black;
 }

.dua i, .dua1 i{
  padding-left: 12px;
  padding-right: 12px;
  font-size: 30px;
}

.tiga, .tiga1 i{
  font-size: 30px;
}

.tiga, .tiga1 b{
  font-size: 23px;
}

.btn{
    padding: 7px;
    margin-left: 39%;
    width: 105px;
    border: 1px solid black;
    color: white;
    background: #2b78e4;
    cursor: pointer;
    border-radius: 4px;
}
	</style>
</html>