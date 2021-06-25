<?php 

require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class EditProfileController {

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

	public function view_update_signup() {
		if (isset($_SESSION['idPerson'])) {
			return View::createView('editProfile.php', []);
		}
		else {
			header("Location: login");
		}
	}
	
	public function update_database() {

		$idPerson = $_SESSION['idPerson'];
		$name = $_POST['input_nama_asli'];
		$email = $_POST['input_email_address'];
		$address = $_POST['input_address'];
		$contact = $_POST['input_phone_number'];

		$query = "UPDATE person SET nama = '$name', email = '$email', alamat = '$address', kontak = '$contact' WHERE idPerson = $idPerson";

		$query_result = $this->db->executeNonSelectQuery($query);
	}

}

?>