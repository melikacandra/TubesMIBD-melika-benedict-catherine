<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div>
		Selamat Datang, <?php echo $_SESSION['role'] ?>
		<a href="profile" class="">Profil</a>
		<a href="logout" class="">Log Out</a>
	</div>
	<div>
		<a href="status-transaksi" class="">Status Pembayaran</a>
		<a href="status-marathon" class="">Status Marathon</a>
		<a href="status-medali" class="">Status Medali</a>
	</div>
</body>
</html>