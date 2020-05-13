<?php
	require 'vendor/autoload.php';
	use Carbon\Carbon;

	$sekarang = Carbon::now();

	echo "Sekarang :$sekarang <br>";
	echo "Umur saya :".Carbon::createFromDate(2001,10,20)->age."<br>";
	echo "Besok :".$sekarang->addDay()."<br>";
	echo "Bulan Depan :".$sekarang->addMonth()."<br>";
	echo "Tahun Depan :".$sekarang->addYear()."<br>";

	if (Carbon::now()->isWeekend()) {
		echo "<br>Liburan bro tapi <hidden>boong !";
	} else {
		echo "<br>senin sampai minggu tugas semuanyaa hehe";
	}
?>
