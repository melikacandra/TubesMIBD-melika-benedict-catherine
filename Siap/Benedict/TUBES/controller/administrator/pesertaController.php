<?php 

require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class PesertaController {

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

	public function show_peserta() {

		if (isset($_SESSION['idPerson'])) {
			$query = "
				SELECT HimpunanMedali.idPerson, HimpunanMedali.nama, HimpunanMedali.tema, HimpunanMedali.progress, HimpunanMedali.waktu_mulai, HimpunanMedali.waktu_selesai, HimpunanMedali.status_selesai
				FROM medali INNER JOIN (
					SELECT HimpunanTrack.idPerson, HimpunanTrack.nama, HimpunanTrack.progress, HimpunanTrack.waktu_mulai, HimpunanTrack.waktu_selesai, HimpunanTrack.status_selesai, HimpunanTrack.idTrack, track.tema
					FROM track INNER JOIN (
						SELECT person.idPerson, person.nama, jalan.progress, jalan.waktu_mulai, jalan.waktu_selesai, jalan.status_selesai, jalan.idTrack
						FROM person INNER JOIN jalan ON person.idPerson = jalan.idPerson
					) AS HimpunanTrack ON track.idTrack = HimpunanTrack.idTrack
				) AS HimpunanMedali ON medali.idPerson = HimpunanMedali.idPerson";

			$query_result = $this->db->executeSelectQuery($query);

			return View::createView('administrator/daftarPeserta.php', ["query_result" => $query_result]);
		}
		else {
			header("Location: login");
		}

	}

}

?>