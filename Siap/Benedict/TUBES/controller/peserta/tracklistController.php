<?php 

require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class TracklistController {

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

	public function show_tracklist() {

		if (isset($_SESSION['idPerson'])) {
			$query = "SELECT * FROM track";

			$query_result = $this->db->executeSelectQuery($query);

			return View::createView('peserta/tracklist.php', ["query_result" => $query_result]);
		}
		else {
			header("Location: login");
		}

	}

	public function show_search() {

		if (isset($_SESSION['idPerson'])) {
			$search = $_GET['input_search'];

			$query = "SELECT * FROM track WHERE tema LIKE '%$search%'";

			$query_result = $this->db->executeSelectQuery($query);

			return View::createView('peserta/tracklist.php', ["query_result" => $query_result]);
		}
		else {
			header("Location: login");
		}

	}

	public function show_trackoption() {

		if (isset($_SESSION['idPerson'])) {
			$search = $_GET['tema'];

			$query = "SELECT * FROM track WHERE track.tema = '$search'";

			$query_result = $this->db->executeSelectQuery($query);

			return View::createView('peserta/trackoption.php', ["query_result" => $query_result]);
		}
		else {
			header("Location: login");
		}

	}

}

?>