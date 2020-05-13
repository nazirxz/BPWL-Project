<?php
//including the database connection file
include_once("../model/config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC"); // using mysqli_query instead
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
    < <nav>
      <ul class="nav_links">
        <li><a href="#">Jalur PMB</a></li>
        <li><a href="#">Beasiswa</a></li>
        <li><a href="#">Informasi & Jadwal</a></li>
        <li><a href="index.php">Data PMB</a></li>
      </ul>
    </nav>
    <a class="cta" href="add.html"> <button>Pendaftaran</button></a>
  </header><br><br>
<body>
	<center>
<a style="color: black;" href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Nama Lengkap</td>
		<td>Pin</td>
		<td>Password</td>
		<td>Nohp</td>
		<td>Email</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['namalengkap']."</td>";
		echo "<td>".$res['pin']."</td>";
		echo "<td>".$res['password']."</td>";
		echo "<td>".$res['nohp']."</td>";	
		echo "<td>".$res['email']."</td>";
		echo "<td><a href=\"edit.php?id_mahasiswa=$res[id_mahasiswa]\">Edit</a> | <a href=\"delete.php?id_mahasiswa=$res[id_mahasiswa]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</center>
</body>
</html>
