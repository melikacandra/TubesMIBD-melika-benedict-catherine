<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="header">Profil</div>
	<div class="vertical_nav_bar_edit_profile"></div>
	<div>
		<form method="POST" action="update_database">
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="input_nama_asli"></td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="text" name="input_email_address" id="input_email_address"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><textarea style="resize:none" id="input_address" name="input_address" rows="4" cols="20"></textarea></td>
				</tr>
				<tr>
					<td>Kontak</td>
					<td><input type="text" name="input_phone_number"></td>
				</tr>
			</table>
			<button type="submit">Save</button>
		</form>
	</div>
</body>
</html>