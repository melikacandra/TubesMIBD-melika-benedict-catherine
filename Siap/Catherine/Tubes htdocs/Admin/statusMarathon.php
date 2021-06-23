<!DOCTYPE html>
<html>
	<head>
		<title>Status Marathon</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<Link href="styleStatusMarathon.css" type="text/css" rel="stylesheet">
	</head>

	<body>
		<div class="header">
			<h1>Status Marathon</h1>
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
		  <a class="active" href="#">Semua</a> 
		  <a href="#">Sudah Selesai</a> 
		  <a href="#">Belum Selesai</a>
		</div>

		<div class="isitengah">
			<h1><b>Daftar Peserta</b></h1>
			<br>
			<table id="t01">
				 <tr>
				    <th>IdPeserta</th>
				    <th>Nama</th>
				    <th>Track</th>
				    <th>Progress</th>
				    <th>Waktu Mulai</th>
				    <th>Waktu Selesai</th>
				    <th>Status</th>
				 </tr>
				 <tr>
				    <td>0001</td>
				    <td>Jonathan</td>
				    <td>Pr. Giza</td>
				    <td>100%</td>
				    <td>15-05-2001</td>
				    <td>17-05-2001</td>
				    <td><i class="fa fa-check-circle"></i></td>
				 </tr>
				 <tr>
				    <td>0002</td>
				    <td>Gunawan Lala</td>
				    <td>Konoha</td>
				    <td>100%</td>
				    <td>10-05-2001</td>
				    <td>14-05-2001</td>
				    <td><i class="fa fa-check-circle"></i></td>
				 </tr>
				 <tr>
				    <td>0003</td>
				    <td>Hamsky</td>
				    <td>Gn. Fuji</td>
				    <td>100%</td>
				    <td>11-05-2001</td>
				    <td>18-05-2001</td>
				    <td><i class="fa fa-check-circle"></i></td>
				 </tr>
				 <tr>
				    <td>0004</td>
				    <td>Giacomo Guilizzoni</td>
				    <td>Pr. Giza</td>
				    <td>10%</td>
				    <td>16-05-2001</td>
				    <td></td>
				    <td><i class="fa fa-clock-o"></i></td>
				 </tr>
			</table>

			<br><br><br>

			<div>
				<p>Keterangan:</p>
				<p><i class="fa fa-check-circle"></i> Track Sudah Diselesaikan</p>
				<p><i class="fa fa-clock-o"></i> Track Belum Diselesaikan</p>
			</div>
		</div>
	</body>
</html>