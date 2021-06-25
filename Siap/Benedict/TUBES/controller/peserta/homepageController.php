<?php 

require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class HomepageController {

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

	public function view_homepage() {

		if (isset($_SESSION['idPerson'])) {
			return View::createView('peserta/homepage.php', []);
		}
		else {
			header("Location: login");
		}
	}

}

?>