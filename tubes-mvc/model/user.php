<?php

class User {

	protected $idPerson;
	protected $nama;
	protected $username;
	protected $email;
	protected $password;
	protected $gender;
	protected $alamat;
	protected $kontak;
	protected $tgl_lahir;
	protected $role;

	public function __construct($idPerson, $nama, $username, $email, $password, $gender, $alamat, $kontak, $tgl_lahir, $role) {
		$this->idPerson = $idPerson;
		$this->nama = $nama;
		$this->username = $username;
		$this->email = $email;
		$this->gender = $gender;
		$this->alamat = $alamat;
		$this->kontak = $kontak;
		$this->tgl_lahir = $tgl_lahir;
		$this->role = $role;
	}

	public function getIdPerson() {
		return $this->idPerson;
	}

	public function getNama() {
		return $this->nama;
	}

	public function getUsername() {
		return $this->username;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getGender() {
		return $this->gender;
	}

	public function getAlamat() {
		return $this->alamat;
	}

	public function getKontak() {
		return $this->kontak;
	}

	public function getTgl_lahir() {
		return $this->tgl_lahir;
	}

	public function getRole() {
		return $this->role;
	}
}

?>