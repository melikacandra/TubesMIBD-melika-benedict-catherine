<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Virtual Marathon 2021</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
	<div class="header">
		<h1>Status Marathon</h1>
	</div>
	<div class="vertical_nav_bar_admin_daftar_peserta">
		<ul>
			<li><a href=""><!-- home symbol -->Home</a></li>
			<li><a href=""><!-- money symbol -->Pembayaran</a></li>
			<li><a href=""><!-- street symbol -->Track</a></li>
			<li><a href=""><!-- trophy symbol -->Medali</a></li>
			<li><a href=""><!-- person symbol -->Profil</a></li>
			<li><a href=""><!-- logout symbol -->Log Out</a></li>
		</ul>
	</div>
	<div class="horizontal_nav_bar_admin_daftar_peserta">
		<ul>
			<li><a href="">Semua</a></li>
			<li><a href="">Sudah Selesai</a></li>
			<li><a href="">Belum Selesai</a></li>
		</ul>
	</div>
	<div class="admin_profile_content">
		<h2>Daftar Peserta</h2>

		<table width="100%">
			<tr>
				<th>IdPeserta</th>
				<th>Nama</th>
				<th>Track</th>
				<th>Progress</th>
				<th>Waktu Mulai</th>
				<th>Waktu Selesai</th>
				<th>Status</th>
			</tr>
			<?php foreach ($query_result as $key => $value): ?>
			<tr>
				<td><?php echo $value["idPerson"] ?></td>
				<td><?php echo $value["nama"] ?></td>
				<td><?php echo $value["tema"] ?></td>
				<td><?php echo $value["progress"] ?>%</td>
				<td><?php echo $value["waktu_mulai"] ?></td>
				<td><?php echo $value["waktu_selesai"] ?></td>
				<td><?php echo $value["status_selesai"] //if ya symbol checklist, else symbol jam ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
		Keterangan:<br>
		Track Sudah Diselesaikan<br>
		Track Belum Diselesaikan<br>
	</div>
</body>
</html>