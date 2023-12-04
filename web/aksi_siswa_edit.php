<?php
	include "koneksi.php";
	mysqli_query($koneksi,"UPDATE mahasiswa SET nama = '$_POST[nama]', alamat = '$_POST[alamat]',jenis_kelamin='$_POST[jenis_kelamin]'
	WHERE nim = '$_POST[nim]' ");
	echo "<a href='siswa.php'>Data Sudah Update...!</a>";
?>