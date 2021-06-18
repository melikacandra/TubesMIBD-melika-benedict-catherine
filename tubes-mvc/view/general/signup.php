<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="view/general/styleSignup.css" type="text/css" rel="stylesheet">
	</head>

	<body>
		<div class="signup">
			<h1>Virtual Marathon 2021</h1>
			<br>
			<form class="form-horizontal"  method="POST" action="signup_database">
				<div class="form-group">
			      	<label class="control-label col-sm-4">Nama</label>
		      		<div class="col-sm-5">
		        		<input type="text" class="form-control" name="input_nama_asli">
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4">Nama Pengguna</label>
		      		<div class="col-sm-5">
		        		<input type="text" class="form-control" name="input_username">
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4">Email</label>
		      		<div class="col-sm-5">
		        		<input type="text" class="form-control" name="input_email_address">
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4">Kata Sandi</label>
		      		<div class="col-sm-5">
		        		<input type="password" class="form-control" name="input_password">
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4">Konfirmasi Kata Sandi</label>
		      		<div class="col-sm-5">
		        		<input type="password" class="form-control" name="input_password_confirm">
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4">Alamat</label>
		      		<div class="col-sm-5">
		        		<input type="text" class="form-control" name="input_address">
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4">Kontak</label>
		      		<div class="col-sm-5">
		        		<input type="text" class="form-control" name="input_phone_number">>
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4" >Tanggal Lahir</label>
		      		<div class="col-sm-5">
		        		<input type="date" class="form-control" name="input_tanggal_lahir">
		      		</div>
			    </div>
			    <div class="form-group">
			      	<label class="control-label col-sm-4">Jenis Kelamin</label>
		      		<div class="col-sm-5">
		        		<label class="tombol"><input type="radio" name="input_gender" value="male">  Laki-laki</label>
		        		<label class="tombol1"><input type="radio" name="input_gender" value="female"> Perempuan</label>
		      		</div>
			    </div>
				<button type="submit">Sign Up</button><br>
				<br><br>
				<a href="login">Sudah punya akun?</a>
				<br><br>
			</form>
		</div>
	</body>
</html>