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

				SELECT transaksi.tgl_transaksi, person.nama, track.harga, track.tema, transaksi.bukti_transaksi, transaksi.status_verifikasi, transaksi.keterangan
				FROM person INNER JOIN transaksi ON person.idPerson = transaksi.idPerson INNER JOIN akses ON transaksi.idTransaksi = akses.idTransaksi INNER JOIN track ON akses.idTrack = track.idTrack WHERE transaksi.status_verifikasi != 'tidak valid'";

				
			$query_result = $this->db->executeSelectQuery($query);

			return View::createView('administrator/daftarTransaksi.php', ["query_result" => $query_result]);
		}
		else {
			header("Location: login");
		}

		
	}

}

?>