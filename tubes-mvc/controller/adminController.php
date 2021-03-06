<?php 
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/user.php";

class AdminController{
    public function __construct() {

		$this->db = new MySQLDB("localhost", "root", "", "tubes");
	  
		if (!function_exists('str_contains')) {
			function str_contains(string $haystack, string $needle): bool {
			 return '' === $needle || false !== strpos($haystack, $needle);
			}
		}
	}
    public function ViewAdmin(){
        session_start();
        return View::createView('admin/homeAdmin.php', []);
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

		return View::createView('admin/profile.php', ["user" => $user]);
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

		return View::createView('admin/profileEdit.php', ["user" => $user]);
	}
	public function ViewPembayaran(){
		session_start();
		return View::createView('admin/validasiPembayaranSemua.php', []);
	}
	public function ViewBelumSemua(){
		session_start();
		return View::createView('admin/pembayaranBelumSemua.php', []);
	}
	public function ViewMedali(){
		session_start();
		return View::createView('admin/statusMendali.php', []);
	}
	public function ViewMarathon(){
		session_start();
		return View::createView('admin/statusMarathon.php', []);
	}
	public function ViewSimTerima(){
		session_start();
		return View::createView('admin/setelahDiterimaNolak.php', []);
	}
	public function ViewSimTolak(){
		session_start();
		return View::createView('admin/tolakHasil.php', []);
	}
}
?>