<?php 
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class LoginController{
    
    public function __construct() {

		$this->db = new MySQLDB("localhost", "root", "", "tubes");
        if (!function_exists('str_contains')) {
			function str_contains(string $haystack, string $needle): bool {
			 return '' === $needle || false !== strpos($haystack, $needle);
			}
		}
    }
    public function ViewLogin(){
        return View::createView('general/login.php', []);
    }

    public function logout(){
        session_start();
		session_destroy();
    }

    public function login_database(){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $query = "SELECT * FROM person WHERE username ='$username' AND password ='$password'";
        $data = $this->db->executeSelectQuery($query);
        $cek =$this->db->find_rows($query);

        if($cek > 0){            
            session_start();
            
            $_SESSION['username'] = $username;
	        $_SESSION['nama'] = $data[0]['nama'];
	        $_SESSION['status'] = "sudah_login";
	        $_SESSION['idPerson'] = $data[0]['idPerson'];
            $_SESSION['role'] = $data[0]['role'];
            if($_SESSION['role'] === 'pemilik'){
                header("location:pemilik");
            }
            elseif ($_SESSION['role'] === 'peserta'){
                header("location: peserta");
            }
            elseif ($_SESSION['role'] === 'admin') {
                header("location:admin");
            }
        }
        else {
            header("location:login?pesan=Data login tidak ditemukan! silahkan masukkan kembali data yang benar!");
        }
    }
    


    
}








?>