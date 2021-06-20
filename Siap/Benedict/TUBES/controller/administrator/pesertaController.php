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

		$query = "
			SELECT HimpunanSemua.idPerson, HimpunanSemua.nama, HimpunanSemua.tema, HimpunanSemua.progress,medali.waktu_mulai, medali.waktu_selesai, HimpunanSemua.status_selesai
			FROM medali INNER JOIN (
				SELECT HimpunanPersonJalan.idPerson, HimpunanPersonJalan.nama, HimpunanPersonJalan.progress, HimpunanPersonJalan.status_selesai, HimpunanPersonJalan.idTrack, track.tema
				FROM track INNER JOIN (
        			SELECT person.idPerson, person.nama, jalan.progress, jalan.status_selesai, jalan.idTrack
       				FROM person INNER JOIN jalan ON person.idPerson = jalan.idPerson
    			) AS HimpunanPersonJalan ON track.idTrack = HimpunanPersonJalan.idTrack
			) AS HimpunanSemua ON medali.idPerson = HimpunanSemua.idPerson";

		$query_result = $this->db->executeSelectQuery($query);

		return View::createView('administrator/daftarPeserta.php', ["query_result" => $query_result]);
	}

}

?>