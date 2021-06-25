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
				SELECT HimpunanTrack.idMedali, HimpunanTrack.tgl_perolehan, HimpunanTrack.nama, track.tema, HimpunanTrack.durasi_tempuh, HimpunanTrack.alamat, HimpunanTrack.status_kirim
				FROM track INNER JOIN (
					SELECT medali.idMedali, medali.tgl_perolehan, medali.durasi_tempuh, person.nama, person.alamat, medali.status_kirim
					FROM medali INNER JOIN person ON medali.idPerson = person.idPerson
				) AS HimpunanTrack ON track.idTrack = HimpunanTrack.idTrack";

			$query_result = $this->db->executeSelectQuery($query);

			return View::createView('administrator/daftarMedali.php', ["query_result" => $query_result]);
		}
		else {
			header("Location: login");
		}

	}

}

?>