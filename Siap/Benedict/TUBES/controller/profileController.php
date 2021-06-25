<?php 

require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/user.php";

class ProfileController {

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

	public function view_profile() {

		if (isset($_SESSION['idPerson'])) {
			$session = $_SESSION['idPerson'];
		$query = "SELECT * FROM person WHERE idPerson = '$session'";
		$query_result = $this->db->executeSelectQuery($query);

		$user = new User($query_result[0]['idPerson'], $query_result[0]['nama'], $query_result[0]['username'], $query_result[0]['email'], $query_result[0]['password'], $query_result[0]['gender'], $query_result[0]['alamat'], $query_result[0]['kontak'], $query_result[0]['tgl_lahir'], $query_result[0]['role']);

		return View::createView('profile.php', ["user" => $user]);
		}
		else {
			header("Location: login");
		}

	}
	
}

?>