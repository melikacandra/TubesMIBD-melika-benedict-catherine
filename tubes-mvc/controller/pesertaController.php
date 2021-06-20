<?php 
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

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
	

}
?>