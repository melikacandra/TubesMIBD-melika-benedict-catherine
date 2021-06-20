<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div>Profil</div>
	<div class="vertical_nav_bar">
		<a href="">Home</a>
		<a href="">Pembayaran</a>
		<a href="">Track</a>
		<a href="">Medali</a>
	</div>
	<div class="content">
		<u><strong><?php echo $user->getNama() ?></strong></u><br>
		<?php echo $user->getUsername() ?><br>
		<?php echo $user->getEmail() ?><br>
		<hr>
		<table>
			<tr>
				<th>Alamat</th>
				<td><?php echo $user->getAlamat() ?></td>
			</tr>
			<tr>
				<th>Kontak</th>
				<td><?php echo $user->getKontak() ?></td>
			</tr>
			<tr>
				<th>Tanggal Lahir</th>
				<td><?php echo $user->getTgl_lahir() ?></td>
			</tr>
			<tr>
				<th>Jenis Kelamin</th>
				<td><?php echo $user->getGender() ?></td>
			</tr>
		</table>
	</div>
</body>
</html>