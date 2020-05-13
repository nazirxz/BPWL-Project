<?php
// including the database connection file
include_once("../model/config.php");

if(isset($_POST['update']))
{	

	$id_mahasiswa = mysqli_real_escape_string($mysqli, $_POST['id_mahasiswa']);
	
	$namalengkap = mysqli_real_escape_string($mysqli, $_POST['namalengkap']);
	$pin = mysqli_real_escape_string($mysqli, $_POST['pin']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$nohp = mysqli_real_escape_string($mysqli, $_POST['nohp']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	// checking empty fields
	if(empty($namalengkap) || empty($pin) || empty($password || empty($nohp || empty($email)))) {
				
		if(empty($namalengkap)) {
			echo "<font color='red'>Nama lengkap field is empty.</font><br/>";
		}
		
		if(empty($pin)) {
			echo "<font color='red'>Pin field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		if(empty($nohp)) {
			echo "<font color='red'>Nohp field is empty.</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE mahasiswa SET namalengkap='$namalengkap',pin='$pin',password='$password',nohp='$nohp', email='$email' WHERE id_mahasiswa=$id_mahasiswa");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id_mahasiswa = $_GET['id_mahasiswa'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id_mahasiswa=$id_mahasiswa");

while($res = mysqli_fetch_array($result))
{
	$namalengkap = $res['namalengkap'];
	$pin = $res['pin'];
	$password = $res['password'];
	$nohp = $res['nohp'];
	$email = $res['email'];
}
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
        <li><a href="index.php">Data PMB</a></li>
      </ul>
    </nav>
    <a class="cta" href="add.html"> <button>Pendaftaran</button></a>
  </header><br><br>
	<div id="frame1">
	<form name="form1" method="post" action="edit.php">
<center><h3>Edit Data User</h3>
 			<h4>PENERIMAAN MAHASISWA BARU</h4></center>
			<div class="form-group">
			<input type="text" name="namalengkap" value="<?php echo $namalengkap ?>"required/>
					<label>Nama Lengkap</label>
				</div>
				<div class="form-group">
					<input type="number" name="pin"  required value="<?php echo $pin ?>"  />
					<label>Pin</label>
				</div>
				<div class="form-group">
					<input type="password" name="password" value="<?php echo $password ?>" required />
					<label>Password</label>
				</div>
				<div class="form-group">
					<input type="number" name="nohp" value="<?php echo $nohp ?>" required />
					<label>Nomor Handphone</label>
				</div>
				<div class="form-group">
					<input type="text" name="email" value="<?php echo $email ?>" required/>
					<label>Email</label>
				</div>
 				<div class="form-group form-button" style="background-color: #0088a9">
				<td><input type="hidden" name="id_mahasiswa" value=<?php echo $_GET['id_mahasiswa'];?>></td>
				<td><input type="submit" name="update" value="Update" class="form-submit" style="color: black"></td>
			</div>
		</form>
	</div>
</html>

