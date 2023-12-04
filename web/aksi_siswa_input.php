<?php
	include "koneksi.php";
	mysqli_query($koneksi,"INSERT INTO mahasiswa(nim,nama,alamat,jenis_kelamin) 
	VALUES('$_POST[nim]','$_POST[nama]','$_POST[alamat]','$_POST[jenis_kelamin]')");
	echo "<a href='siswa.php'>Data Sudah Masuk...!</a>";
?>