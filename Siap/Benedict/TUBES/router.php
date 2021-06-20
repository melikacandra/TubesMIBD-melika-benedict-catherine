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
			case $baseURL. '/logout':
				require_once "controller/logoutController.php";
				$logoutCtrl = new LogoutController();
				$logoutCtrl->logout();
				break;

			// admin
			case $baseURL. '/main':
				require_once "controller/administrator/mainController.php";
				$mainCtrl = new MainController();
				echo $mainCtrl->view_main();
				break;
			case $baseURL. '/status-marathon':
				require_once "controller/administrator/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->show_peserta();
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


			default:
				echo '404 Not Found';
				break;
		}
	}

?>