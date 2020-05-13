<?php
class database {
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "pmb2020";
	var $con;
	var $hasil;

	function __construct(){
		$this->con=mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
		mysqli_select_db($this->con,$this->db);
	}

	function tampil_data(){
		$data = mysqli_query($this->con,"SELECT * from mahasiswa");
		while ($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;	
	}
	function input($namalengkap,$pin,$password,$nohp,$email) {
		mysqli_query($this->con,"INSERT into mahasiswa values('','$namalengkap','$pin','$password','$nohp','$email')");
	}
	function hapus($id_mahasiswa) {
		mysqli_query($this->con,"DELETE from mahasiswa where id_mahasiswa='$id_mahasiswa'");	
	}
	function edit($id_mahasiswa) {
		$data = mysqli_query($this->con,"SELECT * from mahasiswa where id_mahasiswa='$id_mahasiswa'");
		while ($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update($id_mahasiswa,$namalengkap,$pin,$password,$nohp,$email) {
		mysqli_query($this->con,"UPDATE mahasiswa set namalengkap='$namalengkap',pin=$pin,password='$password',nohp='$nohp', email = '$email' where id_mahasiswa='$id_mahasiswa'");
	}
}
?>
