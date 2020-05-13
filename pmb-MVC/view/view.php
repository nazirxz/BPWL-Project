<?php 
include '../model/database.php';
$db = new database();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Daftar akun PMB</title>
		<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X_UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="../model/assets/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../model/assets/css/style.css">
	<script type="text/javascript" src="../model/assets/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<header>	
    <nav>
      <ul class="nav_links">
        <li><a href="#">Jalur PMB</a></li>
        <li><a href="#">Beasiswa</a></li>
        <li><a href="#">Informasi & Jadwal</a></li>
      </ul>
    </nav>
  </header><br><br>
<center>
<h1>CRUD PMB 2020</h1>
<h3>Data MAHASISWA PMB</h3>
 
<a href="register.php">Register Mahasiswa</a>
<table border="1">
	<tr>
		<th>id_mahasiswa</th>
		<th>Nama Lengkap</th>
		<th>Pin</th>
		<th>Password</th>
		<th>Nohp</th>
		<th>Email</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['namalengkap']; ?></td>
		<td><?php echo $x['pin']; ?></td>
		<td><?php echo $x['password']; ?></td>
		<td><?php echo $x['nohp']; ?></td>
		<td><?php echo $x['email']; ?></td>
		<td>
			<a href="edit.php?id_mahasiswa=<?php echo $x['id_mahasiswa']; ?>&aksi=edit">Edit</a>
			<a href="../controller/proses.php?id_mahasiswa=<?php echo $x['id_mahasiswa']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table> 
</center>