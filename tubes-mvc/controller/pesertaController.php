<?php 
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/user.php";

class PesertaController{
    public function __construct() {

		$this->db = new MySQLDB("localhost", "root", "", "tubes");
	  
		if (!function_exists('str_contains')) {
			function str_contains(string $haystack, string $needle): bool {
			 return '' === $needle || false !== strpos($haystack, $needle);
			}
		}
	}
    public function ViewPeserta(){
        session_start();
        return View::createView('peserta/homePeserta.php', []);
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

		return View::createView('peserta/profil.php', ["user" => $user]);
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

		return View::createView('peserta/profilEdit.php', ["user" => $user]);
	}
	public function ViewAllProgress(){
		session_start();
		/*QUERY
		
		
		
		
		*/
		return View::createView('peserta/progress.php', []);
	}
	public function ViewSpecifyProgress(){
		session_start();
		/*QUERY
		
		
		
		
		*/
		return View::createView('peserta/currentProgress.php', []);
	}
	public function ViewKeranjangTransaksi(){
		session_start();
		/*QUERY
		
		
		
		
		*/
		return View::createView('peserta/transaksi.php', []);
	}
	public function ViewCaraBayar(){
		session_start();
		return View::createView('peserta/tataCaraPembayaran.php', []);
	}
	public function ViewUploadBukti(){
		session_start();
		/*QUERY
		
		
		
		
		*/
		return View::createView('peserta/buktiPembayaran.php', []);
	}
	//simulator
	public function ViewRiwayatTransaksi(){
		session_start();
		/*QUERY
		
		
		
		
		*/
		return View::createView('peserta/menungguVerifikasi.php', []);
	}
	public function ViewSimVerifikasi(){
		session_start();
		/*QUERY
		
		
		
		
		*/
		return View::createView('peserta/terverifikasi.php', []);
	}
	public function ViewMedali(){
		session_start();
		/*QUERY
		
		
		
		
		*/
		return View::createView('peserta/mendali.php', []);
	}
	public function ViewSimMedali(){
		session_start();
		/*QUERY
		
		
		
		
		*/
		return View::createView('peserta/mendali2.php', []);
	}
	public function ViewAllTrack(){
		session_start();
		/*QUERY
		
		
		
		
		*/
		return View::createView('peserta/track.php', []);
	}
	public function ViewSimTrack(){
		session_start();
		return View::createView('peserta/trackOption1.php', []);
	}

}
?>