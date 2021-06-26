<?php 

require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class ProgressController {

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

	public function show_progress() {

		if (isset($_SESSION['idPerson'])) {
			$query = "
				SELECT jalan.jarak_tempuh, jalan.progress, track.tema, track.region, track.gambar
				FROM jalan INNER JOIN track ON jalan.idTrack = track.idTrack";

			$query_result = $this->db->executeSelectQuery($query);

			return View::createView('peserta/progress.php', ["query_result" => $query_result]);
		}
		else {
			header("Location: login");
		}

	}

}

?>