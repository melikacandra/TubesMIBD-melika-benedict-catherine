<?php

class MySQLDB{
	// Nomor 0
	protected $servername;
	protected $username;
	protected $password;
	protected $dbname;

	protected $db_connection;

	public function __construct($servername, $username, $password, $dbname){
		$this->servername = $servername;
		$this->username = $username;
		$this->password = $password;
		$this->dbname = $dbname;
	}

	public function openConnection(){
		//create connection
		$this->db_connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

		//check connection
		if($this->db_connection->connect_error){
			die('Could not connect to'.$this->servername.'server');
		}
	}
	public function escapeString($name){
		$this->openConnection();
		$escapedname = $this->db_connection->real_escape_string($name);
		return $escapedname;
	}

	public function executeSelectQuery($sql){
		$this->openConnection();
		$query_result = $this->db_connection->query($sql);
		$result = [];
		if($query_result->num_rows > 0){
			while($row = $query_result->fetch_assoc()){
				$result[] = $row;	
			}
		}
		$this->closeConnection();
		
		return $result;
		
	}
	public function find_rows($sql){
		$this->openConnection();
		$result = $this->db_connection->query($sql)->num_rows;
		// var_dump($result);
		// die();
		$this->closeConnection;
		return $result;

	}
	public function executeNonSelectQuery($sql){
		$this->openConnection();
		$query_result = $this->db_connection->query($sql); //TRUE or FALSE
		$this->closeConnection();
		return $query_result;
	}
	public function closeConnection(){
		$this->db_connection->close();
	}

}

$db = new MySQLDB("localhost","root","","ide");
?>