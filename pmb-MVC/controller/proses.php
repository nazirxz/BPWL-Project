<?php 
include '../model/database.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['namalengkap'],$_POST['pin'],$_POST['password'],$_POST['nohp'],$_POST['email'],$_POST['password']);
 	header("location:../view/view.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id_mahasiswa']);
	header("location:../view/view.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id_mahasiswa'],$_POST['namalengkap'],$_POST['pin'],$_POST['password'],$_POST['nohp'],$_POST['email'],$_POST['password']);
 	header("location:../view/view.php");
 }
?>