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
		<div class="left">
            <a href="#"><i class= "fa fa-home"></i></a>
            <br>
            <a href="#"><i class= "fa fa-money"></i></a>
            <br>
            <a href="#"><i class= "fa fa-road"></i></a>
            <br>
            <a href="#"><i class= "fa fa-trophy"></i></a>
            <div class="down">
                <hr>
                <a href="#"><i class= "fa fa-user-circle-o"></i></a>
                <br>
                <a href="#"><i class= "fa fa-sign-out"></i></a>
            </div>
        </div>

        <div class="navbar">
		  <a class="active" href="validasiPembayaranSemua.php">Semua</a> 
		  <a href="pembayaranBelumSemua.php">Belum Divalidasi</a> 
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
</html>