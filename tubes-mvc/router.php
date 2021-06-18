<?php 

	$url = $_SERVER['REDIRECT_URL'];
	$baseURL = '/tubes-mvc';

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		switch ($url) {
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
			case $baseURL.'/peserta':
				require_once "controller/pesertaController.php";
				$pesertaCtrl = new PesertaController();
				echo $pesertaCtrl->ViewPeserta();
				break;
			case $baseURL.'/pemilik':
				require_once "controller/pemilikController.php";
				$pemilikCtrl = new PemilikController();
				echo $pemilikCtrl->ViewPemilik();
				break;
			case $baseURL.'/admin':
				require_once "controller/adminController.php";
				$adminCtrl = new AdminController();
				echo $adminCtrl->ViewAdmin();
				break;

			case $baseURL.'/logout':
				require_once "controller/loginController.php";
				$outCtrl = new LoginController();
				$outCtrl->logout();
				echo $outCtrl->ViewLogin();
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