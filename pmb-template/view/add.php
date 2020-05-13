<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("../model/config.php");

if(isset($_POST['Submit'])) {	
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
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO mahasiswa(namalengkap,pin,password,nohp,email) VALUES('$namalengkap','$pin','$password','$nohp','$email')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
