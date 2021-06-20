<?php 

require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class LogoutController {

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

	public function logout() {

		session_destroy();

		header("Location: login");
	}

}

?>