<?php 

	$url = $_SERVER['REDIRECT_URL'];
	$baseURL = '/Pemrograman Berbasis Web/TUBES';

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		switch ($url) {
			// umum
			case $baseURL. '/login':
				require_once "controller/loginController.php";
				$loginCtrl = new LoginController();
				echo $loginCtrl->view_login();
				break;
			case $baseURL. '/signup':
				require_once "controller/signupController.php";
				$signupCtrl = new SignupController();
				echo $signupCtrl->view_signup();
				break;
			case $baseURL. '/profile':
				require_once "controller/profileController.php";
				$profileCtrl = new ProfileController();
				echo $profileCtrl->view_profile();
				break;
			case $baseURL. '/update':
				require_once "controller/editProfileController.php";
				$editProfileCtrl = new editProfileController();
				echo $editProfileCtrl->view_update_signup();
				break;
			case $baseURL. '/logout':
				require_once "controller/logoutController.php";
				$logoutCtrl = new LogoutController();
				$logoutCtrl->logout();
				break;

			// admin
			case $baseURL. '/mainAdmin':
				require_once "controller/administrator/mainController.php";
				$mainCtrl = new MainController();
				echo $mainCtrl->view_main();
				break;
			case $baseURL. '/status-transaksi':
				require_once "controller/administrator/transaksiController.php";
				$transaksiCtrl = new TransaksiController();
				echo $transaksiCtrl->show_transaksi();
				break;
			case $baseURL. '/status-marathon':
				require_once "controller/administrator/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->show_peserta();
				break;
			case $baseURL. '/status-medali':
				require_once "controller/administrator/medaliController.php";
				$medaliCtrl = new MedaliController();
				echo $medaliCtrl->show_medali();
				break;

			//peserta
			case $baseURL. '/homepage':
				require_once "controller/peserta/homepageController.php";
				$homepageCtrl = new HomepageController();
				echo $homepageCtrl->view_homepage();
				break;


			default:
				echo '404 Not Found';
				break;
		}
	}
	else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		switch ($url) {
			// umum
			case $baseURL. '/login_validasi':
				require_once "controller/loginController.php";
				$loginCtrl = new LoginController();
				$loginCtrl->login_database();
				break;
			case $baseURL. '/signup_database':
				require_once "controller/signupController.php";
				$signupCtrl = new SignupController();
				$signupCtrl->signup_database();
				header('Location: login');
				break;
			case $baseURL. '/update_database':
				require_once "controller/editProfileController.php";
				$editProfileCtrl = new editProfileController();
				$editProfileCtrl->update_database();
				header('Location: profile');
				break;


			default:
				echo '404 Not Found';
				break;
		}
	}

?>