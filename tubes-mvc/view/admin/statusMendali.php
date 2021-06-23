<!DOCTYPE html>
<html>
	<head>
		<title>Status Medali</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<Link href="styleValidasipembayaranSemua.css" type="text/css" rel="stylesheet">
	</head>

	<body>
		<div class="header">
			<h1>Status Medali</h1>
		</div>
		<?php 
			include 'view/admin/layout/left-Catherine.php'
		?>
        <div class="navbar">
		  <a class="active" href="#">Semua</a> 
		  <a href="#">Belum Dikirim</a> 
		  <a href="#">Sudah Dikirim</a> 
		  <a href="#">Sudah Diterima</a> 
		</div>

		<div class="isitengah">
			<h1><b>Daftar Medali</b></h1>
			<br>
			<table id="t01">
				 <tr>
				    <th>IdMendali</th>
				    <th>Tanggal Perolehan</th> 
				    <th>Peserta</th>
				    <th>Track</th>
				    <th>Durasi</th>
				    <th>Alamat</th>
				    <th>Status Pengiriman</th>
				 </tr>
				 <tr>
				    <td>0001</td>
				    <td>17-05-2021</td>
				    <td>Jonathan</td>
				    <td>Gunung Fuji</td>
				    <td>2 hari</td>
				    <td>Jl. Kucing No.1</td>
				    <td><i class="fa fa-hourglass-end hijau"></i> <i class="fa fa-paper-plane hijau"></i> <i class="fa fa-check-square hijau"></i></td>
				 </tr>
				 <tr>
				    <td>0002</td>
				    <td>14-05-2021</td>
				    <td>Gunawan Lala</td>
				    <td>Kiyomizu Dera</td>
				    <td>2 hari</td>
				    <td>Jl.Hamster No.2</td>
				    <td><i class="fa fa-hourglass-end hijau"></i> <i class="fa fa-paper-plane hijau"></i> <i class="fa fa-check-square"></i></td>
				 </tr>
				 <tr>
				    <td>0003</td>
				    <td>18-05-2021</td>
				    <td>Hamsky</td>
				    <td>Piramida Giza</td>
				    <td>3 hari</td>
				    <td>Jl.Buaya No.3</td>
				    <td><i class="fa fa-hourglass-end hijau"></i> <i class="fa fa-paper-plane"></i> <i class="fa fa-check-square"></i></td>
				 </tr>
			</table>

			<br><br><br>

			<div>
				<p>Keterangan:</p>
				<p><i class="fa fa-hourglass-end hijau"></i> Medali sedang dalam proses pengepakan</p>
				<p><i class="fa fa-paper-plane hijau"></i> Medali sudah dikirim</p>
				<p><i class="fa fa-check-square hijau"></i> Medali sudah diterima</p>
			</div>
		</div>
	</body>
	<style>
	.header{
    background-color: #085394 ;
    height: 60px;
}
.header h1{
    color: white;
    margin-left: 20px;
    margin-top: 0;
    padding-top: 7px;
    font-size:35px;
    }
.left{
    background-color: #2b78e4 ;
    width: 5%;
    height: 91%;
    position: absolute;
    float: left;
}
.left i{
    font-size: 30px;
    margin-left: 20%;
    margin-top: 20px;
    color: white;
}
.down{
    margin-top: 250px;
}

/*navigation*/

.navbar {
  width: 95.2%;
  background-color: lightgrey;
  margin-left:4.8%; 
  border:1px solid black;
}

.navbar a {
  float: left;
  padding: 12px;
  color: black;
  text-decoration: none;
  font-size: 17px;
  width: 25%;
  text-align: center;
  border-left:1px solid black;
}

.navbar a:hover {
  background-color: grey;
}

.navbar a.active {
  background-color: rgb(0,255,255);
}

.isitengah{
    margin-left:6%;
}

.isitengah h1{
    color: #2b78e4;
}

/*table*/
table {
  width:97%;
}
table, th, td {
  border-collapse: collapse;
  padding-left: 5px;
}
#t01 tr:nth-child(even) {
  background-color: #9fc5f8;
}
#t01 tr:nth-child(odd) {
 background-color: #6fa8dc;
}
#t01 th {
  background-color: #999999;
  color: black;
}

/*warna status table*/
.hijau{
    color: #009e0f;
}
	</style>
</html>