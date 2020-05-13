<?php
//including the database connection file
include("../model/config.php");

//getting id of the data from url
$id_mahasiswa = $_GET['id_mahasiswa'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE id_mahasiswa=$id_mahasiswa");

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>

