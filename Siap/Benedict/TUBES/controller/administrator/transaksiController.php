<?php 

require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class TransaksiController {

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

	public function show_transaksi() {

		if (isset($_SESSION['idPerson'])) {
			$query = "
				SELECT transaksi.tgl_transaksi, HimpunanTransaksi.nama, HimpunanTransaksi.harga, HimpunanTransaksi.tema, transaksi.bukti_transaksi, transaksi.status_verifikasi, transaksi.keterangan
				FROM transaksi INNER JOIN (
					SELECT HimpunanTrack.idPerson, HimpunanTrack.nama, HimpunanTrack.idTrack, track.harga, track.tema
					FROM track INNER JOIN (
						SELECT person.idPerson, person.nama, jalan.idTrack
						FROM person INNER JOIN jalan ON person.idPerson = jalan.idPerson
					) AS HimpunanTrack ON track.idTrack = HimpunanTrack.idTrack
				) AS HimpunanTransaksi ON transaksi.idPerson = HimpunanTransaksi.idPerson";

			$query_result = $this->db->executeSelectQuery($query);

			return View::createView('administrator/daftarTransaksi.php', ["query_result" => $query_result]);
		}
		else {
			header("Location: login");
		}

		
	}

}

?>