<?php 
include 'database.php';
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
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="ssets/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
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
<center>
<h1>CRUD OOP PHP</h1>
<h3>Edit Data User</h3>
 			<h4>PENERIMAAN MAHASISWA BARU</h4></center>

			<div id="frame1">
				<form action="proses.php?aksi=update" method="post">
		<?php foreach($db->edit($_GET['id_mahasiswa']) as $d){ ?>
				<div class="form-group">
					<input type="hidden" name="id_mahasiswa" value="<?php echo $d['id_mahasiswa'] ?>">
					<input type="text" name="namalengkap" value="<?php echo $d['namalengkap'] ?>"required/>
					<label>Nama Lengkap</label>
				</div>
				<div class="form-group">
					<input type="number" name="pin"  required value="<?php echo $d['pin'] ?>"  />
					<label>Pin</label>
				</div>
				<div class="form-group">
					<input type="password" name="password" value="<?php echo $d['password'] ?>" required />
					<label>Password</label>
				</div>
				<div class="form-group">
					<input type="number" name="nohp" value="<?php echo $d['nohp'] ?>" required />
					<label>Nomor Handphone</label>
				</div>
				<div class="form-group">
					<input type="text" name="email" value="<?php echo $d['email'] ?>" required/>
					<label>Email</label>
				</div>
 				<div class="form-group form-button" style="background-color: #0088a9">
                    <input type="submit" name="simpan" class="form-submit" value="simpan" style="color: black">
                </div>
			</div>
		</div>
		<?php } ?>
	</form>
</div>
</body>
</html>