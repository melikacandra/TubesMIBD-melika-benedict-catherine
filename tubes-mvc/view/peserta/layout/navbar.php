<link href="view/peserta/css/navbar.css" type="text/css" rel="stylesheet">
<ul>
			<li><a id="home" class="fa fa-home" href="peserta"></a></li>
			<li><a href="peserta">Home</a></li>
			<li><a id="progress" class="fa fa-line-chart" href="progress"></a></li>
			<li><a  href="#">Progress</a></li>
			<li><a class="fa fa-exchange" href="peserta/keranjangTransaksi"></a></li>
			<li><a href="peserta/keranjangTransaksi">Transaksi</a></li>
			<li><a href="medali"><img src="view/peserta/assets/mendali.png" width="18" height="18"></a></li>
			<li><a href="medali">Medali</a></li>
			<li><a class="fa fa-user-circle-o" href="peserta/profile"></a></li>
			<li><a id="profil"href="#">Profil</a></li>
			<li><a id="logout" class="fa fa-sign-out" href="logout"></a></li>
			<li><a href="logout">Log Out</a></li>
		</ul>
		<script>
			let home = document.getElementById("home").addEventListener("click", toHome);
        function toHome(event){
            location.replace("http://localhost/tubes-mvc/peserta");
        }
        let logout = document.getElementById("logout").addEventListener("click", logOut);
        function logOut(event){
            location.replace("http://localhost/tubes-mvc/logout");
        }
        let profil = document.getElementById("profil").addEventListener("click", cekProfil);
        function cekProfil(event){
            location.replace("http://localhost/tubes-mvc/peserta/profile");
        }
        let marathon = document.getElementById("progress").addEventListener("click", cekProgress);
        function cekProgress(event){
            location.replace("http://localhost/tubes-mvc/peserta/progress");
        }
        let transaksi = document.getElementById("cekTransaksi").addEventListener("click", cekTransaksi);
        function cekTransaksi(event){
            location.replace("http://localhost/tubes-mvc/peserta/cekPembayaran");
        }
        let medali = document.getElementById("cekMedali").addEventListener("click", cekMedali);
        function cekMedali(event){
            location.replace("http://localhost/tubes-mvc/peserta/cekMedali");
		</script>