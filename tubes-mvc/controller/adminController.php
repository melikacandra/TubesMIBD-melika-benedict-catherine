<?php 
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

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

}
?>