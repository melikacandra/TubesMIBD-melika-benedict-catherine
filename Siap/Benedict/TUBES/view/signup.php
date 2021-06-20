<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Virtual Marathon 2021</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="signup">
		<h2>Virtual Marathon</h2>
		<form method="POST" action="signup_database">
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="input_nama_asli"></td>
				</tr>
				<tr>
					<td>Nama Pengguna</td>
					<td>
						<input type="text" name="input_username" id="input_username">
					</td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="text" name="input_email_address" id="input_email_address"></td>
				</tr>
				<tr>
					<td>Kata Sandi</td>
					<td><input type="password" name="input_password" id="input_password"></td>
				</tr>
				<tr>
					<td>Konfirmasi Kata Sandi&emsp;</td>
					<td><input type="password" name="input_password_confirm"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><textarea style="resize:none" id="input_address" name="input_address" rows="4" cols="20"></textarea></td>
				</tr>
				<tr>
					<td>Kontak</td>
					<td><input type="text" name="input_phone_number"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type="date" name="input_tanggal_lahir"></td> <!-- placeholder="mm/dd/yyyy -->
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						<input type="radio" id="male" name="jenis kelamin" value="male">
						<label for="male">Laki-laki</label>
					</td>
					<td>
						<input type="radio" id="female" name="jenis kelamin" value="female">
						<label for="female">Perempuan</label>
					</td>
				</tr>
			</table>
			<button type="submit">Sign Up</button><br>
			<a class="tanya_akun" href="login">Sudah punya akun?</a>
		</form>
	</div>
</body>
</html>