<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Virtual Marathon 2021</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
	<div class="header">
		<h1>Pembayaran</h1>
	</div>
	<div class="vertical_nav_bar_admin_data_transaksi">
		<ul>
			<li><a href=""><!-- home symbol -->Home</a></li>
			<li><a href=""><!-- money symbol -->Pembayaran</a></li>
			<li><a href=""><!-- street symbol -->Track</a></li>
			<li><a href=""><!-- trophy symbol -->Medali</a></li>
			<li><a href=""><!-- person symbol -->Profil</a></li>
			<li><a href=""><!-- logout symbol -->Log Out</a></li>
		</ul>
	</div>
	<div class="horizontal_nav_bar_admin_data_transaksi">
		<ul>
			<li><a href="">Semua</a></li>
			<li><a href="">Belum Divalidasi</a></li>
			<li><a href=""><!-- street symbol -->Track</a></li>
			<li><a href="">Valid</a></li>
			<li><a href="">Tidak Valid</a></li>
		</ul>
	</div>
	<div class="admin_profile_content">
		<h2>Daftar Transaksi</h2>

		<table width="100%">
			<tr>
				<th>Tanggal</th>
				<th>Nama</th>
				<th>Bayar(Rp)</th>
				<th>Track</th>
				<th>Bukti</th>
				<th>Status</th>
				<th>Keterangan</th>
			</tr>
			<?php foreach ($query_result as $key => $value): ?>
			<tr>
				<td><?php echo $value["tgl_transaksi"] ?></td>
				<td><?php echo $value["nama"] ?></td>
				<td><?php echo $value["harga"] ?></td>
				<td><?php echo $value["tema"] ?></td>
				<td><?php echo $value["bukti_transaksi"] ?></td>
				<td><?php echo $value["status_verifikasi"] ?></td>
				<td><?php echo $value["keterangan"] ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
</body>
</html>