<?php
include 'database.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Daftar akun PMB</title>
		<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X_UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="assets/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
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
    <a class="cta" href="register.php"> <button>Pendaftaran</button></a>
  </header><br><br>

			<center><h3>Daftar</h3>
			<h4>PENERIMAAN MAHASISWA BARU</h4></center>

			<div id="frame1">
				<form action="proses.php?aksi=tambah" method="post">

				<div class="form-group">
					<input type="text" name="namalengkap" required/>
					<label>Nama Lengkap</label>
				</div>
				<div class="form-group">
					<input type="number" name="pin"  required  />
					<label>Pin</label>
				</div>
				<div class="form-group">
					<input type="password" name="password" required />
					<label>Password</label>
				</div>
				<div class="form-group">
					<input type="number" name="nohp" required />
					<label>Nomor Handphone</label>
				</div>
				<div class="form-group">
					<input type="text" name="email" required/>
					<label>Email</label>
				</div>
 				<div class="form-group form-button" style="background-color: #0088a9">
                    <input type="submit" name="register" class="form-submit" value="Register" style="color: black">
                </div>
			</div>
		</div>
		</form>
	</div>
</body>
</html>
