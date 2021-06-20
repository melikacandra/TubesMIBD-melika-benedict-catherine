<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="styleSignup.css" type="text/css" rel="stylesheet">
	</head>

	<body>
		<div class="signup">
			<h1>Virtual Marathon 2021</h1>
			<br>
			<form class="form-horizontal" action="/action_page.php">
				<div class="form-group">
			      	<label class="control-label col-sm-4">Nama</label>
		      		<div class="col-sm-5">
		        		<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4">Nama Pengguna</label>
		      		<div class="col-sm-5">
		        		<input type="text" class="form-control" placeholder="Nama Pengguna" name="pengguna">
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4">Email</label>
		      		<div class="col-sm-5">
		        		<input type="text" class="form-control" placeholder="Email" name="email">
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4">Kata Sandi</label>
		      		<div class="col-sm-5">
		        		<input type="password" class="form-control" placeholder="Kata Sandi" name="password">
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4">Konfirmasi Kata Sandi</label>
		      		<div class="col-sm-5">
		        		<input type="password" class="form-control" placeholder="Konfirmasi Kata Sandi" name="password1">
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4">Alamat</label>
		      		<div class="col-sm-5">
		        		<input type="text" class="form-control" placeholder="Alamat" name="alamat">
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4">Kontak</label>
		      		<div class="col-sm-5">
		        		<input type="text" class="form-control" placeholder="Nomor Telepon" name="kontak">
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4">Tanggal Lahir</label>
		      		<div class="col-sm-5">
		        		<input type="date" class="form-control" placeholder="DD/MM/YYYY" name="tgl">
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4">Jenis Kelamin</label>
		      		<div class="col-sm-5">
		        		<label class="tombol"><input type="radio" name="optradio"> Laki-laki</label>
		        		<label class="tombol1"><input type="radio" name="optradio"> Perempuan</label>
		      		</div>
			    </div>
				<a href="#" class="btn btn-info" role="button">Signup</a>
				<br><br>
				<a href="#">Sudah punya akun?</a>
				<br><br>
			</form>
		</div>
	</body>
</html>