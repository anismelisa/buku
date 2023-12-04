<?php
	include "koneksi.php";
	mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE nim='$_GET[id]' ");
	echo "<a href='siswa.php'>Data Sudah Dihapus...!</a>";
?>