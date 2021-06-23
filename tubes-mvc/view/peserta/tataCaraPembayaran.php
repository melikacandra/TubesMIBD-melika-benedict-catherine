<!DOCTYPE html>
<html>
	<head>
		<title>Tata Cara Pembayaran</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<Link href="styleTataCaraPembayaran.css" type="text/css" rel="stylesheet">
	</head>

	<body>
	<?php 
		include 'layout/navbar.php';
	?>
		<div class="sebelah">
			<h1>Transaksi</h1>
		</div>


		<div>
		  	<div class="main">
		  		<table class="atas12">
		  			<tr>
		  				<td><i class="fa fa-shopping-cart"></i></td>
		  				<td> Tata Cara Pembayaran</td>
		  			</tr>
		  		</table>
		  		<br>
		  		<div class="isi2">
			  		<h4> Metode Pembayaran</h4>
		  		</div>


		  		<div class="isi">
		  			<b>Transfer Antar Bank</b>
		  			<p>Nomor Rekening:</p>
		  			<p>9182823882</p>
		  			<p>BANK BNI</p>
		  			<p>a.n PT.Marathonia</p>

			    	<b>Gopay</b>
			    	<p>Nomor Telepon:<p>
			    	<p>08782828282</p>
			    	<p>a.n Joshua Gates</p>
			    	<br>
			    </div>
		  	</div>

		  	<div class="right">
			    <h3>Ringkasan Belanja</h3>
			    <div class="isi">
			    	<table>
			    		<tr>
			    			<td><b>Jumlah Track</b></td>
			    			<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b> 1</b></td>
			    		</tr>
			    		<tr>
			    			<td>KiyomizuD,Jp</td>
			    			<td>&emsp;&emsp; Rp200.000</td>
			    		</tr>
			    	</table>

			    	<hr>

			    	<b class="total">Total Harga Rp200.000</b>

			    	<br><br>

			    	<a href="buktiPembayaran.php"><button class="btn"> Saya Sudah Bayar</button></a>

			    	<br><br>
			    </div>
			</div>
			<button class="btn1" id="myBtn"> Petunjuk Pembayaran</button>

			<div id="myModal" class="modal">
			  	<div class="modal-content">
			   		<span class="close">&times;</span>
		   			<h3><b>Petunjuk Pembayaran</b></h3>
		    		<p>Langkah-langkah melakukan pembayaran: </p>
			    	<p>1. Pilih Metode Pembayaran yang anda inginkan.</p>
			    	<p>2. Transfer melalui nomor rekening/nomor akun yang ada dalam website.</p>
			    	<p>3. Klik tombol "Saya Sudah Bayar", maka anda akan masuk ke dalam form bukti pembayaran.</p>
			    	<p>4. Upload bukti pembayaran anda pada form tersebut.</p>
			    	<p>5. Klik Submit dan tunggu hingga admin memverifikasi pembayaran anda.</p>
			  	</div>
			</div>
		</div>
		<script>
			var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
		</script>
	</body>
	<style>
		body {
  margin: 0;
  background-color: #9fc5f8;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 7%;
  background-color: #073763;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: white;
  padding: 8px 15px;
  text-decoration: none;
}

.fa-home{
  padding-top: 30%;
}

.fa-user-circle-o{
  padding-top: 250%;
}

a:hover{
  color: lightblue;
}

.sebelah{
  margin-left: 7%;
  padding-left: 10px;
  padding-bottom: 20px;
  background-color: #2b78e4;
  padding-left: 15px;
  margin-bottom: 70px;
  
}

h1{
  display: inline-flex;
  padding-left: 10px;
  margin-bottom: 10px;
  color: white;
}


/*isi tengah dan kanan*/
.main {
  float: left;
  width: 60%;
  height: 14cm;
  padding: 0 20px;
  margin-left: 10%; 
  margin-right: 3%;
  margin-bottom: 10%;
  background-color: #597eaa;
  color: #f1c232;
}

.main .atas12{
  font-size: 30px;

}

.fa-shopping-cart{
  padding-right: 20px;
  font-size: 40px;
  padding-top: 8px;
}

.main .isi2{
  background-color: #073763;
  color: #f1c232;
  width: 8cm;
  height: 30px;
  margin-left: 30%;
  text-align: center;
}

.main .isi{
  width: 8cm;
  margin-left: 30%;
}

.main .isi b{
  font-size: 20px;
}

.main .isi p{
  padding-left: 30px;
}

.right {
  background-color: #073763;
  float: left;
  width: 18%;
  color: #f1c232;
  text-align: center;
}

.isi{
  background-color: white;
  padding-top: 20px;
  padding-left: 15px;
  color: black;
}

.isi hr{
  margin-left: -15px;
}

.total{
  font-size: 15px;
  margin-left:-15px; 
}

.btn {
  background-color: #ff9900;
  border: none;
  color: white;
  cursor: pointer;
  height: 40px;
  font-size: 15px;
}

.btn1 {
  background-color: #073763;
  margin-top: 30px;
  margin-left: 35px;
  border: none;
  color: #f1c232;
  cursor: pointer;
  height: 40px;
  font-size: 15px;
}

/*popup*/
.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}

/* Modal Content */
.modal-content {
  margin: auto;
  padding:1% 2% 1% 2%; 
  border: 1px solid #888;
  width: 30%;
}	
	</style>
</html>