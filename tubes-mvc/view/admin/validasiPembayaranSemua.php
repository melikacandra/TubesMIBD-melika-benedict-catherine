<!DOCTYPE html>
<html>
	<head>
		<title>Validasi Pembayaran (Semua)</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<Link href="styleValidasipembayaranSemua.css" type="text/css" rel="stylesheet">
	</head>

	<body>
		<div class="header">
			<h1>Pembayaran</h1>
		</div>
		<?php 
			include 'view/admin/layout/left-Catherine.php'
		?>

        <div class="navbar">
		  <a class="active" href="cekPembayaran">Semua</a> 
		  <a href="cekPembayaran/belumSemua">Belum Divalidasi</a> 
		  <a href="#">Valid</a> 
		  <a href="#">Tidak Valid</a> 
		</div>

		<div class="isitengah">
			<h1><b>Daftar Transaksi</b></h1>
			<br>
			<table id="t01">
				 <tr>
				    <th>Tanggal</th>
				    <th>Nama</th> 
				    <th>Bayar (Rp)</th>
				    <th>Track</th>
				    <th>Bukti</th>
				    <th>Status</th>
				    <th>Keterangan</th>
				    <th>Cek</th>
				 </tr>
				 <tr>
				    <td>10-05-21</td>
				    <td>Giacomo Guilizzoni</td>
				    <td>200.000</td>
				    <td>Gn. Fuji</td>
				    <td><a href="#">Pembayaran.jpg</a></td>
				    <td><i class="fa fa-check hijau"></i></td>
				    <td></td>
				    <td><i class="fa fa-eye"></i></td>
				 </tr>
				 <tr>
				    <td>10-05-21</td>
				    <td>Melika Candra</td>
				    <td>200.000</td>
				    <td>Pr. Giza</td>
				    <td><a href="#">Pembayaran.jpg</a></td>
				    <td><i class="fa fa-check hijau"></i></td>
				    <td></td>
				    <td><i class="fa fa-eye"></i></td>
				 </tr>
				 <tr>
				    <td>10-05-21</td>
				    <td>Benedict Febrian</td>
				    <td>200.000</td>
				    <td>Ky. Dera</td>
				    <td><a href="#">Pembayaran.jpg</a></td>
				    <td><i class="fa fa-check biru"></i>&emsp;<i class="fa fa-times biru"></i></td>
				    <td></td>
				    <td><i class="fa fa-eye"></i></td>
				 </tr>
				 <tr>
				    <td>10-05-21</td>
				    <td>Kucing Terbang</td>
				    <td>200.000</td>
				    <td>Sg.Nil</td>
				    <td><a href="#">Pembayaran.jpg</a></td>
				    <td><i class="fa fa-times merah"></i></td>
				    <td>Transaksi Fiktif</td>
				    <td><i class="fa fa-eye"></i></td>
				 </tr>
				 <tr>
				    <td>10-05-21</td>
				    <td>Anak Mesir</td>
				    <td>200.000</td>
				    <td>Sg. Nil</td>
				    <td><a href="#">Pembayaran.jpg</a></td>
				    <td><i class="fa fa-check biru"></i>&emsp;<i class="fa fa-times biru"></i></td>
				    <td></td>
				    <td><i class="fa fa-eye"></i></td>
				 </tr>
				 <tr>
				    <td>10-05-21</td>
				    <td>Hamsky</td>
				    <td>200.000</td>
				    <td>Gn. Fuji</td>
				    <td><a href="#">Pembayaran.jpg</a></td>
				    <td><i class="fa fa-check biru"></i>&emsp;<i class="fa fa-times biru"></i></td>
				    <td></td>
				    <td><i class="fa fa-eye"></i></td>
				 </tr>
				 <tr>
				    <td>10-05-21</td>
				    <td>Gunawan Lala</td>
				    <td>200.000</td>
				    <td>Pr. Giza</td>
				    <td><a href="#">Pembayaran.jpg</a></td>
				    <td><i class="fa fa-check hijau"></i></td>
				    <td></td>
				    <td><i class="fa fa-eye"></i></td>
				 </tr>
			</table>

			<br><br><br>

			<div>
				<p>Keterangan:</p>
				<p><i class="fa fa-check hijau"></i> Transaksi Valid</p>
				<p><i class="fa fa-times merah"></i> Transaksi Ditolak</p>
				<p><i class="fa fa-check biru"></i> Terima &emsp;<i class="fa fa-times biru"></i> Tolak</p>
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

.biru{
    color: #2b78e4;
}

.merah{
    color: #cf2a27;
}
	</style>
</html>