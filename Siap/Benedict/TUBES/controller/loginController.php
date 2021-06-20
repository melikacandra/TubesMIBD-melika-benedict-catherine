<?php 

require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class LoginController {

	protected $db;

	public function __construct() {

		session_start();

		$this->db = new MySQLDB("localhost", "root", "", "tugas_besar");

		if (!function_exists('str_contains')) {
    		function str_contains(string $haystack, string $needle): bool {
    			return '' === $needle || false !== strpos($haystack, $needle);
    		}
		}
		
	}

	public function view_login() {
		return View::createView('login.php', []);
	}
	
	public function login_database() {

		$username = $_POST['input_username'];
		$password = $_POST['input_password'];
		$password = md5($password);

		$query = "SELECT * FROM person WHERE username = '$username' AND password = '$password'";

		$query_result = $this->db->executeSelectQuery($query);

		if (count($query_result) == 0) {
			header("Location: login");
		}
		else {
			$_SESSION['idPerson'] = $query_result[0]['idPerson'];
			$_SESSION['role'] = $query_result[0]['role'];
			header("Location: main");
		}

	}

}

?>