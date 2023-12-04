<?php
include "koneksi.php";
mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE id='$_GET[id]
	' ");
	echo "<a href='siswa.php'>Data Sudah Dihapus...!</a>";
?>