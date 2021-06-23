<?php 
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/user.php";

class PemilikController{
    public function __construct() {

		$this->db = new MySQLDB("localhost", "root", "", "tubes");
	  
		if (!function_exists('str_contains')) {
			function str_contains(string $haystack, string $needle): bool {
			 return '' === $needle || false !== strpos($haystack, $needle);
			}
		}
	}
    public function ViewPemilik(){
        session_start();
        return View::createView('pemilik/homePemilik.php', []);
    }
	public function ViewProfile(){
		session_start();
		$session = $_SESSION['idPerson'];
        // var_dump($_SESSION['idPerson']);
        // die();
		$query = "SELECT * FROM person WHERE idPerson = '$session'";
		$query_result = $this->db->executeSelectQuery($query);
        //var_dump($query_result);
        //die();
		$user = new User($query_result[0]['idPerson'], $query_result[0]['nama'], $query_result[0]['username'], $query_result[0]['email'], $query_result[0]['password'], $query_result[0]['gender'], $query_result[0]['alamat'], $query_result[0]['kontak'], $query_result[0]['tgl_lahir'], $query_result[0]['role']);

		return View::createView('pemilik/profil.php', ["user" => $user]);
	}
	public function ViewEditProfile(){
		session_start();
		$session = $_SESSION['idPerson'];
        // var_dump($_SESSION['idPerson']);
        // die();
		$query = "SELECT * FROM person WHERE idPerson = '$session'";
		$query_result = $this->db->executeSelectQuery($query);
        //var_dump($query_result);
        //die();
		$user = new User($query_result[0]['idPerson'], $query_result[0]['nama'], $query_result[0]['username'], $query_result[0]['email'], $query_result[0]['password'], $query_result[0]['gender'], $query_result[0]['alamat'], $query_result[0]['kontak'], $query_result[0]['tgl_lahir'], $query_result[0]['role']);

		return View::createView('pemilik/profil-edit.php', ["user" => $user]);
	}
	public function ViewTrack(){
		session_start();
		return View::createView('pemilik/Track.php', []);
	}
	public function ViewEditTrack(){
		session_start();
		return View::createView('pemilik/EditTrack.php', []);
	}
	public function ViewTambahTrack(){
		session_start();
		return View::createView('pemilik/tambahTrack.php', []);
	}
	public function ViewLaporanRangkuman(){
		session_start();
		return View::createView('pemilik/laporan-rangkuman.php', []);
	}
	public function ViewLaporanStatistik(){
		session_start();
		return View::createView('pemilik/laporan-statistik.php', []);
	}
}
?>