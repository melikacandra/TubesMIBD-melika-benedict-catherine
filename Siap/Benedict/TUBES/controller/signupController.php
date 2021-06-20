<?php 

require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class SignupController {

	protected $db;

	public function __construct() {

		$this->db = new MySQLDB("localhost", "root", "", "tugas_besar");

		if (!function_exists('str_contains')) {
    		function str_contains(string $haystack, string $needle): bool {
    			return '' === $needle || false !== strpos($haystack, $needle);
    		}
		}
		
	}

	public function view_signup() {
		return View::createView('signup.php', []);
	}
	
	public function signup_database() {

		$name = $_POST['input_nama_asli'];
		$username = $_POST['input_username'];
		$email = $_POST['input_email_address'];
		$password = $_POST['input_password'];
		$password = md5($password);
		$confirm_password = $_POST['input_password_confirm'];
		$confirm_password = md5($confirm_password);
		$address = $_POST['input_address'];
		$contact = $_POST['input_phone_number'];
		$birthdate = $_POST['input_tanggal_lahir'];
		$gender = $_POST['input_gender'];

		// set default role
		$role = 'Peserta';
		if (str_contains($username, '@admin')) {
			$role = 'Administrator';
		}
		else if (str_contains($username, '@pemilik')) {
			$role = 'Pemilik';
		}

		if ($password == $confirm_password) {
			$query = "INSERT INTO person (nama, username, email, password, gender, alamat, kontak, tgl_lahir, role) VALUES ('$name', '$username', '$email', '$password', '$gender', '$address', '$contact', '$birthdate', '$role')";
			$query_result = $this->db->executeNonSelectQuery($query);
		}

	}



}

?>