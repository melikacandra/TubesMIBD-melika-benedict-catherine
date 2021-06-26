<?php 

require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class MedaliController {

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

	public function show_medali() {

		if (isset($_SESSION['idPerson'])) {
			$query = "
				SELECT track.tema, track.region, medali.durasi_tempuh, medali.status_kirim
				FROM track INNER JOIN medali ON track.idTrack = medali.idTrack";

			$query_result = $this->db->executeSelectQuery($query);

			return View::createView('peserta/medali.php', ["query_result" => $query_result]);
		}
		else {
			header("Location: login");
		}

	}

}

?>