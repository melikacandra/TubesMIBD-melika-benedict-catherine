<?php 

	$url = $_SERVER['REDIRECT_URL'];
	$baseURL = '/tubes-mvc';

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		switch ($url) {
			//umum
			case $baseURL. '/home':
				require_once "controller/loginController.php";
				$loginCtrl = new LoginController();
				echo $loginCtrl->ViewHome();
				break;
			case $baseURL. '/signup':
				require_once "controller/signupController.php";
				$signupCtrl = new SignupController();
				echo $signupCtrl->ViewSignup();
				break;
			case $baseURL. '/login':
				require_once "controller/loginController.php";
				$loginCtrl = new LoginController();
				echo $loginCtrl->ViewLogin();
				break;
			case $baseURL.'/logout':
				require_once "controller/loginController.php";
				$outCtrl = new LoginController();
				$outCtrl->logout();
				echo $outCtrl->ViewLogin();
				break;			
			//peserta	
			case $baseURL.'/peserta':
				require_once "controller/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->ViewPeserta();
				break;
			case $baseURL.'/peserta/profile':
				require_once "controller/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->ViewProfile();
				break;
			case $baseURL.'/peserta/profile/edit':
				require_once "controller/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->ViewEditProfile();
				break;
			case $baseURL.'/peserta/progress':
				require_once "controller/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->ViewAllProgress();
				break;
			case $baseURL.'/peserta/progress/currentProgress':
				require_once "controller/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->ViewSpecifyProgress();
				break;	
			case $baseURL.'/peserta/keranjangTransaksi':
				require_once "controller/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->ViewKeranjangTransaksi();
				break;
			case $baseURL.'/peserta/caraPembayaran':
				require_once "controller/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->ViewCaraBayar();
				break;
			case $baseURL.'/peserta/uploadBuktiBayar':
				require_once "controller/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->ViewUploadBukti();
				break;	
			case $baseURL.'/peserta/riwayatTransaksi':
				require_once "controller/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->ViewRiwayatTransaksi();
				break;
			case $baseURL.'/peserta/riwayatTransaksi/verifikasi':
				require_once "controller/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->ViewSimVerifikasi();
				break;		
			case $baseURL.'/peserta/medali':
				require_once "controller/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->ViewMedali();
				break;
			case $baseURL.'/peserta/track':
				require_once "controller/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->ViewAllTrack();
				break;
			//simulatorTrack
			case $baseURL.'/peserta/track/gunung-fuji':
				require_once "controller/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->ViewSimTrack();
				break;												
			//pemilik	
			case $baseURL.'/pemilik':
				require_once "controller/pemilikController.php";
				$pemilikCtrl = new PemilikController();
				echo $pemilikCtrl->ViewPemilik();
				break;
			case $baseURL.'/pemilik/profile':
				require_once "controller/pemilikController.php";
				$pemilikCtrl = new PemilikController();
				echo $pemilikCtrl->ViewProfile();
				break;
			case $baseURL.'/pemilik/profile/edit':
				require_once "controller/pemilikController.php";
				$pemilikCtrl = new PemilikController();
				echo $pemilikCtrl->ViewEditProfile();
				break;
			case $baseURL.'/pemilik/track':
				require_once "controller/pemilikController.php";
				$pemilikCtrl = new PemilikController();
				echo $pemilikCtrl->ViewTrack();
				break;
			case $baseURL.'/pemilik/laporan-rangkuman':
				require_once "controller/pemilikController.php";
				$pemilikCtrl = new PemilikController();
				echo $pemilikCtrl->ViewLaporanRangkuman();
				break;
			case $baseURL.'/pemilik/laporan-statistik':
				require_once "controller/pemilikController.php";
				$pemilikCtrl = new PemilikController();
				echo $pemilikCtrl->ViewLaporanStatistik();
				break;																			
			//admin
			case $baseURL.'/admin':
				require_once "controller/adminController.php";
				$adminCtrl = new AdminController();
				echo $adminCtrl->ViewAdmin();
				break;
			case $baseURL.'/admin/profile':
				require_once "controller/adminController.php";
				$adminCtrl = new AdminController();
				echo $adminCtrl->ViewProfile();
				break;
			case $baseURL.'/admin/profile/edit':
				require_once "controller/adminController.php";
				$adminCtrl = new AdminController();
				echo $adminCtrl->ViewEditProfile();
				break;
			case $baseURL.'/admin/cekPembayaran':
				require_once "controller/adminController.php";
				$adminCtrl = new AdminController();
				echo $adminCtrl->ViewPembayaran();
				break;
			case $baseURL.'/admin/cekMarathon':
				require_once "controller/adminController.php";
				$adminCtrl = new AdminController();
				echo $adminCtrl->ViewMarathon();
				break;
			case $baseURL.'/admin/cekMedali':
				require_once "controller/adminController.php";
				$adminCtrl = new AdminController();
				echo $adminCtrl->ViewMedali();
				break;
			case $baseURL.'/admin/cekPembayaran/belumSemua':
				require_once "controller/adminController.php";
				$adminCtrl = new AdminController();
				echo $adminCtrl->ViewBelumSemua();
				break;
			//admin simulator	
			case $baseURL.'/admin/cekPembayaran/belumSemua/simulasiTerima':
				require_once "controller/adminController.php";
				$adminCtrl = new AdminController();
				echo $adminCtrl->ViewSimTerima();
				break;
			case $baseURL.'/admin/cekPembayaran/belumSemua/simulasiTolak':
				require_once "controller/adminController.php";
				$adminCtrl = new AdminController();
				echo $adminCtrl->ViewSimTolak();
				break;		

			default:
				echo '404 Not Found';
				break;
		}
	}
	else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		switch ($url) {
			case $baseURL. '/signup_database':
				require_once "controller/signupController.php";
				$signupCtrl = new SignupController();
				$signupCtrl->signup_database();
				header('Location: login');
				break;
			case $baseURL. '/login_database':
				require_once "controller/loginController.php";
				$loginCtrl = new LoginController();
				$loginCtrl->login_database();
				break;					
			default:
				echo '404 Not Found';
				break;
		}
	}

?>